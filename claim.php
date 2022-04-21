<?php
$mainTitle = "Hypnos - Claim";
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
        <section>    
            <form method="post" action="claimconfirm.php">
                <div id="reclamation">
                    <fieldset>
                        <legend  class="d-block p-2 bg-danger text-white"><?php echo TXT_CLAIM_1 ?></legend>
                            <h2 class="center">
                                <?php echo TXT_CLAIM_2 ?><br><br>
</h2>        
                    </fieldset>  
                </div>
                <div id="coordonnees">
                    <fieldset>
                        <legend  class="d-block p-2 bg-danger text-white"><?php echo TXT_RESER_4 ?></legend>
                            <p>
                                <label for="firstname"><?php echo TXT_RESER_FIRSTNAME ?></label> <br>
                                <input type="text" name="firstname" id="firstname" placeholder="Peter" size="150" required />
                            </p>
                            <p>
                                <label for="lastname"><?php echo TXT_RESER_LASTNAME ?></label> <br>
                                <input type="text" name="lastname" id="lastname"placeholder="Pan"  size="150" required />
                            </p>
                            <p>
                                <label for="adress"><?php echo TXT_RESER_ADRESS ?></label> <br>
                                <textarea name="adress" id="adress" placeholder="Montréal" rows="2" cols="150" required ></textarea>
                            </p>
                            <p>
                                <label for="postcode"><?php echo TXT_RESER_POSTCODE ?></label> <br>
                                <input type="text" name="postcode" id="postcode" placeholder="H9X 0B3" size="150" required />
                            </p>
                            <p>
                                <label for="town"><?php echo TXT_RESER_TOWN ?></label> <br>
                                <input type="text" name="town" id="town" placeholder="Canada" size="150" required />
                            </p>
                            <p>
                                <label for="email"><?php echo TXT_RESER_EMAIL ?></label> <br>
                                <input type="email" name="email" id="email" placeholder="contact@hypnos.com" size="150" required />
                            </p>
                            <p>
                                <label for="email"><?php echo TXT_RESER_CONFIRMEDEMAIL ?></label> <br>
                                <input type="email" name="email" id="email" placeholder="contact@hypnos.com" size="150" required />
                            </p>
                            <p>
                                <label for="phone"><?php echo TXT_RESER_PHONE ?></label> <br>
                                <input type="phone" name="phone" id="phone" placeholder="01 02 03 04 05" size="150" required />
                            </p>
</legend>
                    </fieldset>
                
                <p>
                                <?php echo TXT_CLAIM_3 ?><br>
                                <input type="radio" name="claim" value="hotel" id="hotel" /> <label for="hotel"><?php echo TXT_CLAIM_4 ?></label><br>
                                <input type="radio" name="claim" value="worker" id="worker" /> <label for="worker"><?php echo TXT_CLAIM_5 ?></label><br>
                                <input type="radio" name="claim" value="price" id="price" /> <label for="price"><?php echo TXT_CLAIM_6 ?></label><br>
                                <input type="radio" name="claim" value="extra" id="extra" /> <label for="extra"><?php echo TXT_CLAIM_7 ?></label><br>
                                <input type="radio" name="claim" value="room" id="room" /> <label for="room"><?php echo TXT_CLAIM_8 ?></label><br>
                                <input type="radio" name="claim" value="restaurant" id="restaurant" /> <label for="restaurant"><?php echo TXT_CLAIM_9 ?></label><br>
                                <input type="radio" name="claim" value="other" id="other" /> <label for="other"><?php echo TXT_CLAIM_10 ?></label><br>
                            </p>
                            <div class="md-form">
    <textarea type="text" id="message" name="message" placeholder="Reclamation , Beschwerde , Complaint , Queja"  size="150" rows="5" class="form-control md-textarea"></textarea>
    <label for="message">
        <?php echo TXT_CLAIM_AREA ?>
    </label>
</div>
                <input type="submit" value="<?php echo TXT_CLAIM_SEND ?>" class="btn btn-danger"/>
                </div>
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
            <li><a href="#"><?php echo TXT_UTILITIE_9 ?></a></li> 
            <li><a href="price.php"><?php echo TXT_UTILITIE_10 ?></a></li> 
          </ul>  
        </div>  
      </div>  
      <div class="col-md-3 col-sm-6">  
        <div class="footer-pad">  
          <h4><?php echo TXT_NAME_HOTEL ?></h4>  
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
    <p class="text-center"> © Copyright 2022 - Hyonos Compagnie.  All rights reserved. </p>  
    </div>  
    </div>  
  </div>  
  </div>  
</footer>

<!-- Script -->

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    </body>
</html>