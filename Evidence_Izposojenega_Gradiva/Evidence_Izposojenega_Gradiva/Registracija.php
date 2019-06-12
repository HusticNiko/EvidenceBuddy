<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 13. 05. 2019
 * Time: 17:31
 */
include "connect.php";
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
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="962609924642-q5m1e6fsdbeipsd70v0q5ru304igm6gi.apps.googleusercontent.com" >
<body style="max-width:2000px">

<header class="w3-bar w3-card w3-theme">
  <button class="w3-bar-item w3-button w3-xxxlarge w3-hover-theme" onclick="openSidebar()">&#9776;</button>
  <h1 class="w3-bar-item w3-center">Registracija</h1><img class="img-fluid w3-center" src="img/profilka.png" style="width:18%" alt="">
</header>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

</head>
<body>
<nav class="w3-sidebar w3-bar-block w3-card" id="mySidebar">
<div class="w3-container w3-theme-d2">
  <span onclick="closeSidebar()" class="w3-button w3-display-topright w3-large">X</span>	
</div>
<a class="w3-bar-item w3-button" href="/Evidence_Izposojenega_Gradiva/Evidence_Izposojenega_Gradiva/profil.php">Profil</a>
<a class="w3-bar-item w3-button" href="/Evidence_Izposojenega_Gradiva/Evidence_Izposojenega_Gradiva/Gradivo.php">Gradiva</a>
<a class="w3-bar-item w3-button" href="/Evidence_Izposojenega_Gradiva/Evidence_Izposojenega_Gradiva/pregled.php">Pregled</a>
<a class="w3-bar-item w3-button" href="/Evidence_Izposojenega_Gradiva/Evidence_Izposojenega_Gradiva/dodajanje_evidence.php">Dodajanje evidence</a>
<a class="w3-bar-item w3-button" href="/Evidence_Izposojenega_Gradiva/Evidence_Izposojenega_Gradiva/izposoja_evidenc.php">Izposoja</a>
<a class="w3-bar-item w3-button" href="/Evidence_Izposojenega_Gradiva/Evidence_Izposojenega_Gradiva/vrni_evidence.php">Vrnitev</a>
<a class="w3-bar-item w3-button" href="/Evidence_Izposojenega_Gradiva/Evidence_Izposojenega_Gradiva/odjava.php">Odjava</a>
</nav>
</head>

<body>
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row align-content-center justify-content-between">
                <div class="col-lg-6">
                    <div class="banner_content w3-center">
                        <br>
                        <br>

                        <br>
                        


                        <div class="row">
                            <div class="col-12">
                                <h2 class="contact-title">Ustvarjanje računa</h2>
                            </div>
                            <div class="col-lg-8 mb-4 mb-lg-0">
                                <form class="form-contact contact_form" action="/Evidence_Izposojenega_Gradiva/Evidence_Izposojenega_Gradiva/Registracija.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="row"></div>
                                    <div class="col-sm-6">
                                        <div class="form-inline">
										<input class="input1" type="text" name="upo-ime" placeholder="Uporabniško ime">
											<span class="shadow-input1"></span>
											<br><br>
											<input class="input1" type="text" name="ime" placeholder="Ime">
											<span class="shadow-input1"></span>
											<br><br>
											<input class="input1" type="text" name="priimek" placeholder="Priimek">
											<span class="shadow-input1"></span>
											<br><br>
											<input class="input1" type="email" name="email" placeholder="Email">
											<span class="shadow-input1"></span>
											<br><br>
											<input class="input1" type="pasword" name="geslo" placeholder="Geslo">
											<span class="shadow-input1"></span>
											<br><br>
											<input class="input1" type="pasword" name="gslo-znova" placeholder="Ponovno geslo">
											<span class="shadow-input1"></span>
                                        </div>
                                    </div>

                                    <p>Z ustvarjanjem računa se strinjate z <a href="#">Pogoji & Zasebnostjo</a>.</p>
                                    <div class="form-group mt-lg-3">
                                        <button type="submit" name="submit"  class="w3-button w3-green w3-round-xxlarge">Ustvari račun</button>
                                    </div>
									<br><br><br>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>
<script>
closeSidebar();
function openSidebar() {
  document.getElementById("mySidebar").style.display = "block";
}

function closeSidebar() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

<footer class="w3-container w3-center w3-bottom w3-theme w3-margin-top">
  <h3>EvidenceBuddy</h3>
</footer>
</body>
</html>

