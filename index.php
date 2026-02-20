<?php
    include("VIEW/layout/header.php");
 
    $page = isset($_GET["page"]) ? $_GET["page"] : "index";

    switch ($page) {
        case ("index") :
            include("VIEW/intro/index.php");
        break;

        case ("projet") :
            include("VIEW/projets/projet.php");
        break;

        case ("projet_detail") :
            include("VIEW/projets/projet-detail.php");
        break;

        case ("cv") :
            include("VIEW/cv/cv.php");
        break;

        case ("contact") :
            include("VIEW/forms/contact.php");
        break;
        case ("apropos") :
            include("VIEW/about/about.php");
        break;

        default:
        include("VIEW/intro/index.php");
        break;

    }

    include("VIEW/layout/footer.php");
    ?>