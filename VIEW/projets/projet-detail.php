<title>Détail Projet - ALLAMA</title>
<?php $baseUrl = isset($baseUrl) ? $baseUrl : rtrim(dirname($_SERVER['SCRIPT_NAME']), "\\/") . '/'; ?>

<?php
$projets = [
    1 => [
        'titre'          => 'Site Vitrine Pizzeria',
        'categorie'      => 'École',
        'type'           => 'Projet de groupe',
        'date'           => 'Septembre 2024',
        'technologies'   => ['HTML', 'CSS', 'JavaScript', 'PHP'],
        'image'          => 'projets/projet-1.png',
        'github'         => 'https://github.com/Traxblex/freelanceIT.git',
        'live'           => '#',
        'description'    => 'Dans le cadre de mon BTS SIO SLAM, j\'ai conçu et développé un site vitrine complet pour une pizzeria souhaitant améliorer sa présence en ligne. Le site présente le menu, les horaires, la localisation et permet aux clients de passer commande en ligne.',
        'challenge'      => 'Le principal défi était de créer une interface attrayante et responsive qui mette en valeur les produits tout en restant facile à naviguer sur mobile. Il fallait également intégrer un système de commande simple sans base de données complexe.',
        'solution'       => 'Nous avons opté pour un design moderne avec des couleurs chaudes, une navigation intuitive et un formulaire de commande léger en PHP. L\'utilisation de CSS Grid et Flexbox a garanti un affichage parfait sur tous les appareils.',
        'fonctionnalites'=> [
            'Affichage du menu avec catégories',
            'Formulaire de commande en ligne',
            'Page de contact avec carte intégrée',
            'Design responsive mobile-first',
            'Galerie photos des plats',
            'Horaires et informations pratiques'
        ]
    ],
    2 => [
        'titre'          => 'Application Web FitSport',
        'categorie'      => 'École',
        'type'           => 'Projet de groupe',
        'date'           => 'Janvier 2025',
        'technologies'   => ['PHP', 'MySQL', 'HTML', 'CSS', 'JavaScript', 'Bootstrap'],
        'image'          => 'projets/fitsport.webp',
        'github'         => 'https://github.com/Traxblex/reorganisation.git',
        'live'           => '#',
        'description'    => 'Application web développée pour permettre à un club de sport de gérer ses inscriptions et ses séances d\'entraînement. Les membres peuvent s\'inscrire, consulter le planning et réserver des créneaux, tandis que les administrateurs gèrent les séances et les adhérents.',
        'challenge'      => 'Le défi principal était de concevoir une architecture MVC propre avec une gestion des rôles (admin / membre), tout en assurant la sécurité des données utilisateurs et la cohérence des réservations pour éviter les doublons.',
        'solution'       => 'Nous avons mis en place une architecture MVC en PHP pur, avec une base de données MySQL normalisée. Le système de sessions PHP gère l\'authentification et les rôles. Des requêtes préparées PDO protègent contre les injections SQL.',
        'fonctionnalites'=> [
            'Inscription et authentification des membres',
            'Gestion des rôles (admin / membre)',
            'Planning des séances interactif',
            'Système de réservation de créneaux',
            'Tableau de bord administrateur',
            'Gestion des adhérents et abonnements'
        ]
    ],
    3 => [
        'titre'          => 'Portfolio Personnel',
        'categorie'      => 'Personnel',
        'type'           => 'Projet solo',
        'date'           => 'Juillet 2025',
        'technologies'   => ['PHP', 'HTML', 'CSS', 'JavaScript', 'Bootstrap', 'AOS', 'Swiper'],
        'image'          => 'projets/portfolio.png',
        'github'         => 'https://github.com/Traxblex/portfolio.git',
        'live'           => '#',
        'description'    => 'Développement de mon portfolio personnel pour présenter mes compétences, mes projets réalisés durant le BTS SIO SLAM et mon parcours professionnel. Le site est entièrement en PHP avec une architecture MVC et intègre des animations modernes.',
        'challenge'      => 'Créer un portfolio qui se démarque visuellement tout en restant performant et facile à maintenir. L\'architecture MVC devait permettre d\'ajouter facilement de nouveaux projets sans modifier la structure du code.',
        'solution'       => 'J\'ai opté pour une architecture MVC PHP avec un FrontController qui gère le routing. Les animations AOS et le carousel Swiper apportent du dynamisme, tandis que Bootstrap assure la responsivité. Chaque section est une vue indépendante.',
        'fonctionnalites'=> [
            'Architecture MVC PHP',
            'Routing dynamique via FrontController',
            'Pages de détail par projet',
            'Section BTS SIO avec tableau de compétences',
            'Formulaire de contact fonctionnel',
            'Animations AOS et carousel Swiper'
        ]
    ],
    4 => [
        'titre'          => 'FreelanceIT',
        'categorie'      => 'École',
        'type'           => 'Projet de groupe',
        'date'           => '2025',
        'technologies'   => ['PHP', 'MySQL', 'HTML', 'CSS', 'JavaScript', 'Bootstrap'],
        'image'          => 'projets/freelanceit.png',
        'github'         => 'https://github.com/Traxblex/freelanceIT.git',
        'live'           => '#',
        'description'    => 'FreelanceIT est une plateforme de mise en relation entre des freelances informatiques et des entreprises à la recherche de compétences techniques. Les entreprises publient des missions, les freelances postulent et un système de matching facilite la collaboration.',
        'challenge'      => 'Le défi était de concevoir un système de matching pertinent entre les profils freelances et les besoins des entreprises, tout en gérant les rôles (freelance / entreprise / admin) et en sécurisant les échanges et les données personnelles.',
        'solution'       => 'Nous avons développé une architecture MVC PHP avec une base de données MySQL relationnelle. Un système de tags de compétences permet le filtrage des missions. L\'authentification est sécurisée par sessions PHP avec hachage des mots de passe.',
        'fonctionnalites'=> [
            'Inscription et profil freelance détaillé',
            'Publication de missions par les entreprises',
            'Système de candidature et de matching',
            'Messagerie interne entre freelances et entreprises',
            'Tableau de bord par rôle (freelance / entreprise)',
            'Système de notation et d\'avis'
        ]
    ],
    5 => [
        'titre'          => 'Castify',
        'categorie'      => 'École',
        'type'           => 'Projet de groupe',
        'date'           => '2025',
        'technologies'   => ['PHP', 'MySQL', 'HTML', 'CSS', 'JavaScript', 'Bootstrap'],
        'image'          => 'projets/Castify.png',
        'github'         => 'https://github.com/Traxblex',
        'live'           => '#',
        'description'    => 'Castify est une application web de mise en relation entre réalisateurs et acteurs. Les réalisateurs publient des castings pour leurs projets (courts métrages, publicités, films), et les acteurs créent un profil avec book photo et vidéo pour candidater.',
        'challenge'      => 'Le principal défi était de gérer les médias (photos, vidéos de book) de manière performante, tout en offrant une expérience fluide aux deux types d\'utilisateurs avec des interfaces et des fonctionnalités bien distinctes.',
        'solution'       => 'Nous avons mis en place une gestion des uploads sécurisée avec validation des formats et des tailles. Un système de filtres par type de rôle, âge et localisation facilite la recherche. L\'interface est adaptée selon le profil connecté.',
        'fonctionnalites'=> [
            'Profil acteur avec book photo et vidéo',
            'Publication d\'annonces de casting',
            'Filtres avancés (rôle, âge, localisation)',
            'Système de candidature en ligne',
            'Messagerie entre réalisateurs et acteurs',
            'Gestion des uploads de médias'
        ]
    ],
    6 => [
        'titre'          => 'Site de Cours',
        'categorie'      => 'Personnel',
        'type'           => 'Projet solo',
        'date'           => '2024',
        'technologies'   => ['HTML', 'CSS', 'JavaScript', 'PHP'],
        'image'          => 'projets/site_cours.png',
        'github'         => 'https://github.com/Traxblex/vendredi_21_nov.git',
        'live'           => '#',
        'description'    => 'Site personnel permettant de consulter et d\'organiser mes cours réalisés durant le BTS SIO SLAM. Les cours sont classés par matière et par chapitre, avec un moteur de recherche pour retrouver rapidement un contenu précis.',
        'challenge'      => 'Organiser un grand volume de cours de manière claire et navigable sans base de données lourde, tout en offrant une expérience de lecture agréable sur ordinateur et sur mobile.',
        'solution'       => 'J\'ai opté pour une structure de fichiers PHP organisée par matière, avec une navigation dynamique générée automatiquement. Le design épuré met l\'accent sur la lisibilité avec une typographie soignée et un mode sombre.',
        'fonctionnalites'=> [
            'Classement des cours par matière et chapitre',
            'Moteur de recherche intégré',
            'Navigation rapide par sommaire',
            'Design responsive et mode sombre',
            'Affichage des exemples de code avec coloration syntaxique',
            'Accès rapide aux derniers cours consultés'
        ]
    ],
    7 => [
        'titre'          => 'Portfolio WordPress',
        'categorie'      => 'Personnel',
        'type'           => 'Projet solo',
        'date'           => '2024',
        'technologies'   => ['WordPress', 'CSS', 'Elementor', 'PHP'],
        'image'          => 'projets/wordpress.png',
        'github'         => 'https://github.com/Traxblex/portfolio.git',
        'live'           => '#',
        'description'    => 'Première version de mon portfolio réalisée avec WordPress et le constructeur de pages Elementor. Ce projet m\'a permis de découvrir l\'écosystème WordPress, la gestion des thèmes, des plugins et la personnalisation CSS avancée.',
        'challenge'      => 'Adapter un thème WordPress existant pour qu\'il corresponde exactement à ma vision sans compromettre les performances du site ni la compatibilité avec les mises à jour de WordPress.',
        'solution'       => 'J\'ai utilisé un thème enfant pour les personnalisations CSS/PHP afin de préserver les mises à jour. Elementor a permis un design visuel rapide, complété par des shortcodes personnalisés pour les sections spécifiques.',
        'fonctionnalites'=> [
            'Design personnalisé avec Elementor',
            'Thème enfant pour les modifications CSS/PHP',
            'Section projets avec filtres par catégorie',
            'Formulaire de contact avec plugin WPForms',
            'Optimisation SEO avec Yoast SEO',
            'Responsive design multi-appareils'
        ]
    ]
];

