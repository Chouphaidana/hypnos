<?php
$mainTitle = "Nos Hôtels";
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
    <a href="convid.php"><h6>Covid 19 : Information</h6></a>
</div>


<!-- Nab Bar -->

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
  <div class="container">
      <div class="row">
          <div class="loveAnimation">
          <img src="media/image/digital-art-gab9ac4ec1_1920.png" height="500px" width="100%">
              <div class="barStop">
              </div>
      <h1> Hyonos c'est 7 Hôtels Romantiques sur toute la planéte ; On va bien trouver votre bonheur !!!</h1>
          <form>
              Besoin d'information avant de réserver ?
              Choisissez votre destination pour vous rendree sur la page de l'hôtel et obtenir toutes els information dont vous avez besoin :
              <br>
              <div class="center">
                  <p></p>
                  <br>
                  <form>
                      <fieldset>
                          <legend>Choisissez votre Destinations :</legend>
                          <input type="radio" id="1" name="hotel">
                          <label for="Bali">Bali ( Indonésie )</label><br/>
                          <input type="radio" id="2" name="hotel">
                          <label for="maldive">Les Maldives</label><br/>
                          <input type="radio" id="3" name="hotel">
                          <label for="Marrakech">Marrakech ( Maroc )</label><br/>
                          <input type="radio" id="4" name="hotel">
                          <label for="Paris">Paris ( France )</label></br>
                          <input type="radio" id="5" name="hotel">
                          <label for="Salzbourg">Salzbourg ( Autriche )</label></br>
                          <input type="radio" id="6" name="hotel">
                          <label for="Santorin">Santorin ( Grêce )</label></br>
                          <input type="radio" id="7" name="hotel">
                          <label for="Venise">Venise ( Italie )</label>
                        </fieldset>
                      <button type="submit" class="btn btn-danger">Valider</button>
                  </form>
              </div>
              <?php
            if (isset($_POST["name"])){
                switch($_POST["name"]){
                    case "1":
                        $url = "bali.php";
                        break;
                        case "2";
                        $url = "maldive.php";
                        break;
                    case "3";
                    $url = "marrakech.php";
                    break;
                    case "4":
                        $url = "paris.php";
                        break;
                    case "5":
                        $url = "salzbourg.php";
                        break;
                    case "6":
                        $url = "santorin.php";
                        break;
                    case "7":
                        $url = "venise.php";
                        break;
                }

            }
              ?>


  <!-- Footer -->
      <footer class="text-center text-lg-start bg-light text-muted">
          <div class="container text-center text-md-start mt-5">
              <!-- Grid row -->
              <div class="row mt-3">
                  <!-- Grid column -->
                  <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                      <!-- Content -->
                      <h6 class="text-uppercase fw-bold mb-4">
                          <i class="fas fa-gem me-3"></i>Hyonos - World Hôtel
                      </h6>
                      <p>
                          <a href="mailto:chouphaidana@outlook.com">Hyonos Bali</a><br>
                              <a href="mailto:chouphaidana@outlook.com">Hyonos Maldive</a><br>
                              <a href="mailto:chouphaidana@outlook.com">Hyonos Maroc</a><br>
                              <a href="mailto:chouphaidana@outlook.com">Hyonos Paris</a><br>
                              <a href="mailto:chouphaidana@outlook.com">Hyonos Salzbourg</a><br>
                              <a href="mailto:chouphaidana@outlook.com">Hyonos Santorin</a><br>
                                  <a href="mailto:chouphaidana@outlook.com">Hyonos Venise</a><br>
                      </p>
                  </div>
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
                          <a href="maldive.php" class="text-reset">Maldive</a>
                      </p>
                      <p>
                          <a href="marrakech.php" class="text-reset">Marrakech ( Maroc )</a>
                      </p>
                      <p>
                          <a href="paris.php" class="text-reset">Paris ( France )</a>
                      </p>
                      <p>
                          <a href="salzbourg.php" class="text-reset">Salzbourg ( Autriche )</a>
                      </p>
                      <p>
                          <a href="santorin.php" class="text-reset">Santorin ( Grêce )</a>
                      </p>
                      <p>
                          <a href="venise.php" class="text-reset">Venise ( Italie )</a>
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
                      <p><i class="fas fa-home me-3"></i> Paris La Défense, 92400 Paris, France</p>
                      <p>
                          <i class="fas fa-envelope me-3"></i>
                          <a hrel="mailto:chouphaidana@outlook.fr">contact@hyonos.com</a>
                      </p>
                      <p><i class="fas fa-phone me-3"></i> + 33 6 12 83 29 26</p>
                      <p><i class="fas fa-print me-3"></i> + 33 1 00 00 00 01</p>
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
</div>







<script src="script.js"></script>
</body>
</html>