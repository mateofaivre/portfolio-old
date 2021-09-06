<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="MDécouvrez les projets de Matéo Faivre, développeur web à l'ESADD à Dijon.">
    <meta name="keywords" content="HTML, CSS, JavaScript, JS, Animation, PHP, front-end, back-end, SCSS, Design, Développement, Web, UI, UX, Agile, Dijon, Bourgogne">
    <meta name="author" content="Matéo Faivre">
    <title>Projets | Matéo Faivre</title>
    <link rel="shortcut icon" href="css/img/favicon-red.png" type="image/x-icon">
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-SWNX5F1RQ3"></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag(){dataLayer.push(arguments);}
      gtag('js', new Date());

      gtag('config', 'G-SWNX5F1RQ3');
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.15.1/css/all.css" type="text/css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/projets.css">
    <link rel="stylesheet" href="components/styles/menu.css">
    <link rel="stylesheet" href="components/styles/box-loading.css">
    <link rel="stylesheet" href="components/styles/swiper-bundle.css">
    <link rel="stylesheet" href="components/styles/swiper.css">
</head>
<body>
  <div class="cursor"></div>

<?php include 'components/menu.php' ?>
<?php include 'components/box-loading.php' ?>

<?php $slides = [
  [
    "type-projet" => "Stage",
    "date-projet" => "Mai - Août 2021",
    "title" => "Fcinq",
    "subtitle" => "J'ai rejoint l'agence digitale parisienne <a href='https://www.fcinq.com/' target='_blank' class='link--normal'>FCINQ</a> en tant que développeur web. J’ai pu participer à des projets importants pour l’Institut National du Cancer, la marque Comté, le festival Series Mania, l’agence Australie.Gad... J’ai expérimenté WordPress (avec des thèmes créés par FCINQ), SCSS, PHP, Twig, JS et Nuxt.Js. Découvrez <a href='https://issuu.com/mateofaivre/docs/rapport-stage-mateo-faivre' class='link--normal' target='_blank'>mon rapport de stage.</a>",
    'savoir-plus' => false,
    "img-right" => "mokup-fcinq.png",
    "overlay" => false,
    "overlay-slider" => false,
  ],
  [
    "type-projet" => "Workshop",
    "date-projet" => "Janvier 2021 - Aujourd'hui",
    "title" => "Emargement",
    "subtitle" => "J’ai codé un site permettant de gérer les présences des
    étudiants de l'ESADD avec <i>HTML/CSS</i>, <i>JS</i>, <i>PHP</i> et <i>SQL</i>, avec un back-office. À découvrir bientôt...",
    "savoir-plus" => false,
    "img-right" => "mokup-esadd-v2.png",
    "overlay" => false
  ],
  [
    "type-projet" => "Workshop",
    "date-projet" => "Avril 2021",
    "title" => "Mercedes",
    "subtitle" => "Pour le groupe CHOPARD et MERCEDES-TRUCKS, j’ai designé puis codé en 5 jours un site <i>responsive</i> permettant de découvrir la possibilité de faire un covering sur le camion Mercedes Actros, avec une expérience 3D. Pour cela, j'ai utilisé <i>HTML/SCSS</i>, <i>JS</i> et une librairie (Model Viewer) pour intégrer un modèle 3D du camion, réalisé par un camarade. Vous pouvez le découvrir <a href='/covering' class='link--normal' target='_blank'>ici.</a>",
    "savoir-plus" => false,
    "img-right" => "mockup-actros.png",
    "overlay" => false,
  ],
  [
    "type-projet" => "Les Entrep'",
    "date-projet" => "Novembre - Mai 2021",
    "title" => "Sneaky World",
    "subtitle" => "Je participe à un projet de
    création d’une boutique physique et en ligne de vente de sneakers rares à Dijon dans le cadre du programme Les Entrep’. Je suis épaulé par 5 camarades dont 4 provenant d’école de commerce.",
    "savoir-plus" => true,
    "img-right" => "mockup-sneaky.png",
    "overlay" => true,
    "overlay-slider" => false,
    "overlay-media-type" => 'video',
    "overlay-media-name" => 'sneakyworld-reduit.mp4',
    "overlay-text" => "Dans le cadre des Entrep’, je suis épaulé par 5 camarades dont 4 provenant d’école de commerce. Bien que je développe un site e-commerce sur Shopify pour ce projet, je suis aussi amené à développer mon sens de l’entreprenariat, du marketing, du commerce mais aussi économique. Durant cette expérience nous réalisons aussi avec un camarade de l'ESADD l'idendité graphique et les supports de communication autour du projet comme cette vidéo promotionnelle.",
  ],
  [
    "type-projet" => "Workshop",
    "date-projet" => "Octobre - Décembre 2020",
    "title" => "123DATA",
    "subtitle" => "J’ai designé et codé l’audioguide de l’exposition 123DATA organisée par EDF et l’ESADD. L’audioguide est disponible via un site <i>HTML/CSS/JS</i> mais aussi une application <i>Android</i>.",
    "savoir-plus" => true,
    "img-right" => "mockup-123data.png",
    "overlay" => true,
    "overlay-slider" => false,
    "overlay-media-type" => 'video',
    "overlay-media-name" => 'mokup-123data-big-sound.mp4',
    "overlay-text" => "L'exposition nationale 123DATA est basée sur l'idée de faire découvrir le <i>Data Design</i> à tous. Il fallait rompre avec certains des a priori persistants touchant à la valeur et utilité des données. L'ESADD est partie prenante de l'édition dijonnaise. J'ai réalisé un audioguide (uniquement pour téléphone) en <i>HTML/CSS</i> et <i>JS</i> ainsi qu'une application <i>Android</i>. Il est disponible <a href='/audioguide' target='_blank'>ici.</a>",
  ],
  [
    "type-projet" => "Workshop",
    "date-projet" => "Décembre 2020",
    "title" => "DS",
    "subtitle" => "Pour le groupe CHOPARD, j’ai participé avec deux camarades à la réalisation d’une vidéo en <i>Motion Design</i> concernant DS AUTOMOBILES et le nouveau moteur électrique de DS3 Crossback.",
    "savoir-plus" => true,
    "img-right" => "mockup-ds.png",
    "overlay" => true,
    "overlay-slider" => false,
    "overlay-media-type" => 'video',
    "overlay-media-name" => 'DS3_FINAL_cut.mp4',
    'overlay-video-poster' => "poster-cv-video.png",
    "overlay-text" => "Ce workshop m'a été confié par le groupe CHOPARD pour DS Automobiles pendant 7 jours en décembre 2020. À travers du <i>Motion Design</i> il fallait montrer la transition énergétique du moteur à essence vers le moteur électrique autour du modèle DS3 Crossback. Ce projet m'a permis de développer ma créatvité et mon expérience sur <i>After Effects</i>, mais surtout de découvrir une grande marque. La gestion de projet a été un point clé de la réussite de cette réalisation.",
  ],
  [
    "type-projet" => "Stage",
    "date-projet" => "Mars - Juillet 2020",
    "title" => "FEDOSAD",
    "subtitle" => "J’ai effectué deux missions. La première était la création d’une partie Devis réalisée en <i> HTML/CS/JS </i> sur le site <i>WordPress</i>. La deuxième était de créer un Extranet pour les 700 employés, toujours sur le site.",
    "savoir-plus" => true,
    "img-right" => "mockup-fedo.png",
    "overlay" => true,
    "overlay-slider" => true,
    "overlay-media-type" => ['video', 'video'],
    "overlay-media-name" => ['Devis_portfolio-crop.mp4', 'Extranet_portfolio-crop.mp4'],
    "overlay-text" => [
      "Durant le mois de mars jusqu’à mai 2020, j’ai effectué une mission pour la FEDOSAD à Dijon, une entreprise d’aide à la personne. Je me suis chargé de la création d’une partie Devis en <i>HTML/CSS/JS</i> sur leur <i>WordPress</i>. Cette partie doit permettre de mieux cibler le client, puisque elle permet de connaître son profil et ses coordonnées. Le client a lui une information à la fin du devis lui permettant de voir quels services de la FEDOSAD pourraient lui convenir.",
      "La collaboration avec la FEDOSAD s’étant bien déroulée, j’ai effectué un stage de juin à juillet 2020 autour d’une mission bien précise. Il m’a fallu créer un Extranet pour les 700 employés, qui leur permettrait d’accéder, en fonction de leur poste au sein de l’entreprise, à des documents spécifiques téléchargeables. Ceci a encore été effectué sur le site <i>WordPress</i> avec du <i>HTML/CSS</i>, du <i>JavaScript</i>, ainsi que du <i>PHP</i>."
    ],
  ]
] ?>

    <div class="slider__wrapper">
      <?php foreach ($slides as $key => $slide) {
        include 'components/slide.php';
      } ?>
    </div>

      <div class='icon-scroll'></div>

      <div class="arrows">
        <div class="arrow">
          <svg width="145" height="75" viewBox="0 0 145 75" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M139.574 0.953716L72.4582 67.464L5.34204 0.953716C4.08994 -0.244801 2.09432 -0.210248 0.884775 1.03044C-0.294925 2.24096 -0.294925 4.15981 0.884775 5.37004L70.2327 74.0855C71.4635 75.3048 73.4588 75.3048 74.6899 74.0855L144.038 5.37004C145.29 4.17153 145.324 2.1944 144.115 0.953424C142.906 -0.28726 140.91 -0.32152 139.658 0.876704C139.632 0.901887 139.606 0.927362 139.581 0.953424L139.574 0.953716Z" fill="currentColor"/>
          </svg>
        </div>
        <div class="arrow disabled">
          <svg width="145" height="75" viewBox="0 0 145 75" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M5.42567 74.0463L72.5418 7.53604L139.658 74.0463C140.91 75.2448 142.906 75.2102 144.115 73.9696C145.295 72.759 145.295 70.8402 144.115 69.63L74.7674 0.91447C73.5365 -0.304837 71.5412 -0.304838 70.3101 0.91447L0.962198 69.6299C-0.289904 70.8285 -0.324478 72.8056 0.884774 74.0466C2.09432 75.2872 4.08965 75.3215 5.34205 74.1233C5.36835 74.0981 5.39405 74.0726 5.41947 74.0466L5.42567 74.0463Z" fill="currentColor"/>
          </svg>
        </div>
      </div>
    
      <div class="slider__navi">
        <a href="#" class="slide-nav active" data-slide="1">FCINQ</a>
        <a href="#" class="slide-nav" data-slide="2">ÉMARGEMENT</a>
        <a href="#" class="slide-nav" data-slide="3">MERCEDES</a>
        <a href="#" class="slide-nav" data-slide="4">SNEAKY</a>
        <a href="#" class="slide-nav" data-slide="5">123DATA</a>
        <a href="#" class="slide-nav" data-slide="6">CHOPARD</a>
        <a href="#" class="slide-nav" data-slide="7">FEDOSAD</a>
      </div>

      <script src="js/projets.js"></script>
      <script src="components/js/cursor.js"></script>
      <script src="components/js/menu.js"></script>
      <script src="components/js/box-loading.js"></script>
      <script src="components/js/swiper-bundle.min.js"></script>
      <script src="components/js/swiper.js"></script>
</body>
</html>