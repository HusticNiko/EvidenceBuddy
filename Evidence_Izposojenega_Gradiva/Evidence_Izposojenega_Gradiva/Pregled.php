<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 10. 06. 2019
 * Time: 16:54
 */
include "connect.php";
include "session.php";
if (isset($_POST['submit'])) {
    $id = $_POST['ID'];

$delete = $conn->query("DELETE FROM evidenca WHERE ID=$id AND status_gradiva='NEIZPOSOJENO'");
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
<meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="962609924642-q5m1e6fsdbeipsd70v0q5ru304igm6gi.apps.googleusercontent.com" >
<body style="max-width:2000px">

<header class="w3-bar w3-card w3-theme">
  <button class="w3-bar-item w3-button w3-xxxlarge w3-hover-theme" onclick="openSidebar()">&#9776;</button>
  <h1 class="w3-bar-item w3-center">Pregled</h1><img class="img-fluid w3-center" src="img/profilka.png" style="width:18%" alt="">
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
               
                    
                        <br><br><br><br>
                       

                        <div class="col-lg-6 row w3-center ">
                            <div class="col-12">
                                <h2 class="contact-title col-sm-3">Moja gradiva</h2>
                            </div>
                            <div class="col-lg-8 mb-4 mb-lg-0">
                                <?php

                                $sql = "SELECT e.ID, e.imeevidence, e.status_gradiva, e.tk_uporabnik
FROM evidenca e
WHERE e.tk_uporabnik = '".$loggin_session."';";
                                $result = mysqli_query($conn, $sql);

                                echo "<div class=\"container\"><table class=\"table table-hover\">";
                                echo " <thead><tr><th>Ime evidence</th><th>Status</th><th>Izbriši</th></tr></thead>";
                                while($row = mysqli_fetch_assoc($result)){
                                    echo"<tr><td align='left'>{$row['imeevidence']}</form></td><td align='left'>{$row['status_gradiva']}</td>";
                                        echo "<td align='left'><form method='post' action='Pregled.php' ><input name='ID' hidden value=".$row['ID']."><input name='imeevidence' hidden value=".$row['imeevidence']."><input name='status_gradiva' hidden value=".$row['status_gradiva']."><input name='tk_uporabnik' hidden value=".$row['tk_uporabnik']."><button class='w3-button w3-green w3-round w3-large' type='submit' name='submit'><span>Izbriši</span></button></form></td></tr>";
                                }
                                echo "</table></div>";



                                ?>

                            </div>

                        </div>
						<div class="row w3-center">
                            <div class="col-12">
                                <h2 class="contact-title col-sm-2">Pregled izposojenih gradiv</h2>
                            </div>
                            <div class="col-lg-2 mb-4 mb-lg-0">
                                <?php

                                $sql = "SELECT e.imeevidence, i.datum, u.uporabnisko_ime
FROM izposoja i
INNER JOIN uporabnik u ON i.tk_uporabnik = u.ID
INNER JOIN evidenca e ON i.tk_evidenca = e.ID
WHERE e.tk_uporabnik = '".$loggin_session."'
AND e.status_gradiva = 'IZPOSOJENO';";
                                $result = mysqli_query($conn, $sql);

                                echo "<div class=\"container\"><table class=\"table table-hover\">";
                                echo " <thead><tr><th>Ime evidence</th><th>Datum izposoje</th><th>Uporabnik</th></tr></thead>";
                                while($row = mysqli_fetch_assoc($result)){
                                    echo"<tr><td align='left'>{$row['imeevidence']}</form></td><td align='left'>{$row['datum']}</td><td align='left'>{$row['uporabnisko_ime']}</td>";
                                    echo "<td align='left'><form method='post' action='Pregled.php' ><input name='imeevidence' hidden value=".$row['imeevidence']."><input name='datum' hidden value=".$row['datum']."><input name='uporabnisko_ime' hidden value=".$row['uporabnisko_ime']."></form></td></tr>";
                                }
                                echo "</table></div>";



                                ?>

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