<?php


include "NavUpo.php";
include "session.php";
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="img/images.png" type="image/png">
    <title>Breed Portfolio - Home</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css"><link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

</head>

<body>
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row align-content-center justify-content-between">
                <div class="col-lg-6">
                    <div class="banner_content w3-animate-left">
                        <br>
                        <br>

                        <br>
                        <h1 class="text-uppercase">Dodajanje evidence</h1>


                        <div class="row">
                            <div class="col-12">

                            </div>
                            <div class="col-lg-8 mb-4 mb-lg-0">
                                    <div class="row"></div>
                                    <div class="col-sm-6">
                                        <div class="form">
                                            <form action="uploadanje.php" method="post" enctype="multipart/form-data" >
                                                Vpišite ime slike:
                                                <input type="text" name="ImeEvidence">
                                                Izberite sliko:
                                                <input type="file" name="image"/>
                                                Vpišite opis slike:
                                                <input type="text" name="OpisEvidence">
                                                <input type="submit" name="submit" value="UPLOAD"/>
                                            </form>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="home_right_img">
                        <img class="img-fluid" src="img/306-512.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div
</section>


</body>
</html>