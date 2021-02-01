<?php
$DEBUG = true;
if ($DEBUG) {
  require 'scssphp/scss.inc.php';
  $scss = new scssc();
  $scss->setImportPaths("css/");
  $content = $scss->compile('@import "web.scss"');
  file_put_contents('css/index.scss.css', $content);
}
?>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="We are an impact-driven initiative with the aim of identifying, rating and recognizing schools whose innovative learning environment and
            overall school culture contribute to the wholesome development of students.">
  <meta name="keywords" content="Geate places to school, Kenyan schools, Top schools in kenya, School compettition and awards in Kenya. Schools sponsorship.">
  <title>Great places to school</title>

  <!-- icons -->
  <!-- end of Twitter Card-->
  <link href="images/logo.png" rel="icon" type="image/x-icon" />
  <link href="images/logo.png" rel="shortcut icon" type="image/x-icon" />

  <!-- Main CSS -->
  <link rel="stylesheet" href="css/index.scss.css">

  <!--Google fonts-->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Oswald&family=Space+Grotesk&display=swap" rel="stylesheet">

  <!-- bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <link rel="stylesheet" href="css/sal.css">

  <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous" async></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous" async></script>
  <script src="https://use.fontawesome.com/f36a81ef56.js" async></script>
  <script src="js/sal.js"></script>
</head>