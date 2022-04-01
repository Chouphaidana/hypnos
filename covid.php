<?php
$mainTitle="Covid-19:Info";
require_once "header.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $mainTitle ?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <!-- Menu Mavigation  : -->

<div class="container">
  <div class="row">
    <div class="col">
      <img src="media/image/hypnos Badge.jpg" style="width: 150px;height: 150px;" alt="Hypnos - World Hôtel">
      <a href="index.php"></a>
      </div>
<div class="col">
<a href="noshotels.php">
  <button type="button" class="btn btn-danger">Nos Hôtels </button></a>
  </div>
  <div class="col">
  <a href="reservation.php">
  <button type="button" class="btn btn-danger">Réservation </button></a>
  </div>
  <div class="col">
  <a href="societe.php">
  <button type="button" class="btn btn-danger">Info Hyonos</button></a>
  </div>
  <div class="col">
  <a href="contact.php">
  <button type="button" class="btn btn-danger">Contact</button></a>
</div>
<div class="col">
  <a href="#">
  <button type="button" class="btn btn-danger">Recrutement</button></a>
</div>
</div>
</div>
<br>
<div class="alert alert-danger" role="alert">
    <div class="redCovid">
    <p>Depuis plusieurs mois , Hyonos se bat pour vous offir la meilleur qualitée de service , tous en essayant de mettre en oeuvre ses protocoles sanitaire , en relation avec les autoritées , afin de vous recevoir dans les meilleurs conditions .<br>
</div>
</div>
</body>
</html>