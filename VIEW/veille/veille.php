<!--
  PAGE « VEILLE TECHNOLOGIQUE — LARAVEL »
  Mise en page 100 % Bootstrap 5.3 + Bootstrap Icons (déjà chargés dans VIEW/layout/header.php), sans CSS ni JavaScript propre.

  Ajouter une fiche : copie un bloc <div class="col"> … </div> dans la grille des fiches.
  Couleurs : l'attribut style de la <section> redéfinit la couleur « primary » de Bootstrap avec le bleu du site (#1387c1)
  et le fond des cartes avec --surface-color. Change ces valeurs pour changer toute la page.
  Les textes sont des propositions à reformuler avec tes mots.
-->
<main id="main">
  <section id="veille" class="section" data-bs-theme="dark" aria-labelledby="veille-titre"
           style="--bs-primary-rgb: 19, 135, 193; --bs-link-color-rgb: 79, 176, 224; --bs-link-hover-color-rgb: 19, 135, 193; --bs-body-bg: var(--surface-color, #141f26);">
    <div class="container" data-aos="fade-up">

      <!-- ================= EN-TÊTE ================= -->
      <div class="section-title">
        <h2 id="veille-titre">Veille technologique</h2>
        <p>Laravel : le framework PHP pour construire des applications web modernes</p>
      </div>

      <div class="row justify-content-center mb-5">
        <div class="col-lg-10">
          <div class="border-start border-4 border-primary bg-body rounded-end p-3 mb-3">
            <p class="text-uppercase small fw-bold text-primary mb-1">Ma problématique</p>
            <p class="mb-0">
              En quoi Laravel permet-il de développer, sécuriser et déployer plus simplement une application web PHP,
              et comment suivre son évolution rapide ?
            </p>
          </div>
          <!-- À ADAPTER : garde uniquement les sources que tu suis réellement. -->
          <p class="small opacity-75 mb-0">
            <strong>Méthode :</strong> je suis le
            <a href="https://laravel.com/blog" target="_blank" rel="noopener noreferrer">blog</a>, la
            <a href="https://laravel.com/docs" target="_blank" rel="noopener noreferrer">documentation</a> et le
            <a href="https://github.com/laravel/framework" target="_blank" rel="noopener noreferrer">dépôt GitHub</a> de Laravel,
            <a href="https://laravel-news.com" target="_blank" rel="noopener noreferrer">Laravel News</a> et le
            <a href="https://www.cert.ssi.gouv.fr" target="_blank" rel="noopener noreferrer">CERT-FR</a>.
            Je garde une info si elle est récente, vérifiable et utile pour mes projets, puis j'en fais une fiche datée.
          </p>
        </div>
      </div>

      <!-- ================= FICHES ================= -->
      <h3 class="h4 mb-3"><i class="bi bi-journal-text text-primary me-2" aria-hidden="true"></i>Mes fiches de veille</h3>
      <div class="row row-cols-1 row-cols-md-2 g-4 mb-5">

        <div class="col">
          <article class="card h-100 border-primary-subtle shadow-sm">
            <div class="card-body d-flex flex-column gap-2">
              <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
                <time datetime="2026-10" class="small fw-semibold opacity-75"><i class="bi bi-calendar3 me-1" aria-hidden="true"></i>Oct. 2026</time>
                <span class="badge rounded-pill text-bg-primary"><i class="bi bi-shield-lock me-1" aria-hidden="true"></i>Sécurité</span>
              </div>
              <h4 class="card-title h6 fw-bold mb-0">Faille critique dans le TokenGuard</h4>
              <p class="card-text small mb-0">
                Une faille notée 9,2/10 permet, avec le driver <code>token</code> sous MySQL ou MariaDB, de se connecter
                à la place d'un autre utilisateur. Corrigée dans Laravel 12.68.0 et 13.29.0.
              </p>
              <details class="border-top border-secondary-subtle pt-2">
                <summary class="small fw-semibold text-primary">Ce que j'en retiens</summary>
                <p class="small mt-2 mb-0">Je mets à jour vite et je lance <code>composer audit</code>.</p>
              </details>
              <a class="small mt-auto" href="https://laravel-news.com/laravel-token-guard-auth-bypass" target="_blank" rel="noopener noreferrer"><i class="bi bi-link-45deg" aria-hidden="true"></i> Laravel News</a>
            </div>
          </article>
        </div>

        <div class="col">
          <article class="card h-100 border-primary-subtle shadow-sm">
            <div class="card-body d-flex flex-column gap-2">
              <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
                <time datetime="2026-03-17" class="small fw-semibold opacity-75"><i class="bi bi-calendar3 me-1" aria-hidden="true"></i>17 mars 2026</time>
                <span class="badge rounded-pill text-bg-primary"><i class="bi bi-rocket-takeoff me-1" aria-hidden="true"></i>Versions</span>
              </div>
              <h4 class="card-title h6 fw-bold mb-0">Laravel 13 : PHP 8.3 minimum, support jusqu'en 2028</h4>
              <p class="card-text small mb-0">
                Peu de ruptures, un SDK d'IA officiel et une protection CSRF qui vérifie l'origine. Pas de version LTS :
                Laravel 12 ne reçoit plus que des correctifs de sécurité, jusqu'au 24 février 2027.
              </p>
              <details class="border-top border-secondary-subtle pt-2">
                <summary class="small fw-semibold text-primary">Ce que j'en retiens</summary>
                <p class="small mt-2 mb-0">Pour un nouveau projet, je pars sur Laravel 13 : sécurité assurée jusqu'en mars 2028.</p>
              </details>
              <a class="small mt-auto" href="https://laravel.com/docs/13.x/releases" target="_blank" rel="noopener noreferrer"><i class="bi bi-link-45deg" aria-hidden="true"></i> Documentation Laravel</a>
            </div>
          </article>
        </div>

        <div class="col">
          <article class="card h-100 border-primary-subtle shadow-sm">
            <div class="card-body d-flex flex-column gap-2">
              <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
                <time datetime="2026-07-29" class="small fw-semibold opacity-75"><i class="bi bi-calendar3 me-1" aria-hidden="true"></i>29 juil. 2026</time>
                <span class="badge rounded-pill text-bg-primary"><i class="bi bi-cloud me-1" aria-hidden="true"></i>Écosystème</span>
              </div>
              <h4 class="card-title h6 fw-bold mb-0">Laravel Cloud : le «&nbsp;scale-to-zero&nbsp;»</h4>
              <p class="card-text small mb-0">
                Le calcul «&nbsp;Flex&nbsp;» s'éteint quand personne ne visite l'application et se réveille en moins de
                500 ms. MySQL peut faire de même.
              </p>
              <details class="border-top border-secondary-subtle pt-2">
                <summary class="small fw-semibold text-primary">Ce que j'en retiens</summary>
                <p class="small mt-2 mb-0">
                  Je compare avec HebMat : là où j'orchestre moi-même Docker Swarm et Ansible, Laravel Cloud automatise tout.
                </p>
              </details>
              <a class="small mt-auto" href="https://laravel.com/blog/everything-we-announced-at-laracon-us-2026" target="_blank" rel="noopener noreferrer"><i class="bi bi-link-45deg" aria-hidden="true"></i> Blog Laravel</a>
            </div>
          </article>
        </div>

        <div class="col">
          <article class="card h-100 border-primary-subtle shadow-sm">
            <div class="card-body d-flex flex-column gap-2">
              <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
                <time datetime="2026-03-04" class="small fw-semibold opacity-75"><i class="bi bi-calendar3 me-1" aria-hidden="true"></i>4 mars 2026</time>
                <span class="badge rounded-pill text-bg-primary"><i class="bi bi-robot me-1" aria-hidden="true"></i>IA</span>
              </div>
              <h4 class="card-title h6 fw-bold mb-0">AI SDK, Boost, MCP : trois outils à ne pas confondre</h4>
              <p class="card-text small mb-0">
                L'AI SDK ajoute l'IA dans l'application, Boost aide les assistants de code à comprendre le projet et MCP
                ouvre l'application à des clients IA externes.
              </p>
              <details class="border-top border-secondary-subtle pt-2">
                <summary class="small fw-semibold text-primary">Ce que j'en retiens</summary>
                <p class="small mt-2 mb-0">Je choisis selon le besoin et je relis toujours le code généré.</p>
              </details>
              <a class="small mt-auto" href="https://laravel.com/blog/laravel-ai-sdk-boost-or-mcp-which-tool-do-you-need" target="_blank" rel="noopener noreferrer"><i class="bi bi-link-45deg" aria-hidden="true"></i> Blog Laravel</a>
            </div>
          </article>
        </div>

      </div>

      <!-- ================= PISTES D'ACTION ================= -->
      <h3 class="h4 mb-3"><i class="bi bi-list-check text-primary me-2" aria-hidden="true"></i>Ce que ça m'amène à faire</h3>
      <!-- À ADAPTER : remplace bi-square par bi-check-square-fill quand c'est fait. -->
      <ul class="list-group mb-4">
        <li class="list-group-item d-flex gap-2"><i class="bi bi-square text-primary" aria-hidden="true"></i>Installer Laravel 13 en local et refaire une petite fonctionnalité de mon portfolio pour la comparer à mon MVC maison.</li>
        <li class="list-group-item d-flex gap-2"><i class="bi bi-square text-primary" aria-hidden="true"></i><span>Lancer <code>composer audit</code> et mettre à jour <code>laravel/framework</code> régulièrement.</span></li>
        <li class="list-group-item d-flex gap-2"><i class="bi bi-square text-primary" aria-hidden="true"></i>Tester le déploiement de ce projet sur HebMat et le comparer à Laravel Cloud.</li>
      </ul>
      <p class="small opacity-75 mb-0">Page mise à jour au fil de ma veille. Dernière mise à jour : novembre 2026.</p>

    </div>
  </section>
</main>
