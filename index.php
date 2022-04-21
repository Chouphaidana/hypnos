<?php
$mainTitle = "Hypnos";
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
setcookie("lang", $lang, time()+$expire,"user");
if(isset($_COOKIE["user"])){
  echo "Bonjour ".$_COOKIE["user"];
};
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

<!-- Menu Mavigation  : -->

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
                    <a class="nav-link" href="noshotels.php">
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
  <div class="container">
      <div class="row">
          <div class="col">
          <div class="center">
              <h3>
        <?php 
        echo TXT_TITRE_BIENVENUE;
        ?>
              </h3>
      <br>
<p><strong>
  <?php 
  echo TXT_TEXT_HAPPY_1;
?>
</strong></p>
<p><strong>
<?php
echo TXT_TEXT_HAPPY_2
?>
</strong></p>
</div>
  </div>
  </div>

  <!-- Video Hyonos -->

<div class="row">
<div class="video">
    <video id="Hyonos Video " controls preload="metadata" width="100%" autoplay>
        <source src="media/video/Hypnos.mp4"
                type="video/mp4"> 
                <track label="English" kind="captions" srclang="en" src="resources/myvideo-en.vtt" default>
                <track label="Deutsch" kind="captions" srclang="de" src="resources/myvideo-de.vtt">
                <track label="Español" kind="captions" srclang="es" src="resources/myvideo-es.vtt">
    </video>
</div>
  </div>
  </div>
  <br>
  <br>

  <!-- Hyonos -->

  <div class="container">
    <div class="row">
      <div class="col">
      <div class="barStop">
        <h2>
            <?php
            echo TXT_NAME_HOTEL;
            ?>
        </h2>
        </div>
        </div>
        <br>
        <div class="center">
        <p><strong>
          <?php
          echo TXT_HOTEL_DESCRIPTION;
          ?>
          </strong></p>
          <p><strong>
            <?php echo TXT_HOTEL_DESCRIPTION_SUITE;
          ?>
          <br>
            <?php echo TXT_HOTEL_DESCRIPTION_ROOM_1 ?><br>
            <?php echo TXT_HOTEL_DESCRIPTION_ROOM_2 ?><br>
            <?php echo TXT_HOTEL_DESCRIPTION_ROOM_3 ?><br>
            <?php echo TXT_HOTEL_DESCRIPTION_ROOM_4 ?><br>
            <?php echo TXT_HOTEL_DESCRIPTION_ROOM_5 ?><br>
            <?php echo TXT_HOTEL_DESCRIPTION_ROOM_6 ?>
            </strong></p>
        </div>
</div>
</div>
<br>

<!-- Menu Réservation -->

<div class="container">
  <div class="row">
    <div class="col">
<section>    
            <form method="post" action="reservationconfirm.php">
                <div id="reservation">
                    <fieldset>
                        <legend  class="d-block p-2 bg-danger text-white"><?php echo TXT_RESER_1 ?></legend>
                            <p>
                                <?php echo TXT_RESER_2 ?><br><br>
                                <input type="radio" name="booking" value="Chambre Classique" id="Chambre Classique" /> <label for="Chambre Classique"><?php echo TXT_RESER_CHC ?></label><br>
                                <input type="radio" name="booking" value="Chambre Supérieur" id="Chambre Supérieur" /> <label for="Chambre Supérieur"><?php echo TXT_RESER_CHS ?></label><br>
                                <input type="radio" name="booking" value="Chambre Luxe" id="Chambre Luxe" /> <label for="Chambre Luxe"><?php echo TXT_RESER_CHL ?></label><br>
                                <input type="radio" name="booking" value="Appartement" id="Appartement" /> <label for="Appartement"><?php echo TXT_RESER_APPT ?></label><br>
                                <input type="radio" name="booking" value="Chambre sur Piloti" id="Chambre sur Piloti" /> <label for="Chambre sur Piloti"><?php echo TXT_RESER_CHPILOTI ?></label><br>
                                <input type="radio" name="booking" value="Chambre Vue sur la Tour Eiffel" id="Chambre Vue sur la Tour Eiffel" /> <label for="Chambre Vue sur la Tour Eiffel"><?php echo TXT_RESER_CHVTE ?></label><br>
                                <input type="radio" name="booking" value="Appartement Vue sur la Tour Eiffel" id="Appartement Vue sur la Tour Eiffel" /> <label for="Appartement Vue sur la Tour Eiffel"><?php echo TXT_RESER_APPTVTE ?></label><br>
                                <input type="radio" name="booking" value="Chambre Vue sur le Canal" id="Chambre Vue sur le Canal" /> <label for="Chambre Vue sur le Canal"><?php echo TXT_RESER_CHLVC ?></label><br>
                                <input type="radio" name="booking" value="Appartement Vue sur le Canal" id="Appartement Vue sur le Canal" /> <label for="Appartement Vue sur le Canal"><?php echo TXT_RESER_APPTVC ?></label>
                            </p>
                            <br>
                            <p>
                                <?php echo TXT_RESER_3 ?><br>
                                <input type="radio" name="country" value="bali" id="bali" /> <label for="bali"><?php echo TXT_RESER_COUNTRY_1 ?></label><br>
                                <input type="radio" name="country" value="maldives" id="maldives" /> <label for="maldives"><?php echo TXT_RESER_COUNTRY_2 ?></label><br>
                                <input type="radio" name="country" value="marrakech" id="marrakech" /> <label for="marrakech"><?php echo TXT_RESER_COUNTRY_3 ?></label><br>
                                <input type="radio" name="country" value="paris" id="paris" /> <label for="paris"><?php echo TXT_RESER_COUNTRY_4 ?></label><br>
                                <input type="radio" name="country" value="salzbourg" id="salzbourg" /> <label for="salzbourg"><?php echo TXT_RESER_COUNTRY_5 ?></label><br>
                                <input type="radio" name="country" value="santorin" id="santorin" /> <label for="santorin"><?php echo TXT_RESER_COUNTRY_6 ?></label><br>
                                <input type="radio" name="country" value="venise" id="venise" /> <label for="venise"><?php echo TXT_RESER_COUNTRY_7 ?></label>
                            </p>
                            <p>
                                <label  class="d-block p-2" for="booking_day">Jour d'arrivée :</label>
                                <select name="day" id="day">
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                </select>
                                <select name="month" id="month">
                                    <option value="01"><?php echo TXT_RESER_MONTH_1 ?></option>
                                    <option value="02"><?php echo TXT_RESER_MONTH_2 ?></option>
                                    <option value="03"><?php echo TXT_RESER_MONTH_3 ?></option>
                                    <option value="04"><?php echo TXT_RESER_MONTH_4 ?></option>
                                    <option value="05"><?php echo TXT_RESER_MONTH_5 ?></option>
                                    <option value="06"><?php echo TXT_RESER_MONTH_6 ?></option>
                                    <option value="07"><?php echo TXT_RESER_MONTH_7 ?></option>
                                    <option value="08"><?php echo TXT_RESER_MONTH_8 ?></option>
                                    <option value="09"><?php echo TXT_RESER_MONTH_9 ?></option>
                                    <option value="10"><?php echo TXT_RESER_MONTH_10 ?></option>
                                    <option value="11"><?php echo TXT_RESER_MONTH_11 ?></option>
                                    <option value="12"><?php echo TXT_RESER_MONTH_12 ?></option>
                                </select>
                                <select name="year" id="year">
                                    <option value="2022">2022</option>
                                    <option value="2023">2023</option>
                                    <option value="2024">2024</option>
                                </select>
                            </p>         
                    </fieldset>  
                </div>
                </div>
                </div>
                </div>