$id = isset($_GET['id']) ? (int)$_GET['id'] : 1;
$projet = isset($projets[$id]) ? $projets[$id] : $projets[1];

$prevId = ($id > 1) ? $id - 1 : null;
$nextId = ($id < count($projets)) ? $id + 1 : null;
?>

<main class="main">

  <!-- Breadcrumb -->
  <div class="page-title" data-aos="fade">
    <div class="container d-flex flex-column align-items-center">
      <nav class="breadcrumbs">
        <ol>
          <li><a href="index.php?page=index">Accueil</a></li>
          <li><a href="index.php?page=projet">Projets</a></li>
          <li class="current"><?= htmlspecialchars($projet['titre']) ?></li>
        </ol>
      </nav>
      <h1><?= htmlspecialchars($projet['titre']) ?></h1>
    </div>
  </div>

  <!-- projet Details Section -->
  <section id="projet-details" class="projet-details section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">

      <div class="row gy-4">

        <!-- Colonne gauche : image + badges tech -->
        <div class="col-lg-6" data-aos="fade-right">
          <div class="projet-details-media">
            <div class="main-image">
              <img
                src="<?= $baseUrl ?>public/assets/img/<?= htmlspecialchars($projet['image']) ?>"
                alt="<?= htmlspecialchars($projet['titre']) ?>"
                class="img-fluid rounded shadow"
                onerror="this.src='<?= $baseUrl ?>public/assets/img/projet/projet-1.webp'">
            </div>

            <div class="tech-stack-badges mt-4" data-aos="fade-up" data-aos-delay="200">
              <?php foreach ($projet['technologies'] as $tech): ?>
                <span><?= htmlspecialchars($tech) ?></span>
              <?php endforeach; ?>
            </div>
          </div>
        </div>

        <!-- Colonne droite : infos détaillées -->
        <div class="col-lg-6" data-aos="fade-left">
          <div class="projet-details-content">

            <div class="project-meta">
              <div class="badge-wrapper">
                <span class="project-badge"><?= htmlspecialchars($projet['categorie']) ?></span>
              </div>
              <div class="date-client">
                <div class="meta-item">
                  <i class="bi bi-calendar-check"></i>
                  <span><?= htmlspecialchars($projet['date']) ?></span>
                </div>
                <div class="meta-item">
                  <i class="bi bi-people"></i>
                  <span><?= htmlspecialchars($projet['type']) ?></span>
                </div>
              </div>
            </div>

            <h2 class="project-title"><?= htmlspecialchars($projet['titre']) ?></h2>

            <div class="project-website mb-3">
              <i class="bi bi-github"></i>
              <a href="<?= htmlspecialchars($projet['github']) ?>" target="_blank">Voir sur GitHub</a>
            </div>

            <div class="project-overview">
              <p class="lead"><?= htmlspecialchars($projet['description']) ?></p>

              <div class="accordion project-accordion" id="projectAccordion-<?= $id ?>">

                <div class="accordion-item" data-aos="fade-up">
                  <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapse-overview-<?= $id ?>" aria-expanded="true">
                      <i class="bi bi-clipboard-data me-2"></i> Présentation du projet
                    </button>
                  </h2>
                  <div id="collapse-overview-<?= $id ?>" class="accordion-collapse collapse show"
                    data-bs-parent="#projectAccordion-<?= $id ?>">
                    <div class="accordion-body">
                      <p><?= htmlspecialchars($projet['description']) ?></p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="100">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapse-challenge-<?= $id ?>" aria-expanded="false">
                      <i class="bi bi-exclamation-diamond me-2"></i> Le Défi
                    </button>
                  </h2>
                  <div id="collapse-challenge-<?= $id ?>" class="accordion-collapse collapse"
                    data-bs-parent="#projectAccordion-<?= $id ?>">
                    <div class="accordion-body">
                      <p><?= htmlspecialchars($projet['challenge']) ?></p>
                    </div>
                  </div>
                </div>

                <div class="accordion-item" data-aos="fade-up" data-aos-delay="200">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                      data-bs-target="#collapse-solution-<?= $id ?>" aria-expanded="false">
                      <i class="bi bi-award me-2"></i> La Solution
                    </button>
                  </h2>
                  <div id="collapse-solution-<?= $id ?>" class="accordion-collapse collapse"
                    data-bs-parent="#projectAccordion-<?= $id ?>">
                    <div class="accordion-body">
                      <p><?= htmlspecialchars($projet['solution']) ?></p>
                    </div>
                  </div>
                </div>

              </div>
            </div>

            <!-- Fonctionnalités clés -->
            <div class="project-features mt-4" data-aos="fade-up" data-aos-delay="300">
              <h3><i class="bi bi-stars"></i> Fonctionnalités clés</h3>
              <div class="row g-3">
                <?php
                $mid  = ceil(count($projet['fonctionnalites']) / 2);
                $col1 = array_slice($projet['fonctionnalites'], 0, $mid);
                $col2 = array_slice($projet['fonctionnalites'], $mid);
                ?>
                <div class="col-md-6">
                  <ul class="feature-list">
                    <?php foreach ($col1 as $f): ?>
                      <li><i class="bi bi-check2-circle"></i> <?= htmlspecialchars($f) ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
                <div class="col-md-6">
                  <ul class="feature-list">
                    <?php foreach ($col2 as $f): ?>
                      <li><i class="bi bi-check2-circle"></i> <?= htmlspecialchars($f) ?></li>
                    <?php endforeach; ?>
                  </ul>
                </div>
              </div>
            </div>

            <!-- Boutons navigation -->
            <div class="cta-buttons mt-4" data-aos="fade-up" data-aos-delay="400">
              <?php if ($projet['live'] !== '#'): ?>
                <a href="<?= htmlspecialchars($projet['live']) ?>" target="_blank" class="btn-view-project">Voir le projet live</a>
              <?php endif; ?>
              <?php if ($nextId): ?>
                <a href="index.php?page=projet_detail&id=<?= $nextId ?>" class="btn-next-project">
                  Projet suivant <i class="bi bi-arrow-right"></i>
                </a>
              <?php else: ?>
                <a href="index.php?page=projet" class="btn-next-project">
                  Tous les projets <i class="bi bi-grid"></i>
                </a>
              <?php endif; ?>
            </div>

          </div>
        </div>
      </div>

    </div>
  </section>

</main>