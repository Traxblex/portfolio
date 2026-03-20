<title>PROJET - ALLAMA</title>
 <?php $baseUrl = isset($baseUrl) ? $baseUrl : rtrim(dirname($_SERVER['SCRIPT_NAME']), "\\/") . '/'; ?>
 <main class="main">

    <!-- projet Section -->
    <section id="projet" class="projet section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>PROJETS</h2>
        <p>les projets que j'ai réalisés durant mes études et mon parcours professionnel</p>
      </div><!-- End Section Title -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">
          <ul class="projet-filters isotope-filters" data-aos="fade-up" data-aos-delay="200">
            <li data-filter="*" class="filter-active">Tous</li>
            <li data-filter=".filter-ecole">École</li>
            <li data-filter=".filter-personnel">Personnel</li>
            <li data-filter=".filter-entreprise">Entreprise</li>
          </ul><!-- End projet Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="300">
            <div class="col-lg-4 col-md-6 projet-item isotope-item filter-ecole">
              <div class="projet-card">
                <div class="projet-img">
                  <img src="<?= $baseUrl ?>public/assets/img/projet/projet-1.webp" alt="projet Item" class="img-fluid">
                  <div class="projet-overlay">
                    <a href="<?= $baseUrl ?>public/assets/img/projet/projet-1.webp" class="glightbox projet-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="#" class="projet-details-link"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <div class="projet-info">
                  <h4>Site vitrine</h4>
                  <p>J'ai créé un site vitrine pour une pizzaria qui cherchait à améliorer sa présence en ligne.</p>
                  <div class="projet-tags">
                    <span>École</span>
                    <span>Groupe</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 projet-item isotope-item filter-ecole">
              <div class="projet-card">
                <div class="projet-img">
                  <img src="<?= $baseUrl ?>public/assets/img/projets/fitsport.webp" alt="projet Item" class="img-fluid">
                  <div class="projet-overlay">
                    <a href="<?= $baseUrl ?>public/assets/img/projets/fitsport.webp" class="glightbox projet-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="#" class="projet-details-link"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <div class="projet-info">
                  <h4>Application web</h4>
                  <p>J'ai développé une application web pour permettre à un club de sport de gérer ses inscriptions et ses séances collectives.</p>
                  <div class="projet-tags">
                    <span>École</span>
                    <span>Groupe</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 projet-item isotope-item filter-personnel">
              <div class="projet-card">
                <div class="projet-img">
                  <img src="<?= $baseUrl ?>public/assets/img/projets/portfolio.webp" alt="projet Item" class="img-fluid">
                  <div class="projet-overlay">
                    <a href="<?= $baseUrl ?>public/assets/img/projets/portfolio.webp" class="glightbox projet-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="index.php?page=index" class="projet-details-link"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <div class="projet-info">
                  <h4>Portfolio Website</h4>
                  <p>J'ai réalisé mon portfolio en utilisant HTML, CSS, PHP et JavaScript.</p>
                  <div class="projet-tags">
                    <span>Personel</span>
                    <span>Development</span>
                  </div>
                </div>
              </div>
            </div>

          <!--
            <div class="col-lg-4 col-md-6 projet-item isotope-item filter-technology">
              <div class="projet-card">
                <div class="projet-img">
                  <img src="<?= $baseUrl ?>public/assets/img/projet/projet-4.webp" alt="projet Item" class="img-fluid">
                  <div class="projet-overlay">
                    <a href="<?= $baseUrl ?>public/assets/img/projet/projet-4.webp" class="glightbox projet-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="#" class="projet-details-link"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <div class="projet-info">
                  <h4>Digital Transformation</h4>
                  <p>Technology Consulting</p>
                  <div class="projet-tags">
                    <span>Technology</span>
                    <span>Innovation</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 projet-item isotope-item filter-strategy">
              <div class="projet-card">
                <div class="projet-img">
                  <img src="<?= $baseUrl ?>public/assets/img/projet/projet-5.webp" alt="projet Item" class="img-fluid">
                  <div class="projet-overlay">
                    <a href="<?= $baseUrl ?>public/assets/img/projet/projet-5.webp" class="glightbox projet-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="#" class="projet-details-link"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <div class="projet-info">
                  <h4>Market Expansion</h4>
                  <p>Strategic Planning</p>
                  <div class="projet-tags">
                    <span>Strategy</span>
                    <span>Growth</span>
                  </div>
                </div>
              </div>
            </div>

            <div class="col-lg-4 col-md-6 projet-item isotope-item filter-finance">
              <div class="projet-card">
                <div class="projet-img">
                  <img src="<?= $baseUrl ?>public/assets/img/projet/projet-6.webp" alt="projet Item" class="img-fluid">
                  <div class="projet-overlay">
                    <a href="<?= $baseUrl ?>public/assets/img/projet/projet-6.webp" class="glightbox projet-lightbox"><i class="bi bi-plus"></i></a>
                    <a href="#" class="projet-details-link"><i class="bi bi-link"></i></a>
                  </div>
                </div>
                <div class="projet-info">
                  <h4>Investment Strategy</h4>
                  <p>Financial Advisory</p>
                  <div class="projet-tags">
                    <span>Finance</span>
                    <span>Investment</span>
                  </div>
                </div>
              </div>
            </div>
            </div> End projet Items Container -->

        </div>

      </div>

    </section><!-- /projet Section -->

  </main>