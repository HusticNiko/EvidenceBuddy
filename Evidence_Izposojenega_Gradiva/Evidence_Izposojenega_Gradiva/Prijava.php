<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 05. 06. 2019
 * Time: 17:08
 */
include "connect.php";
include "session.php"
?>

<html>
<head>
   <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-blue.css">
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="962609924642-q5m1e6fsdbeipsd70v0q5ru304igm6gi.apps.googleusercontent.com" >
<body style="max-width:2000px">

<header class="w3-bar w3-card w3-theme">
  <button class="w3-bar-item w3-button w3-xxxlarge w3-hover-theme" onclick="openSidebar()">&#9776;</button>
  <h1 class="w3-bar-item w3-center">Prijava</h1><img class="img-fluid w3-center" src="img/profilka.png" style="width:18%" alt="">
</header>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://apis.google.com/js/platform.js" async defer></script>

</head>
<body>
<nav class="w3-sidebar w3-bar-block w3-card" id="mySidebar">
<div class="w3-container w3-theme-d2">
  <span onclick="closeSidebar()" class="w3-button w3-display-topright w3-large">X</span>
</div>
<a class="w3-bar-item w3-button" href="/Evidence_Izposojenega_Gradiva/Evidence_Izposojenega_Gradiva/index.php">Domov</a>
<a class="w3-bar-item w3-button" href="/Evidence_Izposojenega_Gradiva/Evidence_Izposojenega_Gradiva/registracija.php">Novi evidenčni račun</a>
<a class="w3-bar-item w3-button" href="/Evidence_Izposojenega_Gradiva/Evidence_Izposojenega_Gradiva/prijava.php">Prijava v račun</a>
</nav>
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row align-content-center justify-content-between">
                <div class="col-lg-6">
                    <div class="banner_content">
                        <br>
                        <br>

                        <br>
                        <?php
                        if(isset($_GET['napaka'])==true){
                            echo '<script language="javascript">';
                            echo 'alert("Napačno ime ali geslo")';
                            echo '</script>';
                        }
                        ?>
                        <h1 class="text-uppercase col-sm-6"></h1>
                        <div class="row w3-center">
						<div class="w3-container w3-center w3-animate-top">
                            <div class="col-lg-8 mb-4 mb-lg-0">
                                <form class="form-contact contact_form" action="overjanje.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="row"></div>
                                    <div class="col-sm-6">
                                        <div class="form-inline">
                                           
	
											
											<input class="input1" type="text" name="upo-ime" placeholder="Uporabniško ime">
											<span class="shadow-input1"></span>
											</a>
											<br>
											<input class="input1" type="password" name="geslo" placeholder="Geslo">
											<span class="shadow-input1"></span>
											

                                        </div>
                                    </div>
									<br>
                                    <div class="form-group mt-lg-3 col-sm-6">
									
									<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
									
									<button class="w3-button w3-green w3-round-xxlarge">Prijava</button>
        
                                    </div>
									<br>
                                        <div class="container signin ">
                                            <a>Še niste registrirani?</a>
                                                <a href="/Evidence_Izposojenega_Gradiva/Evidence_Izposojenega_Gradiva/registracija.php">Ustvari račun</a>
                                        </div>
                                   </div>
								   </div>
                            </form>
                            <div class="w3-center">
                                <div class="g-signin  w3-center" data-onsuccess="onSignIn" data-theme="dark"></div>
                                <script>
                                    function onSignIn(googleUser) {
                                        // Useful data for your client-side scripts:
                                        var profile = googleUser.getBasicProfile();
                                        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
                                        console.log('Full Name: ' + profile.getName());
                                        console.log('Given Name: ' + profile.getGivenName());
                                        console.log('Family Name: ' + profile.getFamilyName());
                                        console.log("Image URL: " + profile.getImageUrl());
                                        console.log("Email: " + profile.getEmail());

                                        // The ID token you need to pass to your backend:
                                        var id_token = googleUser.getAuthResponse().id_token;
                                        console.log("ID Token: " + id_token);
                                    }
                                </script>
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
</body>





</html>