<div class="container">
  <div class="row">
  <div class="col">
              <section>
                <div id="coordonnees">
                    <fieldset>
                        <legend  class="d-block p-2 bg-danger text-white"><?php echo TXT_RESER_4 ?></legend>
                            <p>
                                <label for="firstname"><?php echo TXT_RESER_FIRSTNAME ?></label> <br>
                                <input type="text" class="form-control" name="firstname" id="firstname" placeholder="Peter" required />
                            </p>
                            <p>
                                <label for="lastname"><?php echo TXT_RESER_LASTNAME ?></label> <br>
                                <input type="text" class="form-control" name="lastname" id="lastname"placeholder="Pan"  size="auto" required />
                            </p>
                            <p>
                                <label for="adress"><?php echo TXT_RESER_ADRESS ?></label> <br>
                                <textarea class="form-control" name="adress" id="adress" placeholder="Montréal" rows="2" cols="auto" required ></textarea>
                            </p>
                            <p>
                                <label for="postcode"><?php echo TXT_RESER_POSTCODE ?></label> <br>
                                <input type="text" class="form-control" name="postcode" id="postcode" placeholder="H9X 0B3" size="auto" required />
                            </p>
                            <p>
                                <label for="town"><?php echo TXT_RESER_TOWN ?></label> <br>
                                <input type="text" class="form-control" name="town" id="town" placeholder="Canada" size="auto" required />
                            </p>
                            <p>
                                <label for="email"><?php echo TXT_RESER_EMAIL ?></label> <br>
                                <input type="email" class="form-control" name="email" id="email" placeholder="contact@hyonos.com" size="auto" required />
                            </p>
                            <p>
                                <label for="email"><?php echo TXT_RESER_CONFIRMEDEMAIL ?></label> <br>
                                <input type="email" class="form-control" name="email" id="email" placeholder="contact@hyonos.com" size="auto" required />
                            </p>
                            <p>
                                <label for="phone"><?php echo TXT_RESER_PHONE ?></label> <br>
                                <input type="phone" class="form-control" name="phone" id="phone" placeholder="01 02 03 04 05" size="auto" required />
                            </p>
                    </fieldset>
                </div>
                <input type="submit" value="<?php echo TXT_RESER_CONFIRMED ?>" class="btn btn-danger"/>
            </form>      
        </section>
                    </div>   
                </div>
            </div>
  <!-- Footer -->
<br>
  <footer class="mainfooter" role="contentinfo">  
  <div class="footer-middle">  
  <div class="container">  
    <div class="row">  
      <div class="col-md-3 col-sm-6">  
        <div class="footer-pad">  
          <h4>
            <?php echo TXT_FOOTER_DESCRIPTION ?>
          </h4>  
          <ul class="list-unstyled">  
            <li> <a href="bali.php"><?php echo TXT_FOOTER_COUNTRY_1 ?></a></li>  
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
          <h4><?php echo TXT_NAME_HOTEL_FOOTER ?></h4>  
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

<!-- Script -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>