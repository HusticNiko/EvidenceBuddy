<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 13. 05. 2019
 * Time: 17:31*/

?>

<?php


include "connect.php";
include "session.php";

if (isset($_POST['search'])) {
    $search = mysqli_real_escape_string($conn, $_POST['query']);

    //SELECT * FROM `evidenca` WHERE imeevidence LIKE "harry" AND tk_uporabnik = 0;
    $sql = "SELECT * FROM evidenca WHERE imeevidence LIKE '%$search%' AND status_gradiva = 'NEIZPOSOJENO'";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);
} else {
    echo "Ni rezultatov.";
}

if (isset($_POST['submit'])) {
    $selectOption = $_POST['imegradiva'];

    $date = date('Y/m/d H:i:s');


    $insert = $conn->query("INSERT into izposoja (datum, tk_uporabnik, tk_evidenca) VALUES ('" . $date . "','" . $loggin_session . "','" . $selectOption . "')");
    if ($insert) {
        echo "<div align='center' class=\"alert alert-success\">
  <strong>Gradivo izposojeno!</strong> uspešno ste izposodili gradivo.
</div>";
    } else {
        echo "<div align='center' class=\"alert alert-warning\">
  <strong>Gradivo ni izposojeno!</strong> nekaj je šlo narobe poskusi še enkrat!
</div>";
    }
    $update = $conn->query("UPDATE evidenca set status_gradiva = 'IZPOSOJENO' where ID = $selectOption ");
    if ($update) {
        echo "<div align='center' class=\"alert alert-success\">
  <strong>Gradivo posodobljeno!</strong> uspešno ste izposodili gradivo.
</div>";
    } else {
        echo "<div align='center' class=\"alert alert-warning\">
  <strong>Gradivo ni posodobljeno!</strong> nekaj je šlo narobe poskusi še enkrat!
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
  <h1 class="w3-bar-item w3-center">Izposoja</h1><img class="img-fluid w3-center" src="img/profilka.png" style="width:18%" alt="">
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
<a class="w3-bar-item w3-button" href="/Evidence_Izposojenega_Gradiva/Evidence_Izposojenega_Gradiva/dodajanje_evidence.php">Dodajanje evidence</a>
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
                        <div class="row">
                            
                            <div class="col-lg-7 mb-4 mb-lg-0">
                                <form class="form-contact contact_form"
                                      action="izposoja_evidenc.php"
                                      method="post" id="contactForm" novalidate="novalidate">
                                    <div class="row"></div>
                                    <div class="col-sm-4">
                                        <div class="form-inline">
										<input class="input1" type="text" name="query" placeholder="Ime evidence:">
											<span class="shadow-input1"></span>
                                           <br>
										<input   class="w3-button w3-green w3-round w3-round-xxlarge" type="submit" name="submit" value="Išči" />
                                            <br>
                                        </div>
                                    </div>
                            </div>
                            </form>
							<br>
                            <form action="izposoja_evidenc.php" method="post">
                                <select name="imegradiva">
                                    <?php while ($row1 = mysqli_fetch_assoc($result)):; ?>
                                        <option value="<?php echo $row1['ID']; ?>"><?php echo $row1['imeevidence']; ?></option>
                                    <?php endwhile; ?>
                                </select>
								<input   class="w3-button w3-green w3-round w3-round-xxlarge" type="submit" name="submit" value="Izposodi" />
                            </form>
                        </div>

                        <br>
                        <br>

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