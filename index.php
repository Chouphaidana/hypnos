<?php
$mainTitle = "Hypnos - World Hôtel";
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
  <!-- Bar Covid -->
  <div class="alert alert-danger" role="alert">
    <a href="covid.php"><h6>Covid 19 : Information</h6></a>
</div>
<!-- Caroussel -->

<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="false" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="4" aria-label="Slide 5"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="5" aria-label="Slide 6"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="6" aria-label="Slide 7"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="media/image/Hotel Bali/Bali - 2975787_1920.jpg" style="width:100%; height: 550px; margin:10px;" class="d-block w-100" alt="Bali">
      <div class="carousel-caption d-none d-md-block">
        <h5>Bali</h5>
    </div>
    </div>
    <div class="carousel-item">
      <img src="media/image/Hotel Maldive/Maldive - beach-g37aa4ab9e_1920.jpg" style="width:100%;height: 550px; margin:10px;" class="d-block w-100" alt="Les Maldives">
      <div class="carousel-caption d-none d-md-block">
        <h5>Les Maldives</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="media/image/Hotel Maroc/Maroc - morocco-2349647_1920.jpg" style="width:100%;height: 550px; margin:10px;"class="d-block w-100" alt="Marrakech">
      <div class="carousel-caption d-none d-md-block">
        <h5>Marrakech</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="media/image/Hotel Paris/Paris - 213803_1920.jpg" style="width:100%;height: 550px; margin:10px;"class="d-block w-100" alt="Paris">
      <div class="carousel-caption d-none d-md-block">
        <h5>Paris</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="media/image/Hotel Salzbourg/Salzbourg - spa-g19ea96341_1920.jpg" style="width:100%;height: 550px; margin:10px;"class="d-block w-100" alt="Salzbbourg">
      <div class="carousel-caption d-none d-md-block">
        <h5>Salzbourg</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="media/image/Hotel Santorin/Santorin - 4825173_1920.jpg" style="width:100%;height: 550px; margin:10px;"class="d-block w-100" alt="Santorin">
      <div class="carousel-caption d-none d-md-block">
        <h5>Santorin</h5>
      </div>
    </div>
    <div class="carousel-item">
      <img src="media/image/Hotel Venise/Venise - canal-g92e379e13_1920.jpg" style="width:100%;height: 550px; margin:10px;"class="d-block w-100" alt="Venise">
      <div class="carousel-caption d-none d-md-block">
        <h5>Venise</h5>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Précédent</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Suivant</span>
  </button>
</div>

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
  <div class="container">
      <div class="row">
          <div class="col">
      <h3 class="happy">Nous sommes ravis de vous Revoir !!!</h3>
      <br>
              <p>Aprés plusieurs mois d'ouverture et de fermeture , le retour de la vie normal est enfin la ...</p>
              <p>Hypnos - World Hôtel ouvre c'est porte pour vous acceuillir de nouveau pour votre plus grands plaisir ...</p>
  </div>
          <div class="col">
              Menu Reservation a Integre !!!
          </div>
      </div>
  </div>

  <!-- Footer -->

  <!-- Footer -->
  <footer class="text-center text-lg-start bg-light text-muted">
          <div class="container text-center text-md-start mt-5">
              <!-- Grid row -->
              <div class="row mt-3">
                  <!-- Grid column -->
                  <!-- Grid column -->
                  <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                      <!-- Links -->
                      <h6 class="text-uppercase fw-bold mb-4">
                          Nos Hôtels :
                      </h6>
                      <p>
                          <a href="bali.php" class="text-reset">Bali ( Indonésie )</a>
                      </p>
                      <p>
                          <a href="#!" class="text-reset">Maldive</a>
                      </p>
                      <p>
                          <a href="#!" class="text-reset">Marrakech ( Maroc )</a>
                      </p>
                      <p>
                          <a href="#!" class="text-reset">Salzbourg ( Autriche )</a>
                      </p>
                      <p>
                          <a href="#!" class="text-reset">Santorin ( Grêce )</a>
                      </p>
                      <p>
                          <a href="#!" class="text-reset">Venise ( Italie )</a>
                      </p>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                      <!-- Links -->
                      <h6 class="text-uppercase fw-bold mb-4">
                          Liens Utiles :
                      </h6>
                      <p>
                          <a href="#!" class="text-reset">Nos Tarifs</a>
                      </p>
                      <p>
                          <a href="societe.php" class="text-reset">A Propos de Nous</a>
                      </p>
                      <p>
                          <a href="reservation.php" class="text-reset">Reservation</a>
                      </p>
                      <p>
                          <a href="contact.php" class="text-reset">Aide</a>
                      </p>
                  </div>
                  <!-- Grid column -->

                  <!-- Grid column -->
                  <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                      <!-- Links -->
                      <h6 class="text-uppercase fw-bold mb-4">
                          Contact :
                      </h6>
                      <p><em class="fas fa-home me-3"></em> Paris La Défense, 92400 Paris, France</p>
                      <p>
                          <em class="fas fa-envelope me-3"></em>
                          <a hrel="mailto:chouphaidana@outlook.fr">contact@hyonos.com</a>
                      </p>
                      <p><em class="fas fa-phone me-3"></em> + 33 6 12 83 29 26</p>
                      <p><em class="fas fa-print me-3"></em> + 33 1 00 00 00 01</p>
                  </div>
                  <!-- Grid column -->
              </div>
              <!-- Grid row -->
          </div>
      </section>
      <!-- Section: Links  -->

      <!-- Copyright -->
      <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.05);">
          © 2022 Copyright:
          <a class="text-reset fw-bold" href="https://mdbootstrap.com/">Hyonos.com</a>
      </div>
      <!-- Copyright -->
  </footer>
  <!-- Footer -->

















    
    <script src="data/script.js"></script>
</body>
</html>