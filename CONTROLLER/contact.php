<?php
  /**
  * Requires the "PHP Email Form" library
  * The library is located here in this project:
  *   public/assets/vendor/php-email-form/php-email-form.php
  */

  // Replace contact@example.com with your real receiving email address
  $receiving_email_address = 'allamacamara1@gmail.com';

  $php_email_form_path = __DIR__ . '/../public/assets/vendor/php-email-form/php-email-form.php';
  if (file_exists($php_email_form_path)) {
    include $php_email_form_path;
  } else {
    die('Unable to load the "PHP Email Form" Library! Path: ' . $php_email_form_path);
  }

  $contact = new PHP_Email_Form;
  $contact->ajax = true;
  
  $contact->to = $receiving_email_address;
  $contact->from_name = $_POST['name'];
  $contact->from_email = $_POST['email'];
  $contact->subject = $_POST['subject'];

  // SMTP configuration (recommended for local dev/testing)
  // Use Mailtrap (https://mailtrap.io) to capture emails without sending to real inboxes.
  // 1) Crée un compte Mailtrap
  // 2) Récupère les valeurs "SMTP" (host / port / username / password)
  // 3) Remplace ci-dessous pour qu'il corresponde à ton compte Mailtrap.
  $contact->smtp = array(
    'host' => 'sandbox.smtp.mailtrap.io',
    'username' => '92dbcaa94f2b7f',
    'password' => 'c3e2b4375352b5',
    'port' => '2525'
  );

  $contact->add_message( $_POST['name'], 'From');
  $contact->add_message( $_POST['email'], 'Email');
  isset($_POST['phone']) && $contact->add_message($_POST['phone'], 'Phone');
  $contact->add_message( $_POST['message'], 'Message', 10);

  echo $contact->send();
?>
