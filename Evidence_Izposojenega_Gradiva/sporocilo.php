<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 13. 06. 2019
 * Time: 21:19
 */

include "NavUpo.php";

if (isset($_POST['submit'])) {
    $id = $_POST['ID'];

    $update = $conn->query("UPDATE sporočila set status = 'PREGLEDANO' where ID_sporočilo = $id");
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
                        <br><br><br><br><br><br><br>

                        <div class="row ">
                            <div class="col-12">
                            </div>
                            <div class="col-lg-2 mb-4 mb-lg-0">
                                <?php

                                $sql = "SELECT ID_sporočilo,pošiljatelj,naziv,sporočilo
                                FROM sporočila
                                WHERE ID_sporočilo = '".$id."';";
                                $result = mysqli_query($conn, $sql);
                                $row = mysqli_fetch_assoc($result);

                                echo "<div class=\"container\"><label for=\"message\">Pošiljatelj</label><br><textarea cols=\"40\" rows=\"1\" id=\"posiljatelj\" name=\"posiljatelj\" readonly>".$row['pošiljatelj']."</textarea>  <br />
                                                               <label for=\"message\">Naziv</label><br><textarea cols=\"40\" rows=\"1\" id=\"naziv\" name=\"naziv\" readonly>".$row['naziv']."</textarea> <br>
                                                               <label for=\"message\">Sporočilo</label><textarea cols=\"40\" rows=\"5\" id=\"sporočilo\" name=\"sporočilo\" readonly>".$row['sporočilo']."</textarea>
                                                               <br><a class=\"primary_btn\" href=\"pregledsporocil.php\"><span>Nazaj</span></a>
                                                               
                                                               </div>";



                                ?>

                            </div>

                        </div>

                    </div>

                </div><div class="col-lg-4">
                    <div class="home_right_img">
                        <img class="img-fluid" src="img/273a20e19c.png" alt="">
                    </div>
                </div>
            </div>
        </div>
</section>
</body>
</html>
