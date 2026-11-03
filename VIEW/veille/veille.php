<!--
  PAGE « VEILLE TECHNOLOGIQUE » — à coller dans ta vue veille (entre ton header et ton footer).
  Rien à installer : HTML + CSS + JS dans ce seul fichier, sans dépendance.
  Pour ajouter une fiche : copie un bloc <article class="veille-card"> et change data-themes
  (valeurs possibles : ia, securite, php, conteneurs — tu peux en mettre plusieurs séparées par un espace).
  Couleur d'accent : modifie --veille-accent juste en dessous.
-->
<style>
  .veille {
    --veille-accent: #7c6cf0;
    --veille-border: rgba(128, 128, 128, .30);
    --veille-surface: rgba(128, 128, 128, .07);
    --veille-muted: .75;
    max-width: 1100px;
    margin: 0 auto;
    padding: 48px 16px 72px;
    line-height: 1.6;
    color: inherit;
  }
  .veille *, .veille *::before, .veille *::after { box-sizing: border-box; }
  .veille h1, .veille h2, .veille h3 { line-height: 1.25; margin: 0; }
  .veille a { color: var(--veille-accent); }
  .veille :where(p) { margin: 0; }

  /* ---------- En-tête ---------- */
  .veille-kicker {
    display: inline-block; font-size: .8rem; letter-spacing: .12em; text-transform: uppercase;
    color: var(--veille-accent); font-weight: 700; margin-bottom: 12px;
  }
  .veille-hero h1 { font-size: clamp(1.6rem, 4vw, 2.4rem); margin-bottom: 20px; }
  .veille-question {
    border-left: 4px solid var(--veille-accent); padding: 12px 18px; margin: 0 0 24px;
    background: var(--veille-surface); border-radius: 0 10px 10px 0; font-size: 1.05rem;
  }
  .veille-question strong { display: block; font-size: .8rem; text-transform: uppercase; letter-spacing: .08em; opacity: var(--veille-muted); margin-bottom: 4px; }
  .veille-meta { display: flex; flex-wrap: wrap; gap: 10px 24px; font-size: .9rem; opacity: var(--veille-muted); }

  .veille-section { margin-top: 56px; }
  .veille-section > h2 { font-size: 1.5rem; margin-bottom: 8px; }
  .veille-section > .veille-intro { opacity: var(--veille-muted); margin-bottom: 24px; max-width: 70ch; }

  /* ---------- Méthode ---------- */
  .veille-steps { display: grid; gap: 16px; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); counter-reset: step; padding: 0; margin: 0; list-style: none; }
  .veille-steps li {
    counter-increment: step; position: relative; padding: 20px 20px 20px 64px;
    border: 1px solid var(--veille-border); border-radius: 14px; background: var(--veille-surface);
  }
  .veille-steps li::before {
    content: counter(step); position: absolute; left: 18px; top: 18px; width: 32px; height: 32px;
    display: grid; place-items: center; border-radius: 50%; background: var(--veille-accent); color: #fff; font-weight: 700;
  }
  .veille-steps h3 { font-size: 1.05rem; margin-bottom: 4px; }
  .veille-steps p { font-size: .95rem; opacity: var(--veille-muted); }

  .veille-sources { display: flex; flex-wrap: wrap; gap: 8px; padding: 0; margin: 20px 0 0; list-style: none; }
  .veille-sources a {
    display: inline-block; padding: 6px 12px; border: 1px solid var(--veille-border); border-radius: 999px;
    text-decoration: none; font-size: .88rem; transition: border-color .2s, background .2s;
  }
  .veille-sources a:hover, .veille-sources a:focus-visible { border-color: var(--veille-accent); background: var(--veille-surface); }

  /* ---------- Thèmes = filtres ---------- */
  .veille-themes { display: grid; gap: 16px; grid-template-columns: repeat(auto-fit, minmax(230px, 1fr)); }
  .veille-theme {
    font: inherit; color: inherit; text-align: left; cursor: pointer;
    padding: 18px; border: 1px solid var(--veille-border); border-radius: 14px; background: var(--veille-surface);
    display: flex; flex-direction: column; gap: 8px; transition: transform .2s, border-color .2s, box-shadow .2s;
  }
  .veille-theme:hover { transform: translateY(-2px); border-color: var(--veille-accent); }
  .veille-theme:focus-visible { outline: 2px solid var(--veille-accent); outline-offset: 2px; }
  .veille-theme[aria-pressed="true"] { border-color: var(--veille-accent); box-shadow: 0 0 0 2px var(--veille-accent) inset; }
  .veille-theme-top { display: flex; align-items: center; justify-content: space-between; gap: 8px; }
  .veille-theme-icon { font-size: 1.5rem; line-height: 1; }
  .veille-theme-count { font-size: .78rem; padding: 2px 9px; border-radius: 999px; background: var(--veille-accent); color: #fff; font-weight: 700; }
  .veille-theme h3 { font-size: 1.05rem; }
  .veille-theme p { font-size: .9rem; opacity: var(--veille-muted); }

  .veille-toolbar { display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 12px; margin: 28px 0 16px; }
  .veille-status { font-size: .9rem; opacity: var(--veille-muted); }
  .veille-reset {
    font: inherit; font-size: .88rem; color: inherit; cursor: pointer; padding: 6px 14px;
    border: 1px solid var(--veille-border); border-radius: 999px; background: transparent;
    display: none;
  }
  .veille.has-js .veille-reset[data-visible="true"] { display: inline-block; }
  .veille-reset:hover, .veille-reset:focus-visible { border-color: var(--veille-accent); }

  /* ---------- Fiches ---------- */
  .veille-cards { display: grid; gap: 18px; grid-template-columns: repeat(auto-fill, minmax(320px, 1fr)); }
  .veille-card {
    display: flex; flex-direction: column; gap: 12px; padding: 22px;
    border: 1px solid var(--veille-border); border-radius: 16px; background: var(--veille-surface);
    transition: border-color .2s;
  }
  .veille-card[hidden] { display: none; }
  .veille-card:hover { border-color: var(--veille-accent); }
  .veille-card-head { display: flex; flex-wrap: wrap; align-items: center; justify-content: space-between; gap: 8px; }
  .veille-card time { font-size: .85rem; font-weight: 600; opacity: var(--veille-muted); }
  .veille-tags { display: flex; flex-wrap: wrap; gap: 6px; padding: 0; margin: 0; list-style: none; }
  .veille-tags li { font-size: .75rem; padding: 2px 10px; border-radius: 999px; border: 1px solid var(--veille-accent); color: var(--veille-accent); }
  .veille-card h3 { font-size: 1.1rem; }
  .veille-card p { font-size: .95rem; }
  .veille-card details { border-top: 1px dashed var(--veille-border); padding-top: 10px; }
  .veille-card summary { cursor: pointer; font-weight: 600; font-size: .95rem; color: var(--veille-accent); }
  .veille-card summary:focus-visible { outline: 2px solid var(--veille-accent); outline-offset: 3px; border-radius: 4px; }
  .veille-card details p { margin-top: 8px; font-size: .93rem; }
  .veille-card-sources { margin-top: auto; font-size: .85rem; display: flex; flex-wrap: wrap; gap: 4px 14px; }

  /* ---------- Pistes d'action ---------- */
  .veille-actions { display: grid; gap: 14px; grid-template-columns: repeat(auto-fit, minmax(260px, 1fr)); padding: 0; margin: 0; list-style: none; }
  .veille-actions li {
    padding: 16px 18px; border: 1px solid var(--veille-border); border-radius: 14px; background: var(--veille-surface);
    display: flex; flex-direction: column; gap: 6px;
  }
  .veille-actions strong { font-size: 1rem; }
  .veille-actions span { font-size: .9rem; opacity: var(--veille-muted); }
  .veille-actions em { font-style: normal; font-size: .75rem; color: var(--veille-accent); text-transform: uppercase; letter-spacing: .08em; font-weight: 700; }

  .veille-update { margin-top: 40px; font-size: .85rem; opacity: var(--veille-muted); }

  @media (prefers-reduced-motion: reduce) {
    .veille * { transition: none !important; }
  }
</style>

<section class="veille" id="veille" aria-labelledby="veille-titre">

  <!-- ================= EN-TÊTE ================= -->
  <header class="veille-hero">
    <span class="veille-kicker">Veille technologique</span>
    <h1 id="veille-titre">Faire évoluer un site web PHP vers une application moderne, sûre et simple à déployer</h1>
    <p class="veille-question">
      <strong>Ma problématique</strong>
      Comment moderniser et sécuriser une application web en PHP, et la déployer proprement, à l'heure de l'IA générative ?
    </p>
    <p class="veille-meta">
      <span>4 thèmes suivis</span>
      <span>7 fiches commentées</span>
      <span>Dernière mise à jour : novembre 2026</span>
    </p>
  </header>

  <!-- ================= MÉTHODE ================= -->
  <div class="veille-section">
    <h2>Ma méthode de veille</h2>
    <p class="veille-intro">Une veille utile suit un cycle simple, répété régulièrement : je cherche, je filtre, puis je garde une trace de ce que j'en retiens.</p>

    <ol class="veille-steps">
      <li>
        <h3>Collecter</h3>
        <p>Je suis des sources fiables (documentation officielle, blogs d'éditeurs, presse spécialisée) via des flux RSS, des newsletters et des alertes sur mes mots-clés.</p>
      </li>
      <li>
        <h3>Trier et analyser</h3>
        <p>Je retiens une info si elle est récente, vérifiable à la source et utile pour mes projets. Les chiffres sont recoupés avec la source d'origine.</p>
      </li>
      <li>
        <h3>Capitaliser</h3>
        <p>Chaque info retenue devient une fiche datée, avec la source et ce que j'en retiens pour mes projets. Les fiches s'accumulent ici, plus récent en premier.</p>
      </li>
    </ol>

    <!-- À ADAPTER : garde uniquement les sources que tu suis réellement. -->
    <ul class="veille-sources" aria-label="Sources suivies">
      <li><a href="https://owasp.org" target="_blank" rel="noopener noreferrer">OWASP</a></li>
      <li><a href="https://www.php.net" target="_blank" rel="noopener noreferrer">php.net</a></li>
      <li><a href="https://symfony.com/blog" target="_blank" rel="noopener noreferrer">Symfony Blog</a></li>
      <li><a href="https://laravel-news.com" target="_blank" rel="noopener noreferrer">Laravel News</a></li>
      <li><a href="https://stackoverflow.blog" target="_blank" rel="noopener noreferrer">Stack Overflow Blog</a></li>
      <li><a href="https://www.docker.com/company/newsroom" target="_blank" rel="noopener noreferrer">Docker Newsroom</a></li>
      <li><a href="https://www.cert.ssi.gouv.fr" target="_blank" rel="noopener noreferrer">CERT-FR</a></li>
      <li><a href="https://www.cnil.fr" target="_blank" rel="noopener noreferrer">CNIL</a></li>
      <li><a href="https://www.developpez.com" target="_blank" rel="noopener noreferrer">Developpez.com</a></li>
      <li><a href="https://linuxfr.org" target="_blank" rel="noopener noreferrer">LinuxFr</a></li>
      <li><a href="https://www.journalduhacker.net" target="_blank" rel="noopener noreferrer">Journal du Hacker</a></li>
    </ul>
  </div>

  <!-- ================= THÈMES (cliquables = filtres) ================= -->
  <div class="veille-section">
    <h2>Les 4 thèmes que je suis</h2>
    <p class="veille-intro">Chaque thème répond à une partie de ma problématique. Clique sur un thème pour ne voir que les fiches qui le concernent.</p>

    <div class="veille-themes">
      <button type="button" class="veille-theme" data-filter="ia" aria-pressed="false">
        <span class="veille-theme-top"><span class="veille-theme-icon" aria-hidden="true">🤖</span><span class="veille-theme-count" data-count-for="ia"></span></span>
        <h3>IA &amp; développement</h3>
        <p>Jusqu'où faire confiance aux assistants de code, et comment les utiliser sans perdre la main ?</p>
      </button>
      <button type="button" class="veille-theme" data-filter="securite" aria-pressed="false">
        <span class="veille-theme-top"><span class="veille-theme-icon" aria-hidden="true">🔒</span><span class="veille-theme-count" data-count-for="securite"></span></span>
        <h3>Sécurité web</h3>
        <p>Comment protéger une application PHP contre les risques les plus courants ?</p>
      </button>
      <button type="button" class="veille-theme" data-filter="php" aria-pressed="false">
        <span class="veille-theme-top"><span class="veille-theme-icon" aria-hidden="true">🐘</span><span class="veille-theme-count" data-count-for="php"></span></span>
        <h3>PHP &amp; frameworks</h3>
        <p>Faut-il rester sur une architecture MVC « maison » ou passer à un framework comme Symfony ou Laravel ?</p>
      </button>
      <button type="button" class="veille-theme" data-filter="conteneurs" aria-pressed="false">
        <span class="veille-theme-top"><span class="veille-theme-icon" aria-hidden="true">🐳</span><span class="veille-theme-count" data-count-for="conteneurs"></span></span>
        <h3>Conteneurs &amp; déploiement</h3>
        <p>Comment fiabiliser et automatiser la mise en production d'un site web ?</p>
      </button>
    </div>

    <div class="veille-toolbar">
      <p class="veille-status" role="status" aria-live="polite" data-status>7 fiches affichées</p>
      <button type="button" class="veille-reset" data-reset data-visible="false">Tout afficher</button>
    </div>

    <!-- ================= FICHES (plus récentes en premier) ================= -->
    <div class="veille-cards">

      <article class="veille-card" data-themes="ia">
        <div class="veille-card-head">
          <time datetime="2026-10-06">6 oct. 2026</time>
          <ul class="veille-tags"><li>IA &amp; développement</li></ul>
        </div>
        <h3>Les développeurs utilisent l'IA chaque jour, mais lui font peu confiance</h3>
        <p>
          Le Developer Survey 2026 de Stack Overflow (plus de 30 000 répondants) indique que 73 % des utilisateurs
          d'assistants ou d'agents de code s'en servent quotidiennement. L'IA sert surtout à générer du code dans des
          domaines familiers (67 %) et à déboguer (61 %), beaucoup moins à déployer ou exploiter la production (20 %).
          Seuls 6,6 % des sondés lui confieraient une décision importante.
        </p>
        <details>
          <summary>Ce que j'en retiens</summary>
          <p>
            L'IA accélère l'écriture du code, mais la responsabilité reste la mienne : je relis, je teste et je comprends
            chaque ligne avant de l'intégrer.
          </p>
        </details>
        <p class="veille-card-sources">
          <a href="https://stackoverflow.blog/2026/10/06/the-results-of-the-2026-developer-survey-are-here/" target="_blank" rel="noopener noreferrer">Stack Overflow Blog</a>
          <a href="https://itbrief.co.uk/story/stack-overflow-survey-finds-developers-wary-of-ai-tools" target="_blank" rel="noopener noreferrer">IT Brief</a>
        </p>
      </article>

      <article class="veille-card" data-themes="conteneurs ia">
        <div class="veille-card-head">
          <time datetime="2026-09-24">24 sept. 2026</time>
          <ul class="veille-tags"><li>Conteneurs &amp; déploiement</li><li>IA &amp; développement</li></ul>
        </div>
        <h3>Docker lance les Cloud Sandboxes pour isoler les agents IA</h3>
        <p>
          Docker étend l'isolation de ses « Sandboxes » au-delà du poste du développeur avec les Cloud Sandboxes.
          Ces environnements servent à encadrer les agents de code IA : Docker met en avant des règles appliquées
          au réseau, aux fichiers et aux outils MCP (Managed Code Platform) auxquels l'agent a accès. <!-- MCP = Managed Code Platform, un service de génération de code dans le cloud. -->
        </p>
        <details>
          <summary>Ce que j'en retiens</summary>
          <p>
            Les conteneurs ne servent plus seulement à déployer une application : ils deviennent aussi un moyen
            de contenir les outils IA. Piste : apprendre à faire tourner un assistant dans un conteneur isolé
            avant de lui donner accès à mon code.
          </p>
        </details>
        <p class="veille-card-sources">
          <a href="https://www.docker.com/company/newsroom" target="_blank" rel="noopener noreferrer">Docker Newsroom</a>
        </p>
      </article>

      <article class="veille-card" data-themes="php ia">
        <div class="veille-card-head">
          <time datetime="2026-03-17">17 mars 2026</time>
          <ul class="veille-tags"><li>PHP &amp; frameworks</li><li>IA &amp; développement</li></ul>
        </div>
        <h3>Laravel 13 : plus d'attributs PHP et un SDK d'IA intégré</h3> <!-- SDK = Software Development Kit, un ensemble d'outils pour développer avec une API. -->
        <p>
          Sorti le 17 mars 2026, Laravel 13 demande PHP 8.3 au minimum et élargit l'usage (optionnel) des attributs PHP
          dans le code. Sa nouveauté phare est le Laravel AI SDK, une couche officielle pour la génération de texte,
          les embeddings, les agents, l'audio, les images et les bases vectorielles.
        </p>
        <details>
          <summary>Ce que j'en retiens</summary>
          <p>
            Les frameworks PHP intègrent désormais l'IA comme un composant standard.
          </p>
        </details>
        <p class="veille-card-sources">
          <a href="https://laravel-news.com/laravel-13" target="_blank" rel="noopener noreferrer">Laravel News</a>
          <a href="https://benjamincrozat.com/laravel-13" target="_blank" rel="noopener noreferrer">Benjamin Crozat</a>
        </p>
      </article>

      <article class="veille-card" data-themes="conteneurs securite">
        <div class="veille-card-head">
          <time datetime="2025-12-17">17 déc. 2025</time>
          <ul class="veille-tags"><li>Conteneurs &amp; déploiement</li><li>Sécurité web</li></ul>
        </div>
        <h3>Docker rend ses images durcies gratuites et ouvertes</h3>
        <p>
          Docker a annoncé que son catalogue de plus de 1 000 Docker Hardened Images, des images de conteneurs conçues
          pour réduire les risques liés à la chaîne d'approvisionnement logicielle, devient gratuit, ouvert et transparent.
        </p>
        <details>
          <summary>Ce que j'en retiens</summary>
          <p>
            Partir d'une image durcie réduit la surface d'attaque et répond directement à la catégorie « chaîne
            d'approvisionnement logicielle » du dernier OWASP Top 10. Piste : l'utiliser comme image de base pour
            conteneuriser mon portfolio.
          </p>
        </details>
        <p class="veille-card-sources">
          <a href="https://www.docker.com/company/newsroom" target="_blank" rel="noopener noreferrer">Docker Newsroom</a>
        </p>
      </article>

      <article class="veille-card" data-themes="php">
        <div class="veille-card-head">
          <time datetime="2025-11">Nov. 2025</time>
          <ul class="veille-tags"><li>PHP &amp; frameworks</li></ul>
        </div>
        <h3>Symfony 8 : un framework qui s'allège</h3>
        <p>
          Symfony 8.0 exige PHP 8.4, supprime 13 202 lignes de code déprécié et abandonne les formats de configuration
          XML et « fluent » PHP au profit de YAML et d'un nouveau format PHP à base de tableaux. Cette version n'est pas
          une LTS : sa branche 8.0 a atteint la fin de maintenance en juillet 2026, alors que la 7.4 LTS reste corrigée
          jusqu'en novembre 2028.<!-- LTS = Long Term Support, support à long terme. -->
        </p>
        <details>
          <summary>Ce que j'en retiens</summary>
          <p>
            Pour un projet qui doit durer, je choisis une version à support long (LTS) plutôt que la toute dernière.
            Et je retiens que migrer coûte moins cher quand on met à jour régulièrement.
          </p>
        </details>
        <p class="veille-card-sources">
          <a href="https://symfony.com/blog/symfony-8-0-reaches-its-end-of-maintenance" target="_blank" rel="noopener noreferrer">Symfony Blog</a>
          <a href="https://symfony.com/8" target="_blank" rel="noopener noreferrer">symfony.com/8</a>
        </p>
      </article>

      <article class="veille-card" data-themes="php">
        <div class="veille-card-head">
          <time datetime="2025-11-20">20 nov. 2025</time>
          <ul class="veille-tags"><li>PHP &amp; frameworks</li></ul>
        </div>
        <h3>PHP 8.5 : opérateur pipe, extension URI et « clone with »</h3>
        <p>
          PHP 8.5 est sorti le 20 novembre 2025. Il ajoute une extension URI native (analyse d'URL conforme aux standards),
          l'opérateur pipe <code>|&gt;</code> pour enchaîner des appels de gauche à droite, une syntaxe pour cloner un objet
          en modifiant ses propriétés, l'attribut <code>#[\NoDiscard]</code> et les fonctions <code>array_first()</code>
          et <code>array_last()</code>. Certaines pratiques sont dépréciées, comme l'opérateur backtick.
        </p> <!-- nodiscard = ne pas ignorer la valeur de retour d'une fonction --> <!-- array_first() et array_last() = fonctions pour récupérer le premier ou le dernier élément d'un tableau. -->
        <details>
          <summary>Ce que j'en retiens</summary>
          <p>
            Monter de version de PHP, c'est rester sur une branche supportée et réduire la dette technique.
            Piste : tester mon portfolio sur PHP 8.5 et relever les avertissements de dépréciation.
          </p>
        </details>
        <p class="veille-card-sources">
          <a href="https://www.php.net/manual/en/migration85.php" target="_blank" rel="noopener noreferrer">Guide de migration php.net</a>
          <a href="https://linuxiac.com/php-8-5-introduces-uri-extension-pipe-operator-and-syntax-improvements/" target="_blank" rel="noopener noreferrer">Linuxiac</a>
        </p>
      </article>

      <article class="veille-card" data-themes="securite">
        <div class="veille-card-head">
          <time datetime="2025">Édition 2025</time>
          <ul class="veille-tags"><li>Sécurité web</li></ul>
        </div>
        <h3>OWASP Top 10:2025, la sécurité devient un sujet de chaîne complète</h3> <!-- OWASP = Open Web Application Security Project, un projet open source qui publie des guides de sécurité pour les applications web. -->
        <p>
          La 8e édition du classement garde le contrôle d'accès défaillant en tête (le SSRF y est désormais intégré),
          fait passer la mauvaise configuration de sécurité de la 5e à la 2e place et ajoute deux catégories :
          les défaillances de la chaîne d'approvisionnement logicielle (A03) et la mauvaise gestion des conditions
          exceptionnelles (A10).
        </p>
        <details>
          <summary>Ce que j'en retiens</summary>
          <p>
            Cela me donne une grille d'audit pour mon portfolio : contrôle d'accès, configuration (ne pas afficher
            les erreurs PHP en production), dépendances Composer à jour, gestion propre des erreurs et des exceptions.
          </p>
        </details>
        <p class="veille-card-sources">
          <a href="https://owasp.org/Top10/2025/" target="_blank" rel="noopener noreferrer">OWASP Top 10:2025</a>
          <a href="https://blog.qualys.com/qualys-insights/2026/06/15/what-changed-in-owasp-top-10-2025-and-recommendations-for-each-category" target="_blank" rel="noopener noreferrer">Qualys</a>
        </p>
      </article>

    </div>
  </div>

  <!-- ================= PISTES D'ACTION ================= -->
  <div class="veille-section">
    <h2>Ce que ma veille m'amène à faire</h2>
    <p class="veille-intro">Une veille ne sert à rien si elle reste théorique : voici les pistes concrètes qui en découlent pour mes projets.</p>
    <!-- À ADAPTER : mets à jour l'état (« À faire », « En cours », « Fait ») au fil de l'eau. -->
    <ul class="veille-actions">
      <li><em>À faire</em><strong>Auditer mon portfolio avec l'OWASP Top 10:2025</strong><span>Contrôle d'accès, configuration, dépendances Composer, gestion des erreurs.</span></li>
      <li><em>À faire</em><strong>Tester mon portfolio sur PHP 8.5</strong><span>Relever les dépréciations et corriger ce qui doit l'être.</span></li>
      <li><em>À faire</em><strong>Conteneuriser mon portfolio</strong><span>Partir d'une image durcie et automatiser le déploiement.</span></li> 
    </ul>
    <p class="veille-update">Cette page est mise à jour au fil de ma veille. Dernière mise à jour : novembre 2026.</p>
  </div>

</section>

<script>
  (function () {
    var root = document.getElementById('veille');
    if (!root) { return; }
    root.classList.add('has-js');

    var cards = [].slice.call(root.querySelectorAll('.veille-card'));
    var themeButtons = [].slice.call(root.querySelectorAll('.veille-theme'));
    var status = root.querySelector('[data-status]');
    var reset = root.querySelector('[data-reset]');
    var current = 'all';

    function themesOf(card) {
      return (card.getAttribute('data-themes') || '').split(/\s+/).filter(Boolean);
    }

    // Compteur de fiches sur chaque thème
    themeButtons.forEach(function (btn) {
      var key = btn.getAttribute('data-filter');
      var n = cards.filter(function (c) { return themesOf(c).indexOf(key) !== -1; }).length;
      var badge = btn.querySelector('[data-count-for]');
      if (badge) { badge.textContent = n + (n > 1 ? ' fiches' : ' fiche'); }
    });

    function apply(filter) {
      current = filter;
      var shown = 0;
      cards.forEach(function (card) {
        var match = filter === 'all' || themesOf(card).indexOf(filter) !== -1;
        card.hidden = !match;
        if (match) { shown++; }
      });
      themeButtons.forEach(function (btn) {
        btn.setAttribute('aria-pressed', String(btn.getAttribute('data-filter') === filter));
      });
      reset.setAttribute('data-visible', String(filter !== 'all'));
      status.textContent = shown + (shown > 1 ? ' fiches affichées' : ' fiche affichée');
    }

    themeButtons.forEach(function (btn) {
      btn.addEventListener('click', function () {
        var key = btn.getAttribute('data-filter');
        apply(current === key ? 'all' : key);
      });
    });
    reset.addEventListener('click', function () { apply('all'); });

    apply('all');
  })();
</script>