<?php
$mainTitle = "Hypnos - Price";
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
                    <a class="nav-link" href="contact.php">
                    <?php echo TXT_NAV_BUTTON_4 ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="recrutement.php">
                    <?php echo TXT_NAV_BUTTON_5 ?>
                    </a>
                </li>
            </ul>
        </div>
    </nav> 

<div class="container">
  <div class="row">
      <div class="center">
          <a href="index.php">
      <img src="media/image/hypnos Badge.jpg" style="width: 150px;height: 150px;" alt="Hypnos - World Hôtel">
          </a>
    </div>
  </div>
    </div>
    <br>
    <br>
<div class="container">
  <div class="center">
    <h1><em>
        <?php echo TXT_PAGES_PRICE_1 ?>
    </em></h1>
    </div>
    <br>
    <div class="center">
        <a href="bali.php">
          <img src="media/image/Hotel Bali/Bali - 2975787_1920.jpg" height="300px" width="400px" alt="Bali">
</a>
<!-- Tableaux Tarifs -->

<br><br>
<p><strong>Tarif Hôtel Bali - Juin 2022 </strong></p>
<table class="table table-bordered">
  <thead>
    <tr class="table-danger">
      <th scope="col"></th>
      <th scope="col">€</th>
      <th scope="col">IDR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Chambre Classique </th>
      <td>110</td>
      <td>1750</td>
    </tr>
    <tr>
      <th scope="row">Chambre Supérieure </th>
      <td>180</td>
      <td>2870</td>
    </tr>
    <tr>
      <th scope="row">Chambre Luxe</th>
      <td>290</td>
      <td>4620</td>
    </tr>
    <tr>
      <th scope="row">Appartement</th>
      <td >250</td>
      <td>3990</td>
    </tr>
  </tbody>
</table>
</div>
</div>

<div class="container">
    <br>
    <div class="center">
        <a href="maldive.php">
          <img src="media/image/Hotel Maldive/Maldive - beach-g37aa4ab9e_1920.jpg" height="300px" width="400px" alt="Maldive">
</a>
<!-- Tableaux Tarifs -->

<br><br>
<p><strong>Tarif Hôtel Les Maldives - Juin 2022 </strong></p>
<table class="table table-bordered">
  <thead>
    <tr class="table-danger">
      <th scope="col"></th>
      <th scope="col">€</th>
      <th scope="col">IDR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Chambre Classique </th>
      <td>110</td>
      <td>1750</td>
    </tr>
    <tr>
      <th scope="row">Chambre Supérieure </th>
      <td>180</td>
      <td>2870</td>
    </tr>
    <tr>
      <th scope="row">Chambre Luxe</th>
      <td>290</td>
      <td>4620</td>
    </tr>
    <tr>
      <th scope="row">Chambre sur Piloti</th>
      <td >250</td>
      <td>3990</td>
    </tr>
  </tbody>
</table>
</div>
</div>

<div class="container">
    <br>
    <div class="center">
        <a href="maldive.php">
          <img src="media/image/Hotel Maroc/Maroc - morocco-2349647_1920.jpg" height="300px" width="400px" alt="Marrakech">
</a>
<!-- Tableaux Tarifs -->

<br><br>
<p><strong>Tarif Hôtel Marrakech - Juin 2022 </strong></p>
<table class="table table-bordered">
  <thead>
    <tr class="table-danger">
      <th scope="col"></th>
      <th scope="col">€</th>
      <th scope="col">IDR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Chambre Classique </th>
      <td>110</td>
      <td>1750</td>
    </tr>
    <tr>
      <th scope="row">Chambre Supérieure </th>
      <td>180</td>
      <td>2870</td>
    </tr>
    <tr>
      <th scope="row">Chambre Luxe</th>
      <td>290</td>
      <td>4620</td>
    </tr>
  </tbody>
</table>
</div>
</div>


<div class="container">
    <br>
    <div class="center">
        <a href="maldive.php">
          <img src="media/image/Hotel Paris/Paris - eiffel-tower-3349075_1920.jpg" height="300px" width="400px" alt="Paris">
</a>
<!-- Tableaux Tarifs -->

