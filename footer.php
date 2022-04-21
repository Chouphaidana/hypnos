<! DOCTYPE html>  
<html lang="en">  
<head>  
  <title> Bootstrap 4 Footer with Social icons </title>  
  <meta charset="utf-8">  
  <meta name="viewport" content="width=device-width, initial-scale=1">  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>  
   <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >  
</head>
    <style>
        h2 {  
padding: 25px 0;  
text-align: center;  
color: #fff;  
background: #7c8490;  
}  
footer {  
 background: #d9534f;
  color: white;  
  margin-top:100px;  
}  
footer a {  
  color: #fff;  
  font-size: 14px;  
  transition-duration: 0.2s;  
}  
footer a:hover {  
  color: #FA944B;  
  text-decoration: none;  
}  
.copy {  
  font-size: 12px;  
  padding: 10px;  
  border-top: 1px solid #FFFFFF;  
}  
.footer-middle {  
  padding-top: 2em;  
  color: white;  
}  
ul.social-network {  
  list-style: none;  
  display: inline;  
  margin-left: 0 !important;  
  padding: 0;  
}  
ul.social-network li {  
  display: inline;  
  margin: 0 5px;  
}  
  
.social-network a.icoFacebook:hover {  
  background-color: #3B5998;  
}  
.social-network a.icoLinkedin:hover {  
  background-color: #007bb7;  
}  
.social-network a.icoFacebook:hover i  
{  
  color: #fff;  
}  
.social-network a.icoLinkedin:hover i {  
  color: #fff;  
}  
.social-network a.socialIcon:hover {  
  color: #44BCDD;  
}  
.socialHoverClass {  
  color: #44BCDD;  
}  
.social-circle li a {  
  display: inline-block;  
  position: relative;  
  margin: 0 auto 0 auto;  
  -moz-border-radius: 50%;  
  -webkit-border-radius: 50%;  
  border-radius: 50%;  
  text-align: center;  
  width: 30px;  
  height: 30px;  
  font-size: 15px;  
}  
.social-circle li i {  
  margin: 0;  
  line-height: 30px;  
  text-align: center;  
}  
.social-circle li a:hover i  
{  
  -moz-transform: rotate(360deg);  
  -webkit-transform: rotate(360deg);  
  -ms--transform: rotate(360deg);  
  transform: rotate(360deg);  
  -webkit-transition: all 0.2s;  
  -moz-transition: all 0.2s;  
  -o-transition: all 0.2s;  
  -ms-transition: all 0.2s;  
  transition: all 0.2s;  
}  
.triggeredHover {  
  -moz-transform: rotate(360deg);  
  -webkit-transform: rotate(360deg);  
  -ms--transform: rotate(360deg);  
  transform: rotate(360deg);  
  -webkit-transition: all 0.2s;  
  -moz-transition: all 0.2s;  
  -o-transition: all 0.2s;  
  -ms-transition: all 0.2s;  
  transition: all 0.2s;  
}  
.social-circle i {  
  color: #595959;  
  -webkit-transition: all 0.8s;  
  -moz-transition: all 0.8s;  
  -o-transition: all 0.8s;  
  -ms-transition: all 0.8s;  
  transition: all 0.8s;  
}  
.social-network a {  
  background-color: #F9F9F9;  
}  
..social-network a:hover {  
background: #ff304d;  
}  
</style>
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
<h2>  
Footer Theme Hypnos Example  
</h2>  
<footer class="mainfooter" role="contentinfo">  
  <div class="footer-middle">  
  <div class="container">  
    <div class="row">  
      <div class="col-md-3 col-sm-6">  
        <div class="footer-pad">  
          <h4> Nos Hôtels :</h4>  
          <ul class="list-unstyled">  
            <li> <a href="santorin.php"> Bali - Indonésie</a></li>  
            <li> <a href="maldive.php"> Les Maldives</a></li>  
            <li> <a href="marrakech.php"> Marrakech - Maroc</a></li>  
            <li> <a href="paris.php"> Paris - France</a></li>  
            <li> <a href="salzbourg.php"> Salzbourg - Autriche</a></li>  
            <li> <a href="santorin.php"> Santorin - Grêce</a></li>
            <li> <a href="venise.php"> Venise - Italie</a></li>  
          </ul>  
        </div>  
      </div>  
      <div class="col-md-3 col-sm-6">  
        <div class="footer-pad">  
          <h4> Informations :</h4>  
          <ul class="list-unstyled">  
            <li><a href="#">A propos de Nous ...</a> </li>  
            <li><a href="#">Réservation </a> </li>  
            <li><a href="#">Réclamation </a></li>  
            <li><a href="#">Contact</a></li>  
            <li><a href="#">FAQs</a></li>  
            <li><a href="#">Recrutement</a></li> 
            <li><a href="#">Tarifs</a></li> 
          </ul>  
        </div>  
      </div>  
      <div class="col-md-3 col-sm-6">  
        <div class="footer-pad">  
          <h4> Hyonos - World Hôtel </h4>  
          <ul class="list-unstyled">  
            <li> <a href="mailto:chouphaidana@outlook.fr"> Bali </a> </li>  
            <li> <a href="mailto:chouphaidana@outlook.fr"> Maldives </a> </li>   
            <li> <a href="mailto:chouphaidana@outlook.fr"> Marrakech</a> </li>  
            <li> <a href="mailto:chouphaidana@outlook.fr"> Paris </a> </li>  
            <li> <a href="mailto:chouphaidana@outlook.fr"> Salzbourg </a> </li>  
            <li> <a href="mailto:chouphaidana@outlook.fr"> Santorin</a> </li>
            <li> <a href="mailto:chouphaidana@outlook.fr"> Venise</a> </li> 
          </ul>  
        </div>  
      </div>  
        <div class="col-md-3">  
            <h4> Suivez Nous </h4>  
            <ul class="social-network social-circle">  
             <li> <a href="#" class="icoFacebook" title="Facebook"> <i class="fa fa-facebook"> </i> </a> </li>  
             <li> <a href="#" class="icoLinkedin" title="Linkedin"> <i class="fa fa-linkedin"> </i> </a> </li>  
    <li> <a href="#"> <i class="fa fa-youtube" aria-hidden="true"> </i> </a> </li>  
            </ul>               
    </div>  
    </div>  
    <div class="row">  
    <div class="col-md-12 copy">  
    <p class="text-center"> © Copyright 2022 - Hyonos Compagnie.  All rights reserved. </p>  
    </div>  
    </div>  
  </div>  
  </div>  
</footer>  
  </body>  
</html>      

