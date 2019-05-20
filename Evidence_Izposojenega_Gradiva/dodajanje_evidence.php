<?php


include "Nav.php";
include "session.php";
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
</head>

<body>
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="banner_content">
                        <br><br><br><br><br><br><br>
                        <h1 class="text-uppercase"><?php echo $Ime; ?></h1>

                        <div class="row">
                            <div class="col-12">
                                <h2 class="contact-title col-sm-6">Dodajanje evidence</h2>
                            </div>
                            <div class="col-lg-8 mb-4 mb-lg-0">
                                <form class="form-contact contact_form" action="/Evidence_Izposojenega_Gradiva/Registracija.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="row"></div>
                                    <div class="col-sm-6">
                                        <div class="form-inline">
                                            <input class="form-control" name=""  type="text" placeholder="Ime evidence:">
                                            <input class="form-control" name=""  type="text" placeholder="">
                                            <input class="form-control" name="" type="text" placeholder="">
                                            <input class="form-control" name="" type="email" placeholder="">
                                            <input class="form-control" name="" type="password" placeholder="">
                                            <input class="form-control" name="" type="password" placeholder="">
                                        </div>
                                    </div>


                                    <div class="form-group mt-lg-3 col-sm-6 col-lg-12">
                                        <button type="submit" name="submit" class="primary_btn button-contactForm" class="registerbtn ">Dodaj evidenco</button>
                                    </div>
                            </div>
                            </form>
                        </div>

                        <br>
                        <br>

                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="home_right_img">
                        <img class="img-fluid" src="img/273a20e19c.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</html>