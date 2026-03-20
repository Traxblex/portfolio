<?php
class FrontController {
    public static function dispatch() {
        $page = isset($_GET['page']) ? $_GET['page'] : 'index';

        switch ($page) {
            case 'contact':
                require_once __DIR__ . '/ContactController.php';
                $ctrl = new ContactController();
                $ctrl->handle();
                break;

            default:
                require_once __DIR__ . '/PagesController.php';
                $ctrl = new PagesController();
                $ctrl->render($page);
                break;
        }
    }
}
