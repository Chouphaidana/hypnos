<?php
$mainTitle = "Hypnos - Contact";
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
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $mainTitle ?></title>
</head>
<body>
      <!-- Bar Covid -->

  <div class="alert alert-danger" role="alert">
    <a href="covid.php"><h6><?php echo TXT_INFO_COVID ?></h6></a>
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
                    <a class="nav-link active" href="contact.php">
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

    <!-- Photos -->

    
    <div class="container">
  <div class="row">
    <div class="col-md-4">
      <div class="thumbnail">
          <img src="media/image/Hotel Bali/Bali - 2975787_1920.jpg" alt="beach" style="width:100%">
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
          <img src="media/image/Hotel Paris/Paris - eiffel-tower-3349075_1920.jpg" alt="flower" style="width:100%">
      </div>
    </div>
    <div class="col-md-4">
      <div class="thumbnail">
          <img src="media/image/Hotel Venise/Venise - canal-g92e379e13_1920.jpg" alt="flowers" style="width:100%">
      </div>
    </div>
  </div>
</div>
<div class="row">
<h1 class="centerTitle">
        <?php echo TXT_PAGES_CONTACT ?>
    </h1>
  </div>


      <!-- Page Contact -->

<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <ul class="list-unstyled mb-0">
                <li>
                    <p>
                        <?php echo TXT_PAGES_CONTACT_CHOIX_INFO_1 ?><br>
                    </p>
                </li>

                <li>
                    <p><?php echo TXT_PAGES_CONTACT_CHOIX_INFO_2 ?><br>
                </p>
                </li>

                <li>
                    <p>
                    <?php echo TXT_PAGES_CONTACT_CHOIX_INFO_3 ?><br>
                    </p>
                </li>
                <li>
                    <p>
                        <a href="mailto:contact@hyonos.chouphaidana.org">
                    <?php echo TXT_PAGES_CONTACT_CHOIX_INFO_4 ?><br>
                    </a>
                    </p>
                </li>
            </ul>
        </div>
    </div>
</div>
</div>
</div>
</div>
<br>
<br>

<!--Section: Identification -->
<div class="container">
<form>
    <h2 class="text-center w-responsive mx-auto mb-5">
        <?php echo  TXT_PAGES_INDENTIFICATION ?>
    </h2>
  <div class="form-group">
  <label for="exampleInputEmail1">
        <?php echo TXT_PAGES_CONTACT_MAIL
        ?>
    </label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">
        <?php echo TXT_PAGES_CONTACT_NEVER
        ?>
        </small>
  </div>
  <br>
  <div class="form-group">
  <label for="exampleInputPassword1">
    <?php echo TXT_PAGES_CONTACT_PASSWORD
        ?>
    </label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">
    <?php echo TXT_PAGES_CONTACT_STANDBY
        ?>
    </label>
  </div>
  <button type="submit" class="btn btn-danger">
  <?php echo TXT_PAGES_CONTACT_CHOIX_INFO_ID
        ?>
  </button>
</form>
</div>
<!--Section: Identification -->

<form method="post" action="mail.php">
    <!--Section heading-->
    <h2 class="text-center w-responsive mx-auto mb-5">
        <?php echo  TXT_PAGES_CONTACT ?>
    </h2>
    <!--Section description-->
    <p class="text-center w-responsive mx-auto mb-5">
        <a href="faqs.php">
            <?php echo TXT_PAGES_CONTACT_Q1; ?>
</a>
    <br>
    <?php
    echo TXT_PAGES_CONTACT_Q2;
    ?>
    </p>
