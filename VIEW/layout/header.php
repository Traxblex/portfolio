<?php
// Calcul unique et fiable du baseUrl
if (!isset($baseUrl)) {
    $scriptDir = rtrim(dirname($_SERVER['SCRIPT_NAME']), "\\/ ");
    $baseUrl = ($scriptDir === '' || $scriptDir === '.') ? '/' : $scriptDir . '/';
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta name="description" content="Portfolio d'ALLAMA CAMARA, développeur web BTS SIO SLAM">
  <meta name="keywords" content="portfolio, développeur web, BTS SIO SLAM, PHP, JavaScript">

  <!-- Favicons -->
  <link href="<?= $baseUrl ?>public/assets/img/favicon.png" rel="icon">
  <link href="<?= $baseUrl ?>public/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= $baseUrl ?>public/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= $baseUrl ?>public/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= $baseUrl ?>public/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= $baseUrl ?>public/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= $baseUrl ?>public/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="<?= $baseUrl ?>public/assets/css/main.css" rel="stylesheet">

</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center light-background sticky-top">
    <div class="container position-relative d-flex align-items-center justify-content-between">

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="<?= $baseUrl ?>index.php?page=index">ALLAMA</a></li>
          <li><a href="<?= $baseUrl ?>index.php?page=about">À PROPOS</a></li>
          <li><a href="<?= $baseUrl ?>index.php?page=cv">CV</a></li>
          <li><a href="<?= $baseUrl ?>index.php?page=bts_sio">BTS SIO</a></li>
          <li><a href="<?= $baseUrl ?>index.php?page=entreprise">ENTREPRISE</a></li>
          <li><a href="<?= $baseUrl ?>index.php?page=projet">PROJETS</a></li>
          <li><a href="<?= $baseUrl ?>index.php?page=contact">CONTACT</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

      <div class="header-social-links">
        <a href="https://x.com/traxblex"><i class="bi bi-twitter-x"></i></a>
        <a href="https://www.linkedin.com/in/allama-mohamed-camara-b75b00189/"><i class="bi bi-linkedin"></i></a>
        <a href="https://github.com/Traxblex"><i class="bi bi-github"></i></a>
        <a href="https://www.instagram.com/allama013/"><i class="bi bi-instagram"></i></a>
      </div>

    </div>
  </header>