<?php
$mainTitle="Hypnos Paris";
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
        <div class="col-4">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="media/image/Hotel%20Bali/Bali%20-%20agriculture-1807581_1920.jpg" class="d-block w-100" alt="Bali - Agriculture">
                    </div>
                    <div class="carousel-item">
                        <img src="media/image/Hotel%20Bali/Bali%20-%20indonesia-4616370_1920.jpg" class="d-block w-100" alt="Bali - Indonesie">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="media/image/Hotel%20Bali/Bali%20-%20agriculture-1807581_1920.jpg" class="d-block w-100" alt="Bali - Agriculture">
                    </div>
                    <div class="carousel-item">
                        <img src="media/image/Hotel%20Bali/Bali%20-%20indonesia-4616370_1920.jpg" class="d-block w-100" alt="Bali - Indonesie">
                    </div>
                </div>
            </div>
        </div>
        <div class="col-4">
            <div id="carouselExampleSlidesOnly" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="media/image/Hotel%20Bali/Bali%20-%20agriculture-1807581_1920.jpg" class="d-block w-100" alt="Bali - Agriculture">
                    </div>
                    <div class="carousel-item">
                        <img src="media/image/Hotel%20Bali/Bali%20-%20indonesia-4616370_1920.jpg" class="d-block w-100" alt="Bali - Indonesie">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">
    <h1 class="center">
        Bienvenue a Bali
    </h1><br>
    <p>
        Bali est une île du sud de l'Indonésie située entre les îles de Java et de Lombok.
        Elle fait partie des petites îles de la Sonde. Sa superficie est de 5 637 km2. La population de l'ensemble des îles de la province de Bali était de 4 317 404 habitants en 2020, soit une densité de 750 habitants/km2.
        Administrativement, l'île fait partie de la province du même nom et accueille sa capitale (ibu kota), Denpasar, dans le sud de l'île.
    </p>
    <br>
    <h4 class="infoPays"><ul>
            <li>Monnaie : Roupie Indonésienne ( 1€ = 15.95 IDR)</li>
            <li>Langue : Balinais ; Indonésien ; Anglais</li>
            <li>Témpérature Moyenne Eté : 28 Dégrés</li>
            <li>Tépérature Moyenne Hivers : 26 Degrés</li>
            <li>Religien Principale : Musulman</li>
        </ul></h4>
</div>
<br>
<div class="container">
    <h1 class="center">
        Notre Hôtel :
    </h1>
    <p>
        Situé à 3,4 km de la Forêt des singes d'Ubud, Hyonos Hôtel Bali vous propose un jacuzzi par et un spa par chambre avec vue sur la Forêt ou la plage.
        Cinqs restaurant avec de la cuisine des quatres coin du monde.
        Notre hôtel boutique dans le quartier Campuhan jouit de la proximité d'attractions touristiques telles que Naughty Nuri's Ubud et le Musée d'art de Neka.
        Situé a 45 km de l'aéroport Internationnal de Dempasar ( Navette Incluse sur demande )
    </p>
</div>
<br>
<div class="container">
    Menu Reservation a  Integrer
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
<!-- Footer -->






</body>
</html>