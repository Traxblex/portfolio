<?php
class ContactController {
    public function handle() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            session_start();
            $_SESSION['contact_data'] = $_POST;
            header('Location: index.php?page=contact');
            exit;
        }

        include __DIR__ . '/../VIEW/layout/header.php';
        include __DIR__ . '/../VIEW/forms/contact.php';
        include __DIR__ . '/../VIEW/layout/footer.php';
    }
}
