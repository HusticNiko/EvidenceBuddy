<?php
include "connect.php";
include "session.php";

if (isset($_POST['submit'])) {
    $id = $_POST['ID'];
$evidenca=$_POST['tk_evidenca'];

$update = $conn->query("UPDATE evidenca set status_gradiva = 'NEIZPOSOJENO' where ID = $evidenca");
$delete = $conn->query("DELETE FROM izposoja WHERE ID=$id");
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
  <h1 class="w3-bar-item w3-center">Vrnitev</h1><img class="img-fluid w3-center" src="img/profilka.png" style="width:18%" alt="">
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
                    <div class="banner_content w3-center w3-animate-top">
                        <br><br>
<canvas id="canvas" width="150" height="150"
style="background-color:#FFFFFF">
</canvas>
						<script>
var canvas = document.getElementById("canvas");
var ctx = canvas.getContext("2d");
var radius = canvas.height / 2;
ctx.translate(radius, radius);
radius = radius * 0.90
setInterval(drawClock, 1000);

function drawClock() {
  drawFace(ctx, radius);
  drawNumbers(ctx, radius);
  drawTime(ctx, radius);
}

function drawFace(ctx, radius) {
  var grad;
  ctx.beginPath();
  ctx.arc(0, 0, radius, 0, 2*Math.PI);
  ctx.fillStyle = 'white';
  ctx.fill();
  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
  grad.addColorStop(0, '#333');
  grad.addColorStop(0.5, 'white');
  grad.addColorStop(1, '#333');
  ctx.strokeStyle = grad;
  ctx.lineWidth = radius*0.1;
  ctx.stroke();
  ctx.beginPath();
  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
  ctx.fillStyle = '#333';
  ctx.fill();
}

function drawNumbers(ctx, radius) {
  var ang;
  var num;
  ctx.font = radius*0.15 + "px arial";
  ctx.textBaseline="middle";
  ctx.textAlign="center";
  for(num = 1; num < 13; num++){
    ang = num * Math.PI / 6;
    ctx.rotate(ang);
    ctx.translate(0, -radius*0.85);
    ctx.rotate(-ang);
    ctx.fillText(num.toString(), 0, 0);
    ctx.rotate(ang);
    ctx.translate(0, radius*0.85);
    ctx.rotate(-ang);
  }
}

function drawTime(ctx, radius){
    var now = new Date();
    var hour = now.getHours();
    var minute = now.getMinutes();
    var second = now.getSeconds();
    //hour
    hour=hour%12;
    hour=(hour*Math.PI/6)+
    (minute*Math.PI/(6*60))+
    (second*Math.PI/(360*60));
    drawHand(ctx, hour, radius*0.5, radius*0.07);
    //minute
    minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
    drawHand(ctx, minute, radius*0.8, radius*0.07);
    // second
    second=(second*Math.PI/30);
    drawHand(ctx, second, radius*0.9, radius*0.02);
}

function drawHand(ctx, pos, length, width) {
    ctx.beginPath();
    ctx.lineWidth = width;
    ctx.lineCap = "round";
    ctx.moveTo(0,0);
    ctx.rotate(pos);
    ctx.lineTo(0, -length);
    ctx.stroke();
    ctx.rotate(-pos);
}
</script>


                        <div class="row">
                           
                            <div class="col-lg-8 mb-4 mb-lg-0">
                                <?php

                                $sql = "SELECT i.ID, i.tk_evidenca, e.imeevidence, i.datum, i.tk_uporabnik
FROM izposoja i
INNER JOIN evidenca e ON i.tk_uporabnik = e.tk_uporabnik
WHERE e.status_gradiva = 'IZPOSOJENO';";
                                $result = mysqli_query($conn, $sql);

                                echo "<div class=\"container\"><table class=\" w3-table table\">";
                                echo " <thead><tr><th>Ime evidence</th><th>Datum izposoje</th><th>Vrni</th></tr></thead>";
                                while($row = mysqli_fetch_assoc($result)){
                                    echo"<tr><td align='left'>{$row['imeevidence']}</form></td><td align='left'>{$row['datum']}</td>";
                                        echo "<td align='left'><form method='post' action='vrni_evidence.php' ><input name='ID' hidden value=".$row['ID']."><input name='imeevidence' hidden value=".$row['imeevidence']."><input name='datum' hidden value=".$row['datum']."><input name='tk_uporabnik' hidden value=".$row['tk_uporabnik']."><input name='tk_evidenca' hidden value=".$row['tk_evidenca']."><button name='submit' type='submit'>Vrni</button></form></td></tr>";
                                }
                                echo "</table></div>";



                                ?>

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