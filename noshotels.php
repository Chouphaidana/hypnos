<?php
$mainTitle = "Hypnos - Nos Hôtels";
require_once "header.php";
$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);
if($lang = 'fr'){
    require_once "lang/lang-fr.php";
} elseif ($lang='en') {
    require_once "lang/lang-en.php";
} elseif ($lang='es')
{
  require_once "lang/lang-es.php";
} elseif($lang='de'){
  require_once "lang/lang-de.php";
} else{
  require_once "lang/lang-fr.php";
};

$expire = 365*24*3600;
setcookie("lang", $lang, time()+$expire);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="style.css">
    <title><?php echo $mainTitle ?></title>
</head>
<body>

  <!-- Bar Covid -->
  <div class="alert alert-danger" role="alert">
    <a href="covid.php"><h6><?php echo TXT_INFO_COVID ?></h6></a>
</div>

  <!-- Carousel -->

  <!-- Carousel -->

<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel" data-interval="2500">
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
    <div class="d-flex justify-content-center">
      <img src="media/image/Hotel Bali/Bali - 2975787_1920.jpg" style="width:80%; height: 550px; margin:40px;" class="d-block w-100" alt="Bali">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo TXT_NAME_HOTEL_1 ?></h5>
    </div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="d-flex justify-content-center">
      <img src="media/image/Hotel Maldive/Maldive - beach-g37aa4ab9e_1920.jpg" style="width:100%;height: 550px; margin:40px;" class="d-block w-100" alt="Les Maldives">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo TXT_NAME_HOTEL_2 ?></h5>
      </div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="d-flex justify-content-center">
      <img src="media/image/Hotel Maroc/Maroc - morocco-2349647_1920.jpg" style="width:100%;height: 550px; margin:40px;"class="d-block w-100" alt="Marrakech">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo TXT_NAME_HOTEL_3 ?></h5>
      </div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="d-flex justify-content-center">
      <img src="media/image/Hotel Paris/Paris - 213803_1920.jpg" style="width:100%;height: 550px; margin:40px;"class="d-block w-100" alt="Paris">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo TXT_NAME_HOTEL_4 ?></h5>
      </div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="d-flex justify-content-center">
      <img src="media/image/Hotel Salzbourg/Salzbourg - spa-g19ea96341_1920.jpg" style="width:100%;height: 550px; margin:40px;"class="d-block w-100" alt="Salzbbourg">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo TXT_NAME_HOTEL_5 ?></h5>
      </div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="d-flex justify-content-center">
      <img src="media/image/Hotel Santorin/Santorin - 4825173_1920.jpg" style="width:100%;height: 550px; margin:40px;"class="d-block w-100" alt="Santorin">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo TXT_NAME_HOTEL_6 ?></h5>
      </div>
    </div>
    </div>
    <div class="carousel-item">
    <div class="d-flex justify-content-center">
      <img src="media/image/Hotel Venise/Venise - canal-g92e379e13_1920.jpg" style="width:100%;height: 550px; margin:40px;"class="d-block w-100" alt="Venise">
      <div class="carousel-caption d-none d-md-block">
        <h5><?php echo TXT_NAME_HOTEL_7 ?></h5>
      </div>
    </div>
  </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden"><?php echo TXT_UTILITIE_1 ?></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden"><?php echo TXT_UTILITIE_2 ?></span>
  </button>
</div>

<!-- Navigation -->

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color:#dc143c">
        <a class="navbar-brand" href="index.php">
        <img src="media/image/hypnos Badge.jpg" style="width: 100px;height: 100px;" alt="Hypnos - World Hôtel">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link active" href="noshotels.php">
                      <?php echo TXT_NAV_BUTTON_1 ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="reservation.php">
                    <?php echo TXT_NAV_BUTTON_2 ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="aboutUs.php">
                    <?php echo TXT_NAV_BUTTON_3 ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">
                    <?php echo TXT_NAV_BUTTON_4 ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="jobs.php">
                    <?php echo TXT_NAV_BUTTON_5 ?>
                    </a>
                </li>
            </ul>
        </div>
    </nav> 
    <br>
    <br>
    
  <div class="container">
      <div class="row">
        <img src="media/image/digital-art-gab9ac4ec1_1920.png" height="500px" width="100%" alt="Plage Romantique">
      <h1><?php echo TXT_TEXT_DESCRIPTION_1 ?></h1>
      <br>
      <br>
      <div class="textHappy">
              <p><?php echo TXT_TEXT_DESCRIPTION_2 ?></p>
              <p><?php echo TXT_TEXT_DESCRIPTION_3 ?></p>
      </div>
      <form>
  <div class="form-row align-items-center">
    <div class="col-auto my-1">
      <label class="mr-sm-2" for="inlineFormCustomSelect"><?php echo TXT_FORM_1 ?></label>
      <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
        <option selected><?php echo TXT_FORM_2 ?></option>
        <option value="1"><a href="bali.php"><?php echo TXT_FORM_3 ?></a></option>
        <option value="2"><a href="maldive.php"><?php echo TXT_FORM_4 ?></a></option>
        <option value="3"><a href="marrakech.php"><?php echo TXT_FORM_5 ?></a></option>
        <option value="3"><a href="paris.php"><?php echo TXT_FORM_6 ?></a></option>
        <option value="3"><a href="salzbourg.php"><?php echo TXT_FORM_7 ?></a></option>
        <option value="3"><a href="santorin.php"><?php echo TXT_FORM_8 ?></a></option>
        <option value="3"><a href="venise.php"><?php echo TXT_FORM_9 ?></a></option>
      </select>
    </div>
    <div class="col-auto my-1">
      <button type="submit" class="btn btn-primary"><option value="3"><?php echo TXT_UTILITIE_12 ?></option></button>
    </div>
  </div>
