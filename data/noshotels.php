<?php
$mainTitle="Nos Hôtels";
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
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <!-- Bar Covid -->

<div class="covid">
    <a href="covid.php"><h6>Covid 19 : Information</h6></a>
</div>
<!-- Nav Bar -->

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="index.php"><img src="media/image/" height="40" width="50"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  <form class="container-fluid justify-content-start">
    <a class="navbar-brand" href="data/noshotels.php">
    <button class="btn btn-outline-danger me-2" type="button">Nos Hôtels</button></a>
    <a class="navbar-brand" href="data/societe.php">
    <button class="btn btn-outline-danger me-2" type="button">Notre Société</button></a>
    <a class="navbar-brand" href="data/reservation.php">
    <button class="btn btn-outline-danger me-2" type="button">Reservation</button></a>
    <a class="navbar-brand" href="data/contact.php">
    <button class="btn btn-outline-danger me-2" type="button">Contact</button></a>
  </form>
  </div>
</nav>
</body>
</html>