<br><br>
<p><strong>Tarif Hôtel Paris - Juin 2022 </strong></p>
<table class="table table-bordered">
  <thead>
    <tr class="table-danger">
      <th scope="col"></th>
      <th scope="col">€</th>
      <th scope="col">IDR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Chambre Classique </th>
      <td>110</td>
      <td>1750</td>
    </tr>
    <tr>
      <th scope="row">Chambre Luxe </th>
      <td>180</td>
      <td>2870</td>
    </tr>
    <tr>
      <th scope="row">Chambre Vue Tour Eiffel</th>
      <td>290</td>
      <td>4620</td>
    </tr>
    <tr>
      <th scope="row">Appartement</th>
      <td >250</td>
      <td>3990</td>
    </tr>
    <tr>
      <th scope="row">Appartement Vue Tour Eiffel</th>
      <td >250</td>
      <td>3990</td>
    </tr>
  </tbody>
</table>
</div>
</div>

<div class="container">
    <br>
    <div class="center">
        <a href="maldive.php">
          <img src="media/image/Hotel Salzbourg/Salzbourg - spa-g19ea96341_1920.jpg" height="300px" width="400px" alt="Salzbourg">
</a>
<!-- Tableaux Tarifs -->

<br><br>
<p><strong>Tarif Hôtel Salzbourg - Juin 2022 </strong></p>
<table class="table table-bordered">
  <thead>
    <tr class="table-danger">
      <th scope="col"></th>
      <th scope="col">€</th>
      <th scope="col">IDR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Chambre Classique </th>
      <td>110</td>
      <td>1750</td>
    </tr>
    <tr>
      <th scope="row">Chambre Supérieure </th>
      <td>180</td>
      <td>2870</td>
    </tr>
    <tr>
      <th scope="row">Chambre Luxe</th>
      <td>290</td>
      <td>4620</td>
    </tr>
  </tbody>
</table>

<div class="container">
  <div class="center">
    </div>
    <br>
    <div class="center">
        <a href="maldive.php">
          <img src="media/image/Hotel Santorin/Santorin - greece-1594689_1920.jpg" height="300px" width="400px" alt="Santorin">
</a>
<!-- Tableaux Tarifs -->

<br><br>
<p><strong>Tarif Hôtel Santorin- Juin 2022 </strong></p>
<table class="table table-bordered">
  <thead>
    <tr class="table-danger">
      <th scope="col"></th>
      <th scope="col">€</th>
      <th scope="col">IDR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Chambre Classique </th>
      <td>110</td>
      <td>1750</td>
    </tr>
    <tr>
      <th scope="row">Chambre Supérieure </th>
      <td>180</td>
      <td>2870</td>
    </tr>
    <tr>
      <th scope="row">Chambre Luxe</th>
      <td>290</td>
      <td>4620</td>
    </tr>
  </tbody>
</table>
</div>
</div>


<div class="container">
    <br>
    <div class="center">
        <a href="maldive.php">
          <img src="media/image/Hotel Venise/Venise - canal-g92e379e13_1920.jpg" height="300px" width="400px" alt="Venise">
</a>
</div>
<!-- Tableaux Tarifs -->

<br><br>
<p><strong>Tarif Hôtel Venise - Juin 2022 </strong></p>
<table class="table table-bordered">
  <thead>
    <tr class="table-danger">
      <th scope="col"></th>
      <th scope="col">€</th>
      <th scope="col">IDR</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Chambre Classique </th>
      <td>110</td>
      <td>1750</td>
    </tr>
    <tr>
      <th scope="row">Chambre Luxe </th>
      <td>180</td>
      <td>2870</td>
    </tr>
    <tr>
      <th scope="row">Chambre Luxe Vue Canal</th>
      <td>290</td>
      <td>4620</td>
    </tr>
    <tr>
      <th scope="row">Appartement</th>
      <td >250</td>
      <td>3990</td>
    </tr>
    <tr>
      <th scope="row">Appartement Vue Canal</th>
      <td >250</td>
      <td>3990</td>
    </tr>
  </tbody>
</table>
</div>
</div>

<!-- Fichier Tarifs : -->

<div class="container">
  <div class="center">
  <a href="media/Tarif Hyonos.xlsx">Tarifs Hyonos - Juin 2022 </a>
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
    <p class="text-center"> © Copyright 2020 - Hypnos Compagnie.  All rights reserved. </p>  
    </div>  
    </div>  
  </div>  
  </div>  
</footer>
</body>
</html>