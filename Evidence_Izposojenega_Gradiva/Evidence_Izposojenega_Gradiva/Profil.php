<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 05. 06. 2019
 * Time: 17:08
 */

include "connect.php";
include "session.php";
$st_evidenc = mysqli_query($conn, "SELECT COUNT(*) AS `count1` FROM `evidenca` WHERE tk_uporabnik = '".$loggin_session."'");
$row1 = mysqli_fetch_array($st_evidenc);
$count1 = $row1['count1'];

$st_izposoj = mysqli_query($conn, "SELECT COUNT(*) AS `count2` FROM `izposoja` WHERE tk_uporabnik = '".$loggin_session."'");
$row2 = mysqli_fetch_array($st_izposoj);
$count2 = $row2['count2'];
?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="962609924642-q5m1e6fsdbeipsd70v0q5ru304igm6gi.apps.googleusercontent.com" >
<body style="max-width:2000px">

<header class="w3-bar w3-card w3-theme">
  <button class="w3-bar-item w3-button w3-xxxlarge w3-hover-theme" onclick="openSidebar()">&#9776;</button>
  <h1 class="w3-bar-item w3-center">Profil</h1><img class="img-fluid w3-center" src="img/profilka.png" style="width:18%" alt="">
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
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="banner_content w3-center">
                        <br><br><br><br>
						<div class="w3-container w3-center w3-animate-top">
                        <img class="img-fluid" src="img/banner/home-right.png" style="width:20%">
                        <h1 class="text-uppercase"><?php echo $Ime; ?></h1>
                        <div class="social_icons my-5">
                            <a href="https:/www.twitter.com/<?php echo $uporabniskoIme; ?>"><i class="ti-twitter"></i></a>
                            <a href="https:/www.skype.com"><i class="ti-skype"></i></a>
                            <a href="https:/www.instagram.com/<?php echo $uporabniskoIme; ?>"><i class="ti-instagram"></i></a>
                            <a href="https:/www.facebook.com/<?php echo $uporabniskoIme; ?>"><i class="ti-facebook"></i></a>
                            <a href="https:/www.vimeo.com"><i class="ti-vimeo"></i></a>
                        </div>
                        
									
									<a class="w3-button w3-green w3-round w3-round-xxlarge" href="/Evidence_Izposojenega_Gradiva/Evidence_Izposojenega_Gradiva/dodajanje_evidence.php">Dodaj evidenco</a>

                        <br>
                        <br>
                       
                            <div class="statistics_item col-sm-6">
								<a class="w3-button w3-blue w3-round w3-round-xxlarge" href="/Evidence_Izposojenega_Gradiva/Evidence_Izposojenega_Gradiva/vrni_evidence.php">Št.izposoj
								<span class="w3-badge w3-margin-left  w3-round w3-round-xxlarge w3-white" ><?php echo $count2; ?></span>
								</a>
								<br>
								<br>
                                <a class="w3-button w3-blue w3-round w3-round-xxlarge" href="/Evidence_Izposojenega_Gradiva/Evidence_Izposojenega_Gradiva/dodajanje_evidence.php">Št. dodanih evidenc
								<span class="w3-badge w3-margin-left   w3-round w3-round-xxlarge w3-white"><?php echo $count1; ?></span>
								</a>
                            </div>
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
</html>