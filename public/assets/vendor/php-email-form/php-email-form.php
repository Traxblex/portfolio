<?php

class PHP_Email_Form {

    public $ajax = false;

    public $to;

    public $from_name;

    public $from_email;

    public $subject;

    public $smtp = null;

    public $cc = array();

    public $bcc = array();

    public $honeypot = null;

    public $recaptcha_secret_key = null;

    public $messages = array();

    public $attachments = array();

    // Error messages

    public $invalid_to_email = 'Email to (receiving email address) is empty or invalid!';

    public $invalid_from_name = 'From Name is empty!';

    public $invalid_from_email = 'Email from: is empty or invalid!';

    public $invalid_subject = 'Subject is too short or empty!';

    public $short = 'is too short or empty!';

    public $ajax_error = 'Sorry, the request should be an Ajax POST';

    public $recaptcha_error = 'reCAPTCHA verification failed!';

    public $attachment_error = 'Attachment error!';

    public function add_message($msg, $label, $min_length = 0) {

        if ($min_length > 0 && strlen($msg) < $min_length) {

            die($label . ' ' . $this->short);

        }

        $this->messages[] = $label . ': ' . $msg;

    }

    public function add_attachment($field, $max_size, $allowed_ext) {

        if (!isset($_FILES[$field])) return;

        $file = $_FILES[$field];

        if ($file['error'] != UPLOAD_ERR_OK) {

            die($this->attachment_error);

        }

        $size = $file['size'] / 1024 / 1024; // MB

        if ($size > $max_size) {

            die('File too large!');

        }

        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        if (!in_array($ext, $allowed_ext)) {

            die('Invalid file type!');

        }

        $this->attachments[] = $file;

    }

    public function send() {

        // Check AJAX

        if ($this->ajax) {

            if (!isset($_SERVER['HTTP_X_REQUESTED_WITH']) || strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {

                die($this->ajax_error);

            }

        }

        // Validate

        if (empty($this->to) || !filter_var($this->to, FILTER_VALIDATE_EMAIL)) {

            die($this->invalid_to_email);

        }

        if (empty($this->from_name)) {

            die($this->invalid_from_name);

        }

        if (empty($this->from_email) || !filter_var($this->from_email, FILTER_VALIDATE_EMAIL)) {

            die($this->invalid_from_email);

        }

        if (empty($this->subject)) {

            die($this->invalid_subject);

        }

        // Honeypot

        if ($this->honeypot !== null && !empty($_POST[$this->honeypot])) {

            die('Spam detected!');

        }

        // reCAPTCHA

        if ($this->recaptcha_secret_key) {

            if (!isset($_POST['g-recaptcha-response'])) {

                die($this->recaptcha_error);

            }

            $recaptcha_response = $_POST['g-recaptcha-response'];

            $verify = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $this->recaptcha_secret_key . '&response=' . $recaptcha_response);

            $verify = json_decode($verify);

            if (!$verify->success) {

                die($this->recaptcha_error);

            }

        }

        // Build message

        $body = implode("\n\n", $this->messages);

        // Send

        if ($this->smtp) {

            $this->send_via_smtp($body);

        } else {

            $this->send_via_mail($body);

        }

        return 'OK';

    }

    private function send_via_mail($body) {

        $headers = "From: " . $this->from_name . " <" . $this->from_email . ">\r\n";

        $headers .= "Reply-To: " . $this->from_email . "\r\n";

        if (!empty($this->cc)) {

            $headers .= "Cc: " . implode(',', $this->cc) . "\r\n";

        }

        if (!empty($this->bcc)) {

            $headers .= "Bcc: " . implode(',', $this->bcc) . "\r\n";

        }

        $to = $this->to;

        if (!empty($this->cc)) {

            $to .= ',' . implode(',', $this->cc);

        }

        if (!empty($this->bcc)) {

            $to .= ',' . implode(',', $this->bcc);

        }

        // Attachments

        if (!empty($this->attachments)) {

            $boundary = md5(time());

            $headers .= "MIME-Version: 1.0\r\n";

            $headers .= "Content-Type: multipart/mixed; boundary=\"$boundary\"\r\n";

            $message = "--$boundary\r\n";

            $message .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n";

            $message .= $body . "\r\n\r\n";

            foreach ($this->attachments as $file) {

                $message .= "--$boundary\r\n";

                $message .= "Content-Type: " . mime_content_type($file['tmp_name']) . "; name=\"" . $file['name'] . "\"\r\n";

                $message .= "Content-Transfer-Encoding: base64\r\n";

                $message .= "Content-Disposition: attachment; filename=\"" . $file['name'] . "\"\r\n\r\n";

                $message .= chunk_split(base64_encode(file_get_contents($file['tmp_name']))) . "\r\n";

            }

            $message .= "--$boundary--";

            $body = $message;

        } else {

            $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

        }

        if (!mail($to, $this->subject, $body, $headers)) {

            die('Mail sending failed!');

        }

    }

    private function send_via_smtp($body) {

        // Basic SMTP implementation

        $host = $this->smtp['host'];

        $port = $this->smtp['port'];

        $username = $this->smtp['username'];

        $password = $this->smtp['password'];

        $ssl = ($port == 465) ? 'ssl://' : '';

        $socket = fsockopen($ssl . $host, $port, $errno, $errstr, 30);

        if (!$socket) {

            die('SMTP connection failed: ' . $errstr);

        }

        $this->smtp_command($socket, "EHLO $host");

        if ($port == 587) {

            $this->smtp_command($socket, "STARTTLS");

            // Use a modern TLS method if available (TLSv1.2/1.3), fallback to general TLS
            $cryptoMethod = defined('STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT') ? STREAM_CRYPTO_METHOD_TLSv1_3_CLIENT : 
                            (defined('STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT') ? STREAM_CRYPTO_METHOD_TLSv1_2_CLIENT : STREAM_CRYPTO_METHOD_TLS_CLIENT);

            if (!stream_socket_enable_crypto($socket, true, $cryptoMethod)) {
                die('SMTP error: TLS handshake failed (wrong version / unsupported).');
            }

            $this->smtp_command($socket, "EHLO $host");

        }

        $this->smtp_command($socket, "AUTH LOGIN");

        $this->smtp_command($socket, base64_encode($username));

        $this->smtp_command($socket, base64_encode($password));

        $this->smtp_command($socket, "MAIL FROM:<" . $this->from_email . ">");

        $this->smtp_command($socket, "RCPT TO:<" . $this->to . ">");

        foreach ($this->cc as $cc) {

            $this->smtp_command($socket, "RCPT TO:<$cc>");

        }

        foreach ($this->bcc as $bcc) {

            $this->smtp_command($socket, "RCPT TO:<$bcc>");

        }

        $this->smtp_command($socket, "DATA");

        $message = "From: " . $this->from_name . " <" . $this->from_email . ">\r\n";

        $message .= "To: " . $this->to . "\r\n";

        if (!empty($this->cc)) {

            $message .= "Cc: " . implode(',', $this->cc) . "\r\n";

        }

        $message .= "Subject: " . $this->subject . "\r\n";

        $message .= "Content-Type: text/plain; charset=UTF-8\r\n\r\n";

        $message .= $body . "\r\n.\r\n";

        fputs($socket, $message);

        $this->smtp_command($socket, "QUIT");

        fclose($socket);

    }

    private function smtp_command($socket, $command) {

        fputs($socket, $command . "\r\n");

        $response = fgets($socket, 512);

        if (substr($response, 0, 1) != '2' && substr($response, 0, 1) != '3') {

            die('SMTP error: ' . $response);

        }

    }

}

?>