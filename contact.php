<?php
$mainTitle = "Contact";
require_once "header.php";
?>
<!DOCTYPE html>
<html lang="en">
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
  <!-- Bar Covid -->

  <div class="alert alert-danger" role="alert">
    <a href="convid.php"><h6>Covid 19 : Information</h6></a>
</div>


<!-- Nab Bar -->

<div class="container">
  <div class="row justify-content-md-center">
    <div class="col-3">
    <form class="form-inline flex">
    <a href="noshotels.php">
  <button class="btn btn-sm btn-outline-secondary" type="button">Nos Hôtels</button></a>
  <a href="reservation.php">
  <button class="btn btn-sm btn-outline-secondary" type="button">Reservation</button></a>
    </form>
    </div>
    <div class="col-6">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="index.php">
    <img src="media/image/hypnos Badge.jpg" width="50" height="50" class="d-inline-block align-top" alt="">
    Hypnos World Hôtels
  </a>
  </div>
  <div class="col-3">
  <a href="societe.php">
  <button class="btn btn-sm btn-outline-secondary" type="button">A Propos de Nous</button></a>
  <a href="contact.php">
  <button class="btn btn-sm btn-outline-secondary" type="button">Contactez Nous</button></a>
  </form>
 </nav>
</div>
<form>
  <div class="form-group">
    <label for="exampleFormControlInput1">Email address</label>
    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Example select</label>
    <select class="form-control" id="exampleFormControlSelect1">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Example multiple select</label>
    <select multiple class="form-control" id="exampleFormControlSelect2">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Example textarea</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
</form>