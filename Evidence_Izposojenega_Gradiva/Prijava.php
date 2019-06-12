<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 13. 05. 2019
 * Time: 17:08
 */
include "Nav.php";
?>
<html>
<head>
    <meta name="google-signin-scope" content="profile email">
    <meta name="google-signin-client_id" content="962609924642-q5m1e6fsdbeipsd70v0q5ru304igm6gi.apps.googleusercontent.com" >
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
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>

    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

    <script src="https://apis.google.com/js/platform.js" async defer></script>
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row align-content-center justify-content-between">
                <div class="col-lg-6">
				<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
                    <div class="banner_content w3-animate-left">
                        <br>
                        <br>

                        <br>
                        <?php
                        if(isset($_GET['napaka'])==true){
                            echo '<script language="javascript">';
                            echo 'alert("Napačno ime ali geslo")';
                            echo '</script>';
                        }
                        ?>
						
						<br><br>
                        <h1 class="text-uppercase col-sm-6">Prijava</h1>
                        <div class="row">

                            <div class="col-lg-8 mb-4 mb-lg-0">
                                <form class="form-contact contact_form" action="overjanje.php" method="post" id="contactForm" novalidate="novalidate">
                                    <div class="row"></div>
                                    <div class="col-sm-6">
                                        <div class="form-inline">
                                            <input class="form-control" name="upo-ime"  type="text" placeholder="Uporabniško ime">
                                            <input class="form-control mt-lg-2"  name="geslo"  type="password" placeholder="Geslo">
                                        </div>
                                    </div>
                                    <div class="form-group mt-lg-3 col-sm-6">
                                        <button type="submit" name="submit" class="primary_btn button-contactForm" class="prijavabtn">Prijava</button>
                                    </div>
                                        <div class="container signin ">
                                            <a>Še niste registrirani?</a>
                                                <a href="/Evidence_Izposojenega_Gradiva/registracija.php">Ustvari račun</a>
                                        </div>
                                   </div>
                            </form>
                            
                        </div>
                    </div>
                </div>

                <div class="col-lg-4">
                    <div class="home_right_img">
                        <img class="img-fluid" src="img/login2.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


</body>





</html>