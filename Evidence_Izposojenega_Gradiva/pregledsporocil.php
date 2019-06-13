<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 13. 06. 2019
 * Time: 19:38
 */

include "NavUpo.php";
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
                        <br><br><br><br><br><br><br>

                        <div class="row ">
                            <div class="col-12">
                                <h2 class="contact-title col-sm-3">Pregled sporočil</h2>
                            </div>
                            <div class="col-lg-2 mb-4 mb-lg-0">
                                <?php

                                $sql = "SELECT ID_sporočilo,pošiljatelj,prejemnik,naziv,status
                                FROM sporočila
                                WHERE prejemnik = '".$uporabniskoIme."';";
                                $result = mysqli_query($conn, $sql);

                                echo "<div class=\"container\"><table class=\"table table-hover\">";
                                echo " <thead><tr><th>Pošiljatelj</th><th>Ime sporočila</th></tr></thead>";
                                while($row = mysqli_fetch_assoc($result)){
                                    echo"<tr><td align='left'>{$row['pošiljatelj']}</form></td><td align='left'>".$row['naziv']." "; if($row['status']=='NEPREGLEDANO'){  echo " (Novo Sporočilo)";} echo"</td>";
                                    echo "<td align='left'><form method='post' action='sporocilo.php' ><input name='ID' hidden value=".$row['ID_sporočilo']."><input name='posiljatelj' hidden value=".$row['pošiljatelj']."><input name='naziv' hidden value=".$row['naziv']."><button class='primary_btn' name='submit' type='submit'>Sporočilo</button></form></td></tr>";
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
