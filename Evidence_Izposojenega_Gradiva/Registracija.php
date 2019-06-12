<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 13. 05. 2019
 * Time: 17:31
 */
include "Nav.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST["submit"])) {
    if ($_POST["geslo"] == $_POST["geslo-znova"]) {
        $upo_name = $_POST["upo-ime"];
        $name = $_POST["ime"];
        $surname = $_POST["priimek"];
        $email = $_POST["email"];
        $pasw = $_POST["geslo"];


        $insert = $conn->query("INSERT into uporabnik (ime, priimek, uporabnisko_ime, email, geslo) VALUES ('" . $name . "','" . $surname . "','" . $upo_name . "','" . $email . "','" . $pasw . "')");
        if ($insert) {
            echo "<div align='center' class=\"alert alert-success\">
  <strong>Račun ustvarjen!</strong> uspešno ste ustvarili račun.Preusmerjeni boste čez 3s...
</div>";
header( "refresh:3;url=Prijava.php" );

        }else{
            echo "<div align='center' class=\"alert alert-warning\">
  <strong>Račun ni ustvarjen!</strong> nekaj je šlo narobe poskusi še enkrat!
</div>";
        }
    }else {
        echo "<div align='center' class=\"alert alert-warning\">
  <strong>Gesli se ne ujemata!</strong> niste vpisali enakih gesel!
</div>";
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/images.png" type="image/png">
    <title>Breed Portfolio - Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- main css -->
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="css/style.css">

</head>

<body>
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row align-content-center justify-content-between">
                <div class="col-lg-6">
                    <div class="banner_contentw3-animate-left">
                        <br>
                        <br>

                        <br>
                        <h1 class="text-uppercase">Registracija</h1>


                        <div class="row">
                            <div class="col-12">
                                <h2 class="contact-title">Ustvarjanje računa</h2>
                            </div>
                            <div class="col-lg-8 mb-4 mb-lg-0">
                                <form class="form-contact contact_form" action="/Evidence_Izposojenega_Gradiva/Registracija.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="row"></div>
                                    <div class="col-sm-6">
                                        <div class="form-inline">
                                            <input class="form-control" name="upo-ime"  type="text" placeholder="Uporabniško ime">
                                            <input class="form-control" name="ime"  type="text" placeholder="Ime">
                                            <input class="form-control" name="priimek" type="text" placeholder="Priimek">
                                            <input class="form-control" name="email" type="email" placeholder="Email">
                                            <input class="form-control" name="geslo" type="password" placeholder="Geslo">
                                            <input class="form-control" name="geslo-znova" type="password" placeholder="Ponovno geslo">
                                        </div>
                                    </div>

                                    <p>Z ustvarjanjem računa se strinjate z <a href="#">Pogoji & Zasebnostjo</a>.</p>
                                    <div class="form-group mt-lg-3">
                                        <button type="submit" name="submit" class="primary_btn button-contactForm" class="registerbtn">Ustvari račun</button>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="home_right_img">
                        <img class="img-fluid" src="img/login2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div
</section>








</body>
</html>

