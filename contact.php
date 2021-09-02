<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Mon portfolio | Matéo Faivre">
    <meta name="keywords" content="HTML, CSS, JavaScript, JS, Animation, PHP, front-end, back-end">
    <meta name="author" content="Matéo Faivre">
    <title>Contact | Matéo Faivre</title>
    <link rel="shortcut icon" href="css/img/favicon-red.png" type="image/x-icon">
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
    <link rel="stylesheet" href="css/contact.css">
    <link rel="stylesheet" href="components/styles/menu.css">
    <link rel="stylesheet" href="components/styles/box-loading.css">
</head>
<body>

<?php include 'components/menu.php' ?>
<?php include 'components/box-loading.php' ?>

 <form class="bg" method="POST">
  <div class="containerContact">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-left">
          <div class="screen-header-button close"></div>
          <div class="screen-header-button maximize"></div>
          <div class="screen-header-button minimize"></div>
        </div>
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <div class="app-title">
            Contact
          </div>
          <a href="https://www.linkedin.com/in/mateo-faivre" class="app-contact" target="_blank">LinkedIn</a>
        </div>
        <div class="screen-body-item">
          <div class="app-form">
            <div class="app-form-group">
              <input class="app-form-control" name="name"placeholder="NOM" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" name="email" placeholder="EMAIL" required>
            </div>  
            <!-- <div class="app-form-group">
              <input class="app-form-control" placeholder="CONTACT NO"> 
            </div> -->
            <div class="app-form-group message">
              <textarea class="app-form-control" name="message" placeholder="MESSAGE" required></textarea>
            </div>
            <div class="app-form-group buttons">
              <!-- <button class="app-form-button">RETOUR</button> -->
              <button type="submit" class="app-form-button">ENVOYER</button>
            </div>
            <?php
if (isset($_POST['message'])) {
  $position_arobase = strpos($_POST['email'], '@');
  if ($position_arobase === false)
      echo '<p class="error">Votre email doit comporter un arobase.</p>';
  else {
      $retour = mail('mateo.faivre@esadd.fr', 'PORTFOLIO', $_POST['message'], 'From: ' . $_POST['email']);
      if($retour)
          echo '<p class="send">Votre message a été envoyé.</p>';
      else
          echo '<p class="error">Erreur.</p>';
  }
}
?>
          </div>
        </div>
      </div>
    </div>
  </div>
</form> 

  <script src="components/js/menu.js"></script>
  <script src="components/js/box-loading.js"></script>
</body>
</html>