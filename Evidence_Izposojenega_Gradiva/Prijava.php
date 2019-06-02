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
    <meta name="google-signin-client_id" content="YOUR_CLIENT_ID.apps.googleusercontent.com">
    <script src="https://apis.google.com/js/platform.js" async defer></script>
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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row align-content-center justify-content-between">
                <div class="col-lg-6">
                    <div class="banner_content">
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
                            <div class="col-12">
                                <div class="g-signin2 col-sm-6" data-onsuccess="onSignIn" data-theme="dark"></div>
                                <script>
                                    function onSignIn(googleUser) {
                                        // Useful data for your client-side scripts:
                                        var profile = googleUser.getBasicProfile();
                                        console.log("ID: " + profile.getId()); // Don't send this directly to your server!
                                        console.log('Full Name: ' + profile.getName());
                                        console.log('Given Name: ' + profile.getGivenName());
                                        console.log('Family Name: ' + profile.getFamilyName());
                                        console.log("Image URL: " + profile.getImageUrl());
                                        console.log("Email: " + profile.getEmail());

                                        // The ID token you need to pass to your backend:
                                        var id_token = googleUser.getAuthResponse().id_token;
                                        console.log("ID Token: " + id_token);
                                    }
                                </script>
                            </div>
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