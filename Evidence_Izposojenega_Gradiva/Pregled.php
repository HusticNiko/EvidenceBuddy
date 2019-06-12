<?php
include "NavUpo.php";
include "session.php";

if (isset($_POST['submit'])) {
    $id = $_POST['ID'];

$delete = $conn->query("DELETE FROM evidenca WHERE ID=$id AND status_gradiva='NEIZPOSOJENO'");
}
if (isset($_POST['vrni'])) {
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
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/images.png" type="image/png">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>

<body>
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="banner_content w3-animate-left">
                        <br><br><br><br><br>
                        <div class="row ">
                            <div class="col-12">
                                <h2 class="contact-title col-sm-3">Moja gradiva</h2>
                            </div>
                            <div class="col-lg-2 mb-4 mb-lg-0">
                                <?php

                                $sql = "SELECT e.ID, e.imeevidence, e.status_gradiva, e.tk_uporabnik
FROM evidenca e
WHERE e.tk_uporabnik = '".$loggin_session."';";
                                $result = mysqli_query($conn, $sql);

                                echo "<div class=\"container\"><table class=\"table table-hover\">";
                                echo " <thead><tr><th>Ime evidence</th><th>Status</th><th>Izbriši</th></tr></thead>";
                                while($row = mysqli_fetch_assoc($result)){
                                    echo"<tr><td align='left'>{$row['imeevidence']}</form></td><td align='left'>{$row['status_gradiva']}</td>";
                                        echo "<td align='left'><form method='post' action='Pregled.php' ><input name='ID' hidden value=".$row['ID']."><input name='imeevidence' hidden value=".$row['imeevidence']."><input name='status_gradiva' hidden value=".$row['status_gradiva']."><input name='tk_uporabnik' hidden value=".$row['tk_uporabnik']."><button class='primary_btn' name='submit' type='submit'><span>Izbriši</span></button></form></td></tr>";
                                }
                                echo "</table></div>";



                                ?>

                            </div>

                        </div>
						<div class="row">
                            <div class="col-12">
                                <h2 class="contact-title col-sm-2">Pregled izposojenih gradiv</h2>
                            </div>
                            <div class="col-lg-2 mb-4 mb-lg-0">
                                <?php

                                $sql = "SELECT i.ID, i.tk_evidenca, e.imeevidence, i.datum, u.uporabnisko_ime, i.tk_uporabnik
FROM izposoja i
INNER JOIN uporabnik u ON i.tk_uporabnik = u.ID
INNER JOIN evidenca e ON i.tk_evidenca = e.ID
WHERE e.tk_uporabnik = '".$loggin_session."'
AND e.status_gradiva = 'IZPOSOJENO';";
                                $result = mysqli_query($conn, $sql);

                                echo "<div class=\"container\"><table class=\"table table-hover\">";
                                echo " <thead><tr><th>Ime evidence</th><th>Datum izposoje</th><th>Uporabnik</th><th>Vrnjeno</th></tr></thead>";
                                while($row = mysqli_fetch_assoc($result)){
                                    echo"<tr><td align='left'>{$row['imeevidence']}</form></td><td align='left'>{$row['datum']}</td><td align='left'>{$row['uporabnisko_ime']}</td>";
                                    echo "<td align='left'><form method='post' action='Pregled.php' ><input name='ID' hidden value=".$row['ID']."><input name='imeevidence' hidden value=".$row['imeevidence']."><input name='datum' hidden value=".$row['datum'].">
                                    <input name='uporabnisko_ime' hidden value=".$row['uporabnisko_ime']."><input name='tk_uporabnik' hidden value=".$row['tk_uporabnik']."><input name='tk_evidenca' hidden value=".$row['tk_evidenca']."><button class='primary_btn' name='vrni' type='submit'><span>Potrdi</span></button></form></td></tr>";
                                }
                                echo "</table></div>";



                                ?>

                            </div>

                        </div>
                    </div>
                    
                    </div><div class="col-lg-3">
                        <div class="home_right_img">
                            <img class="img-fluid" src="img/273a20e19c.png" alt="">
                        </div>
                </div>
            </div>
        </div>
</section>
</html>