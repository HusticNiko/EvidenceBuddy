<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 05. 06. 2019
 * Time: 17:08
 */

include "connect.php";
include "session.php";
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
  <h1 class="w3-bar-item w3-center">Dodajanje</h1><img class="img-fluid w3-center" src="img/profilka.png" style="width:18%" alt="">
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
						
						<div class="w3-container w3-center w3-animate-top">
                         <img class="img-fluid" src="img/273a20e19c.png" style="width:20%">
                        <div class="row">
                            <div class="col-12">
                            </div>
                            <div class="col-lg-8 mb-4 mb-lg-0">
                                    <div class="row"></div>
                                    <div class="col-sm-6">
                                        <div class="form">
                                            <form action="uploadanje.php" method="post" enctype="multipart/form-data" >
											<br>
												
												
											<input class="input1" type="text" name="ImeEvidence" placeholder="Ime slike">
											<span class="shadow-input1"></span>
											
                                             
												
                                                Izberite sliko:
                                                <input type="file" class="w3-button w3-green w3-round w3-round-xxlarge"  name="Izberi"></input>
												<br><br>
                                              
											<input class="input1" type="text" name="OpisEvidence" placeholder="Opis slike">
											<span class="shadow-input1"></span>
											
				
												<br><br>
												<input   class="w3-button w3-green w3-round w3-round-xxlarge" type="submit" name="submit" value="UPLOAD" />
                                               
                                            </form>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
						</div>
                    </div>
                </div>
            </div>
        </div>
    </div
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
  <h3>EvidenceBuddy <a class="w3-button w3-circle w3-teal" href="/Evidence_Izposojenega_Gradiva/dodajanje_evidence.php">+</a></h3>
</footer>

</body>
</html>