<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 13. 05. 2019
 * Time: 17:31*/
?>
<?php


$android = strpos($_SERVER['HTTP_USER_AGENT'],"Android");


$bberry = strpos($_SERVER['HTTP_USER_AGENT'],"BlackBerry");


$iphone = strpos($_SERVER['HTTP_USER_AGENT'],"iPhone");


$ipod = strpos($_SERVER['HTTP_USER_AGENT'],"iPod");


$webos = strpos($_SERVER['HTTP_USER_AGENT'],"webOS");


if ($android || $bberry || $iphone || $ipod || $webos== true) 


{ 


header('Location: Evidence_Izposojenega_Gradiva/prijava.php');


}


?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/images.png" type="image/png">
    <title>EvidenceBuddy</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">

	<style>
		.img-fluid {
   -webkit-transform: scaleX(-1);
  transform: scaleX(-1);
    -webkit-animation:spin 30s linear infinite;
    -moz-animation:spin 30s linear infinite;
    animation:spin 30s linear infinite;
}

@keyframes spin { 100% { -webkit-transform: scaleX(3600deg); transform:rotate(3600deg); } }
	</style>

</head>

<body>




<!--================ Start Header Area =================-->
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

            </div>
        </nav>
    </div>
</header>
<!--================ End Header Area =================-->

<!--================ Start Home Banner Area =================-->
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="banner_content w3-animate-left">
                        <br>
                        <br>
                        <h3>Dobrodošli !</h3>
                        <h1 class="text">EvidenceBuddy</h1>
                        <a class="primary_btn" href="/Evidence_Izposojenega_Gradiva/Prijava.php"><span>Prijavi se tukaj !</span></a>
                        <a class="primary_btn" href="/Evidence_Izposojenega_Gradiva/Registracija.php"><span>Registriraj se tukaj !</span></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="home_right_img">
					<a  href="/Evidence_Izposojenega_Gradiva/about.html">
                        <img class="img-fluid" src="img/profilka.png"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>