<div class="container">
    <div class="row">

        <!--Grid column-->

        <div class="col-md-9 mb-md-0 mb-5">
            <form id="contact-form" name="contact-form" action="mail.php" method="POST">

                    <!--Formulaire First Name-->

                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="name" class="name">
                                <?php echo TXT_PAGES_CONTACT_FIRSTNAME ?>
                            </label>
                            <input type="text" id="firstname" name="name" placeholder="Peter" class="form-control">
                        </div>
                    </div>

                    <!--Formulaire Last Name-->

                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="name" class="name">
                                <?php echo TXT_PAGES_CONTACT_LASTNAME ?>
                            </label>
                            <input type="text" id="lastname" name="name" placeholder="Pan"class="form-control">
                        </div>
                    </div>

                    <!--Formulaire Mail -->

                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="email" class="Mail">
                        <?php echo TXT_PAGES_CONTACT_MAIL ?>
                            </label>
                            <input type="text" id="email" name="email" placeholder="contact@hyonos.fr"class="form-control">
                        </div>
                    </div>

                    <!--Formulaire Mail Confirmed -->

                    <div class="col-md-6">
                        <div class="md-form mb-0">
                        <label for="email" class="Mail">
                                <?php echo TXT_PAGES_CONTACT_MAILCOMFIRMED ?>
                            </label>
                            <input type="text" id="confirmedemail" name="email" placeholder="contact@hyonos.fr"class="form-control">
                        </div>
                    </div>
                </div>

                <!--Grid Choix Motif -->

                    <div class="row">
                    <div class="col-md-4">
                        <div class="md-form mb-0">
                        <select id="contactChoise"> 
        <option><?php echo TXT_PAGES_CONTACT_CHOIX_N ?></option> 
        <option><?php echo TXT_PAGES_CONTACT_CHOIX_1;  $objet ="Votre Réservation" ?> </option>
        <option><?php echo TXT_PAGES_CONTACT_CHOIX_2;  $objet ="Besoin de Plus d'information"  ?></option> 
        <option><?php echo TXT_PAGES_CONTACT_CHOIX_3;  $objet ="Annulation de Commande"  ?> "></option> 
        <option><?php echo TXT_PAGES_CONTACT_CHOIX_4;  $objet ="Modification de Reservation"  ?> "></option> 
        <option><?php echo TXT_PAGES_CONTACT_CHOIX_5;  $objet ="Réclamation"  ?> "></option>
        <option><?php echo TXT_PAGES_CONTACT_CHOIX_COVID;  $objet ="Protocole Covid 19"  ?> "></option>
        <option><?php echo TXT_PAGES_CONTACT_CHOIX_6;  $objet ="Autre Motif"  ?> "></option>
    </select>   
                    </div>
                </div>
<div class="col-md-4">
    </div>
                <!--Grid row-->

                    <div class="col-md-4">
                        <div class="md-form mb-0">
                        <select id="destination">
        <option><?php echo TXT_PAGES_CONTACT_CHOIX_NB ?></option> 
        <option label="<?php echo TXT_PAGES_CONTACT_CHOIX_1B ?> "></option>
        <option label="<?php echo TXT_PAGES_CONTACT_CHOIX_2B ?> "></option> 
        <option label="<?php echo TXT_PAGES_CONTACT_CHOIX_3B ?> "></option> 
        <option label="<?php echo TXT_PAGES_CONTACT_CHOIX_4B ?> "></option> 
        <option label="<?php echo TXT_PAGES_CONTACT_CHOIX_5B ?> "></option>
        <option label="<?php echo TXT_PAGES_CONTACT_CHOIX_6B ?> "></option>
        <option label="<?php echo TXT_PAGES_CONTACT_CHOIX_7B ?> "></option>
    </select> 
                        </div>
                        </div>
                        </div>
                        <br>
                        <div class="col-md-12">
<div class="md-form">
<label for="message">
        <?php echo TXT_PAGES_CONTACT_CHOIX_MESSAGE ?>
    </label>
    <textarea type="text" id="message" name="message" placeholder="Bienvenue , Willkommen , Welcome , Bienvenido"rows="5" class="form-control md-textarea"></textarea>
</div>

</div>
<div class="row">
            <div class="text-md-end text-md-left">
                <a class="btn btn-danger" onclick="document.getElementById('contact-form').submit();">
            <?php echo TXT_PAGES_CONTACT_CHOIX_INFO_SEND ?></a>
            </div>

        <div class="text-md-start text-md-left">
                <a class="btn btn-danger" onclick="document.getElementById('contact-form').submit();">
            <?php echo TXT_PAGES_CONTACT_RESET ?></a>
            </div>
        </div>
        </div>
        </div>
        </div>
        <!--Grid column-->



<!-- Footer -->

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
            <li> <a href="https://www.facebook.com/" class="icoFacebook" title="Facebook"> <em class="fa fa-facebook"> </em></a></li>    
            <li> <a href="https://fr.linkedin.com/" class="icoLinkedin" title="Linkedin"> <em class="fa fa-linkedin"> </em></a></li>   
              <li> <a href="https://www.youtube.com/" class="icoYoutube" title="Youtube"> <em class="fa fa-youtube"> </em></a></li>  
            </ul>           
    </div>  
    </div>
    <div class="container">
    <div class="row">  
    <div class="col-md-12 text-center">  
    <p class="text-center"> © Copyright 2020 - Hypnos Compagnie.  All rights reserved.</p>  
    </div>  
    </div>  
  </div>  
  </div>  
</footer>

<!-- Script -->

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"> </script>  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"> </script>  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"> </script>  
  <script src="data/script.js"></script>
</body>
</html>