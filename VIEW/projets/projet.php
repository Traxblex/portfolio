<title>PROJET - ALLAMA</title>
<?php $baseUrl = isset($baseUrl) ? $baseUrl : rtrim(dirname($_SERVER['SCRIPT_NAME']), "\\/") . '/'; ?>
<main class="main">

  <!-- projet Section -->
  <section id="projet" class="projet section">

    <!-- Section Title -->
    <div class="container section-title" data-aos="fade-up">
      <h2>PROJETS</h2>
      <p>Les projets que j'ai réalisés durant mes études et mon parcours professionnel</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
        <ul class="projet-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
          <li data-filter="*" class="filter-active">Tous</li>
          <li data-filter=".filter-ecole">École</li>
          <li data-filter=".filter-personnel">Personnel</li>
          <li data-filter=".filter-entreprise">Entreprise</li>
        </ul>

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

          <!-- Projet 1 : Site Vitrine Pizzeria -->
          <div class="col-lg-4 col-md-6 projet-item isotope-item filter-ecole">
            <div class="projet-card">
              <div class="projet-img">
                <img src="<?= $baseUrl ?>public/assets/img/projet/projet-1.webp" alt="Site Vitrine Pizzeria" class="img-fluid">
                <div class="projet-overlay">
                  <a href="<?= $baseUrl ?>public/assets/img/projet/projet-1.webp" class="glightbox projet-lightbox" title="Site Vitrine Pizzeria"><i class="bi bi-zoom-in"></i></a>
                  <a href="index.php?page=projet_detail&id=1" class="projet-details-link" title="Voir les détails"><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
              <div class="projet-info">
                <h4>Site vitrine</h4>
                <p>Site vitrine pour une pizzeria avec menu, formulaire de commande et design responsive.</p>
                <div class="projet-tags">
                  <span>École</span>
                  <span>Groupe</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Projet 2 : FitSport -->
          <div class="col-lg-4 col-md-6 projet-item isotope-item filter-ecole">
            <div class="projet-card">
              <div class="projet-img">
                <img src="<?= $baseUrl ?>public/assets/img/projets/fitsport.webp" alt="Application FitSport" class="img-fluid"
                     onerror="this.src='<?= $baseUrl ?>public/assets/img/projet/projet-2.webp'">
                <div class="projet-overlay">
                  <a href="<?= $baseUrl ?>public/assets/img/projets/fitsport.webp" class="glightbox projet-lightbox" title="Application FitSport"><i class="bi bi-zoom-in"></i></a>
                  <a href="index.php?page=projet_detail&id=2" class="projet-details-link" title="Voir les détails"><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
              <div class="projet-info">
                <h4>Application web FitSport</h4>
                <p>Application de gestion des inscriptions et séances pour un club de sport.</p>
                <div class="projet-tags">
                  <span>École</span>
                  <span>Groupe</span>
                </div>
              </div>
            </div>
          </div>

          <!-- Projet 3 : Portfolio -->
          <div class="col-lg-4 col-md-6 projet-item isotope-item filter-personnel">
            <div class="projet-card">
              <div class="projet-img">
                <img src="<?= $baseUrl ?>public/assets/img/projets/portfolio.webp" alt="Portfolio" class="img-fluid"
                     onerror="this.src='<?= $baseUrl ?>public/assets/img/projet/projet-3.webp'">
                <div class="projet-overlay">
                  <a href="<?= $baseUrl ?>public/assets/img/projets/portfolio.webp" class="glightbox projet-lightbox" title="Portfolio Personnel"><i class="bi bi-zoom-in"></i></a>
                  <a href="index.php?page=projet_detail&id=3" class="projet-details-link" title="Voir les détails"><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
              <div class="projet-info">
                <h4>Portfolio Personnel</h4>
                <p>Portfolio réalisé en PHP MVC avec animations AOS et architecture propre.</p>
                <div class="projet-tags">
                  <span>Personnel</span>
                  <span>Solo</span>
                </div>
              </div>
            </div>
          </div>

        </div><!-- End projet Items Container -->
      </div>

    </div>
  </section>

</main>