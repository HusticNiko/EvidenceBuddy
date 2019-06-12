<?php


include "connect.php";
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
  <h1 class="w3-bar-item w3-center">Gradivo</h1><img class="img-fluid w3-center" src="img/profilka.png" style="width:18%" alt="">
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
                        <br><br><br><br><br><br><br>
                        <form class="navbar-form navbar-center" action="search.php" role="search" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="search" placeholder="Išči...">
                            </div>
                            <button type="submit" class="btn btn-default">Poišči</button>
                        </form>
                        <br>
                        <div class="container">

                            <div class="row">
                                <?php
                                require 'connect.php';

                                $query = "SELECT * FROM  `evidenca`";
                                $result = mysqli_query($conn, $query);

                                if(mysqli_num_rows($result) > 0){

                                    while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
                                        $imageThumbURL = 'Evidenca/'.$row["pot"];
                                        $imageURL = 'Evidenca/'.$row["pot"];

                                        ?>
                                        <div class="col-xs-6 col-sm-4 col-md-4">
                                            <div class="thumbnail">
                                                <div class="caption">
                                                    <h4><?php echo $row['imeevidence']; ?></h4>
                                                    <p><?php echo $row['opis']; ?></p>
                                                </div>
                                                <img src="<?php echo $imageThumbURL; ?>" alt="..." style="height: 150px; width: 300px">
                                            </div>
                                        </div>
                                    <?php }
                                } else {
                                    echo "<div class=\"alert alert-danger\">
                    <strong>Opozorilo:</strong> NI SLIK!
                </div>";
                                } ?>
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