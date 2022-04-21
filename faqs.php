<?php
$mainTitle = "Hypnos - FAQs";
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

<!-- FAQS -->

<div class="accordion" id="accordionPanelsStayOpenExample">
  <div class="accordion-item">
    <h2 class="accordion-header" id="panelsStayOpen-headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        <?php echo TXT_FAQS_1 ?>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <strong><?php echo TXT_FAQS_1A ?></strong> <?php echo TXT_FAQS_1B ?><a href="reservation.php"><?php echo TXT_FAQS_1L ?> </a>
      </div>
    </div>
  </div>
  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        <?php echo TXT_FAQS_2 ?>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <strong><?php echo TXT_FAQS_2A ?></strong> <?php echo TXT_FAQS_2B ?><a href="claim.php"><?php echo TXT_FAQS_2L ?> </a>
      </div>
    </div>
  </div>
  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        <?php echo TXT_FAQS_3 ?>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <strong><?php echo TXT_FAQS_3A ?></strong> <?php echo TXT_FAQS_3B ?><a href="price.php"><?php echo TXT_FAQS_3L ?> </a>
      </div>
    </div>
  </div>
  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        <?php echo TXT_FAQS_4 ?>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <strong><?php echo TXT_FAQS_4A ?></strong> <?php echo TXT_FAQS_4B ?><a href="contact.php"><?php echo TXT_FAQS_4L ?> </a>
      </div>
    </div>
  </div>
  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
        <?php echo TXT_FAQS_5 ?>
      </button>
    </h2>
    <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show" aria-labelledby="panelsStayOpen-headingOne">
      <div class="accordion-body">
        <strong><?php echo TXT_FAQS_5A ?></strong> <?php echo TXT_FAQS_5B ?><a href="contact.php"><?php echo TXT_FAQS_5L ?> </a>
      </div>
    </div>
  </div>


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
            <li> <a href="mailto:em"><?php echo TXT_NAME_HOTEL_MAIL_7 ?></a> </li> 
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