</form>
              </div>


              <!-- Footer -->
              <footer class="mainfooter" role="contentinfo">
                  <div class="footer-middle">
                      <div class="container">
                          <div class="row">
                              <div class="col-md-3 col-sm-6">
                                  <div class="footer-pad">
                                      <h4><?php echo TXT_FOOTER_DESCRIPTION ?></h4>
                                      <ul class="list-unstyled">
                                          <li> <a href="santorin.php"><?php echo TXT_FOOTER_COUNTRY_1 ?></a></li>
                                          <li> <a href="maldive.php"><?php echo TXT_FOOTER_COUNTRY_2 ?></a></li>
                                          <li> <a href="marrakech.php"><?php echo TXT_FOOTER_COUNTRY_3 ?></a></li>
                                          <li> <a href="paris.php"><?php echo TXT_FOOTER_COUNTRY_4 ?></a></li>
                                          <li> <a href="salzbourg.php"><?php echo TXT_FOOTER_COUNTRY_5 ?></a></li>
                                          <li> <a href="santorin.php"><?php echo TXT_FOOTER_COUNTRY_6 ?></a></li>
                                          <li> <a href="venise.php"><?php echo TXT_FOOTER_COUNTRY_7 ?></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="footer-pad">
                                      <h4><?php echo TXT_UTILITIE_3 ?></h4>
                                      <ul class="list-unstyled">
                                          <li><a href="aboutUs.php"><?php echo TXT_UTILITIE_4 ?></a> </li>
                                          <li><a href="reservation.php"><?php echo TXT_UTILITIE_5 ?></a> </li>
                                          <li><a href="claim.php"><?php echo TXT_UTILITIE_6 ?></a></li>
                                          <li><a href="contact.php"><?php echo TXT_UTILITIE_7 ?></a></li>
                                          <li><a href="faqs.php"><?php echo TXT_UTILITIE_8 ?></a></li>
                                          <li><a href="jobs.php"><?php echo TXT_UTILITIE_9 ?></a></li>
                                          <li><a href="price.php"><?php echo TXT_UTILITIE_10 ?></a></li>
                                      </ul>
                                  </div>
                              </div>
                              <div class="col-md-3 col-sm-6">
                                  <div class="footer-pad">
                                      <h4> Hyonos - World Hôtel </h4>
                                      <ul class="list-unstyled">  
            <li> <a href="mailto:contact@hypnos.chouphaidana.org"><?php echo TXT_NAME_HOTEL_MAIL_1 ?></a> </li>  
            <li> <a href="mailto:contact@hypnos.chouphaidana.org"><?php echo TXT_NAME_HOTEL_MAIL_2 ?></a> </li>   
            <li> <a href="mailto:contact@hypnos.chouphaidana.org"><?php echo TXT_NAME_HOTEL_MAIL_3 ?></a> </li>  
            <li> <a href="mailto:contact@hypnos.chouphaidana.org"><?php echo TXT_NAME_HOTEL_MAIL_4 ?></a> </li>  
            <li> <a href="mailto:contact@hypnos.chouphaidana.org"><?php echo TXT_NAME_HOTEL_MAIL_5 ?></a> </li>  
            <li> <a href="mailto:contact@hypnos.chouphaidana.org"><?php echo TXT_NAME_HOTEL_MAIL_6 ?></a> </li>
            <li> <a href="mailto:contact@hypnos.chouphaidana.org"><?php echo TXT_NAME_HOTEL_MAIL_7 ?></a> </li> 
          </ul>  
                                  </div>
                              </div>
                              <div class="col-md-3">
                                  <h4><?php echo TXT_UTILITIE_11 ?></h4>
                                  <ul class="social-network social-circle">  
            <li> <a href="https://www.facebook.com/" class="icoFacebook" title="Facebook"> <em class="fa fa-facebook"> </em> </a> </li>    
            <li> <a href="https://fr.linkedin.com/" class="icoLinkedin" title="Linkedin"> <em class="fa fa-linkedin"> </em> </a> </li>   
              <li> <a href="https://www.youtube.com/" class="icoYoutube" title="Youtube"> <em class="fa fa-youtube"> </em></a></li>  
            </ul>
                              </div>
                          </div>
                          <div class="row">
                              <div class="col-md-12 copy">
                                  <p class="text-center"> © Copyright 2020 - Hypnos Compagnie.  All rights reserved. </p>
                              </div>
                          </div>
                      </div>
                  </div>
              </footer>
              <!-- Footer -->







<!-- Script -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>