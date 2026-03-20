<?php
class PagesController {
    public function render($page) {
        include __DIR__ . '/../VIEW/layout/header.php';

        switch ($page) {
            case 'index':
                include __DIR__ . '/../VIEW/intro/index.php';
                break;
            case 'projet':
                include __DIR__ . '/../VIEW/projets/projet.php';
                break;
            case 'projet_detail':
                include __DIR__ . '/../VIEW/projets/projet-detail.php';
                break;
            case 'cv':
                include __DIR__ . '/../VIEW/cv/cv.php';
                break;
            case 'apropos':
            case 'about':
                include __DIR__ . '/../VIEW/about/about.php';
                break;
            case 'contact':
                include __DIR__ . '/../VIEW/forms/contact.php';
                break;
            case 'entreprise':
                include __DIR__ . '/../VIEW/entreprise/entreprise.php';
                break;
            default:
                include __DIR__ . '/../VIEW/intro/index.php';
                break;
        }

        include __DIR__ . '/../VIEW/layout/footer.php';
    }
}
