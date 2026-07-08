<title>PROJET - ALLAMA</title>
<?php $baseUrl = isset($baseUrl) ? $baseUrl : rtrim(dirname($_SERVER['SCRIPT_NAME']), "\\/") . '/'; ?>
<main class="main">

  <section id="projet" class="projet section">

    <div class="container section-title" data-aos="fade-up">
      <h2>PROJETS</h2>
      <p>Les projets que j'ai réalisés durant mes études et mon parcours professionnel</p>
    </div>

    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="isotope-layout" data-default-filter="*" data-layout="fitRows" data-sort="original-order">

        <ul class="projet-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
          <li data-filter="*" class="filter-active">Tous</li>
          <li data-filter=".filter-ecole">École</li>
          <li data-filter=".filter-personnel">Personnel</li>
          <li data-filter=".filter-entreprise">Entreprise</li>
        </ul>

        <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">

          <!-- 1 : Pizzeria -->
          <div class="col-lg-4 col-md-6 isotope-item filter-ecole">
            <div class="projet-card h-100 d-flex flex-column">
              <div class="projet-img" style="height:220px;overflow:hidden;">
                <img src="<?= $baseUrl ?>public/assets/img/projets/projet-1.png" alt="Site Vitrine Pizzeria" style="width:100%;height:100%;object-fit:cover;object-position:center;" onerror="this.onerror=null;this.src='<?= $baseUrl ?>public/assets/img/profile-square-11.png'">
                <div class="projet-overlay">
                  <a href="<?= $baseUrl ?>public/assets/img/projets/projet-1.png" class="glightbox projet-lightbox" title="Site Vitrine Pizzeria"><i class="bi bi-zoom-in"></i></a>
                  <a href="index.php?page=projet_detail&id=1" class="projet-details-link" title="Voir les détails"><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
              <div class="projet-info d-flex flex-column flex-grow-1 p-3">
                <h4>Site vitrine Pizzeria</h4>
                <p class="flex-grow-1">Site vitrine pour une pizzeria avec menu, formulaire de commande et design responsive.</p>
                <div class="projet-tags mt-auto"><span>École</span><span>Groupe</span></div>
              </div>
            </div>
          </div>

          <!-- 2 : FitSport -->
          <div class="col-lg-4 col-md-6 isotope-item filter-ecole">
            <div class="projet-card h-100 d-flex flex-column">
              <div class="projet-img" style="height:220px;overflow:hidden;">
                <img src="<?= $baseUrl ?>public/assets/img/projets/fitsport.webp" alt="Application FitSport" style="width:100%;height:100%;object-fit:cover;object-position:center;" onerror="this.onerror=null;this.src='<?= $baseUrl ?>public/assets/img/profile-square-11.png'">
                <div class="projet-overlay">
                  <a href="<?= $baseUrl ?>public/assets/img/projets/fitsport.webp" class="glightbox projet-lightbox" title="Application FitSport"><i class="bi bi-zoom-in"></i></a>
                  <a href="index.php?page=projet_detail&id=2" class="projet-details-link" title="Voir les détails"><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
              <div class="projet-info d-flex flex-column flex-grow-1 p-3">
                <h4>Application FitSport</h4>
                <p class="flex-grow-1">Application de gestion des inscriptions et séances pour un club de sport.</p>
                <div class="projet-tags mt-auto"><span>École</span><span>Groupe</span></div>
              </div>
            </div>
          </div>

          <!-- 3 : Portfolio -->
          <div class="col-lg-4 col-md-6 isotope-item filter-personnel">
            <div class="projet-card h-100 d-flex flex-column">
              <div class="projet-img" style="height:220px;overflow:hidden;">
                <img src="<?= $baseUrl ?>public/assets/img/projets/portfolio.png" alt="Portfolio Personnel" style="width:100%;height:100%;object-fit:cover;object-position:center;" onerror="this.onerror=null;this.src='<?= $baseUrl ?>public/assets/img/profile-square-11.png'">
                <div class="projet-overlay">
                  <a href="<?= $baseUrl ?>public/assets/img/projets/portfolio.png" class="glightbox projet-lightbox" title="Portfolio Personnel"><i class="bi bi-zoom-in"></i></a>
                  <a href="index.php?page=projet_detail&id=3" class="projet-details-link" title="Voir les détails"><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
              <div class="projet-info d-flex flex-column flex-grow-1 p-3">
                <h4>Portfolio Personnel</h4>
                <p class="flex-grow-1">Portfolio réalisé en PHP MVC avec animations AOS et architecture propre.</p>
                <div class="projet-tags mt-auto"><span>Personnel</span><span>Solo</span></div>
              </div>
            </div>
          </div>

          <!-- 4 : FreelanceIT -->
          <div class="col-lg-4 col-md-6 isotope-item filter-ecole">
            <div class="projet-card h-100 d-flex flex-column">
              <div class="projet-img" style="height:220px;overflow:hidden;">
                <img src="<?= $baseUrl ?>public/assets/img/projets/freelanceit.png" alt="FreelanceIT" style="width:100%;height:100%;object-fit:cover;object-position:center;" onerror="this.onerror=null;this.src='<?= $baseUrl ?>public/assets/img/profile-square-11.png'">
                <div class="projet-overlay">
                  <a href="<?= $baseUrl ?>public/assets/img/projets/freelanceit.png" class="glightbox projet-lightbox" title="FreelanceIT"><i class="bi bi-zoom-in"></i></a>
                  <a href="index.php?page=projet_detail&id=4" class="projet-details-link" title="Voir les détails"><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
              <div class="projet-info d-flex flex-column flex-grow-1 p-3">
                <h4>FreelanceIT</h4>
                <p class="flex-grow-1">Plateforme de mise en relation entre freelances informatiques et entreprises.</p>
                <div class="projet-tags mt-auto"><span>École</span><span>Groupe</span></div>
              </div>
            </div>
          </div>

          <!-- 5 : Castify -->
          <div class="col-lg-4 col-md-6 isotope-item filter-ecole">
            <div class="projet-card h-100 d-flex flex-column">
              <div class="projet-img" style="height:220px;overflow:hidden;">
                <img src="<?= $baseUrl ?>public/assets/img/projets/Castify.png" alt="Castify" style="width:100%;height:100%;object-fit:cover;object-position:center;" onerror="this.onerror=null;this.src='<?= $baseUrl ?>public/assets/img/profile-square-11.png'">
                <div class="projet-overlay">
                  <a href="<?= $baseUrl ?>public/assets/img/projets/Castify.png" class="glightbox projet-lightbox" title="Castify"><i class="bi bi-zoom-in"></i></a>
                  <a href="index.php?page=projet_detail&id=5" class="projet-details-link" title="Voir les détails"><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
              <div class="projet-info d-flex flex-column flex-grow-1 p-3">
                <h4>Castify</h4>
                <p class="flex-grow-1">Application de mise en relation entre réalisateurs et acteurs pour des castings.</p>
                <div class="projet-tags mt-auto"><span>École</span><span>Groupe</span></div>
              </div>
            </div>
          </div>

          <!-- 6 : Site de Cours -->
          <div class="col-lg-4 col-md-6 isotope-item filter-ecole">
            <div class="projet-card h-100 d-flex flex-column">
              <div class="projet-img" style="height:220px;overflow:hidden;">
                <img src="<?= $baseUrl ?>public/assets/img/projets/site_cours.png" alt="Site de Cours" style="width:100%;height:100%;object-fit:cover;object-position:center;" onerror="this.onerror=null;this.src='<?= $baseUrl ?>public/assets/img/profile-square-11.png'">
                <div class="projet-overlay">
                  <a href="<?= $baseUrl ?>public/assets/img/projets/site_cours.png" class="glightbox projet-lightbox" title="Site de Cours"><i class="bi bi-zoom-in"></i></a>
                  <a href="index.php?page=projet_detail&id=6" class="projet-details-link" title="Voir les détails"><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
              <div class="projet-info d-flex flex-column flex-grow-1 p-3">
                <h4>Site de Cours</h4>
                <p class="flex-grow-1">Site pour consulter mes cours classés par matière et chapitre.</p>
                <div class="projet-tags mt-auto"><span>École</span><span>Solo</span></div>
              </div>
            </div>
          </div>

          <!-- 7 : Portfolio WordPress -->
          <div class="col-lg-4 col-md-6 isotope-item filter-ecole">
            <div class="projet-card h-100 d-flex flex-column">
              <div class="projet-img" style="height:220px;overflow:hidden;">
                <img src="<?= $baseUrl ?>public/assets/img/projets/wordpress.png" alt="Portfolio WordPress" style="width:100%;height:100%;object-fit:cover;object-position:center;" onerror="this.onerror=null;this.src='<?= $baseUrl ?>public/assets/img/profile-square-11.png'">
                <div class="projet-overlay">
                  <a href="<?= $baseUrl ?>public/assets/img/projets/wordpress.png" class="glightbox projet-lightbox" title="Portfolio WordPress"><i class="bi bi-zoom-in"></i></a>
                  <a href="index.php?page=projet_detail&id=7" class="projet-details-link" title="Voir les détails"><i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
              <div class="projet-info d-flex flex-column flex-grow-1 p-3">
                <h4>Portfolio WordPress</h4>
                <p class="flex-grow-1">Première version du portfolio réalisée avec WordPress et Elementor.</p>
                <div class="projet-tags mt-auto"><span>École</span><span>Groupe</span></div>
              </div>
            </div>
          </div>

        </div><!-- /.isotope-container -->
      </div><!-- /.isotope-layout -->
    </div><!-- /.container -->

  </section>

</main>
