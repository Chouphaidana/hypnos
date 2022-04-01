<?php
$mainTitle = "Page Test";
require_once "header.php";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $mainTitle ?></title>
</head>
<body>










<div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="500">
  <div class="carousel-inner">
    <div class="carousel-item">
      <div class="d-flex justify-content-center">
      <img src="media/image/Hotel Paris/Paris - 213803_1920.jpg" style ="width:90%; height: 600px;" alt="Canards">
    </div>
  </div>
    <div class="carousel-item">
      <div class="d-flex justify-content-center">
      <img src="media/image/Hotel Paris/Paris - 3193674_1920.jpg" style="width:90%; height: 600px;" alt="Poussins">
    </div>
  </div>
    <div class="carousel-item active">
    <div class="d-flex justify-content-center">
      <img src="media/image/Hotel Paris/Paris - bistro-498504_1920.jpg" style="width: 90%;height: 600px;" alt="Porcs">
    </div>
  </div>
    <div class="carousel-item">
    <div class="d-flex justify-content-center">
      <img src="./bunny-1149060_1920.jpg" style="width:90%;height: 600px;" alt="Lapins">
    </div>
  </div>
    <div class="carousel-item">
      <div class="d-flex justify-content-center">
      <img src="./ireland-1985088_1920.jpg" style="width:90%;height: 600px;" alt="Moutons">
    </div>
  </div>
    <div class="carousel-item">
      <div class="d-flex justify-content-center">
      <img src="./goat-1596880_1920.jpg" style="width:90%;height: 600px;" alt="Chevre">
    </div>
  </div>
    <div class="carousel-item">
      <div class="d-flex justify-content-center">
      <img src="./ireland-1985088_1920.jpg" style="width:90%;height: 600px;" alt="Vaches">
    </div>
  </div>
    <div class="carousel-item">
      <div class="d-flex justify-content-center">
      <img src="./foal-3467629_1920.jpg" style="width:90%;height: 600px;" alt="Chevaux">
    </div>
  </div>
</div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Précedent</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon color9ed" aria-hidden="true"></span>
    <span class="sr-only">Suivant</span>
  </a>
</div>