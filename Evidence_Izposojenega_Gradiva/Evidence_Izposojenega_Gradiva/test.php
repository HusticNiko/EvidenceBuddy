<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 13. 05. 2019
 * Time: 17:31*/
?>

<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3pro.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-red.css">
<body style="max-width:600px">

<header class="w3-bar w3-card w3-theme">
  <button class="w3-bar-item w3-button w3-xxxlarge w3-hover-theme" onclick="openSidebar()">&#9776;</button>
  <h1 class="w3-bar-item">Dobrodošli</h1>
</header>

<div class="w3-container">
<hr>
<div class="w3-cell-row">
  <div class="w3-cell" style="width:30%">
    <img class="w3-circle" src="img/profilka.png" style="width:100%">
  </div>
  <div class="w3-cell w3-container">
    <h3>EvidenceBuddy</h3>
	<p><button class="w3-button w3-green w3-round-xlarge" href="/Evidence_Izposojenega_Gradiva/Prijava.php">Prijava</button></p>
	<p><button href="/Evidence_Izposojenega_Gradiva/Registracija.php" class="w3-button w3-red w3-round-xlarge">Registracija</button></p>
  </div>
</div>  

<footer class="w3-container w3-theme w3-margin-top">
  <h3></h3>
</footer>

<script>
closeSidebar();
function openSidebar() {
  document.getElementById("mySidebar").style.display = "block";
}

function closeSidebar() {
  document.getElementById("mySidebar").style.display = "none";
}
</script>

</body>
</html>
