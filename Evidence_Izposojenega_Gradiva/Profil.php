<?php


include "NavUpo.php";
$st_evidenc = mysqli_query($conn, "SELECT COUNT(*) AS `count1` FROM `evidenca` WHERE tk_uporabnik = '".$loggin_session."'");
$row1 = mysqli_fetch_array($st_evidenc);
$count1 = $row1['count1'];

$st_izposoj = mysqli_query($conn, "SELECT COUNT(*) AS `count2` FROM `izposoja` WHERE tk_uporabnik = '".$loggin_session."'");
$row2 = mysqli_fetch_array($st_izposoj);
$count2 = $row2['count2'];

$st_sporocil = mysqli_query($conn, "SELECT COUNT(*) AS `count3` FROM `sporočila` WHERE prejemnik = '".$uporabniskoIme."' and status='NEPREGLEDANO' ");
$row3 = mysqli_fetch_array($st_sporocil);
$count3 = $row3['count3'];
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
                        <br><br><br><br>
                        <h3>Pozdravljen!</h3>
                        <h1 class="text-uppercase"><?php echo $Ime; ?></h1>
                        <div class="social_icons my-5">
                            <a href="https:/www.twitter.com/<?php echo $uporabniskoIme; ?>"><i class="ti-twitter"></i></a>
                            <a href="https:/www.skype.com"><i class="ti-skype"></i></a>
                            <a href="https:/www.instagram.com/<?php echo $uporabniskoIme; ?>"><i class="ti-instagram"></i></a>
                            <a href="https:/www.facebook.com/<?php echo $uporabniskoIme; ?>"><i class="ti-facebook"></i></a>
                            <a href="https:/www.vimeo.com"><i class="ti-vimeo"></i></a>
                        </div>
                        <a class="primary_btn" href="dodajanje_evidence.php"><span>Dodaj evidenco</span></a>

                        <br>
                        <br>
                        <div class="row justify-content-lg-start justify-content-center col-sm-6">
                            <div class="statistics_item col-sm-6">
                                <h3><span class="counter"><?php echo $count2; ?></span></h3>
                                <p>Št. izposoj</p>
                            </div>
                            <div class="statistics_item col-sm-6">
                                <h3><span class="counter"><?php echo $count1; ?></span></h3>
                                <p>Št. dodanih evidenc</p>
                            </div>
                            <div class="statistics_item col-sm-12">
                                <p>Št. novih sporočil</p>
                                <h3><span class="counter"><?php echo $count3; ?></span></h3>
                                <a href="pregledsporocil.php">Preglej sporočila</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="home_right_img">
                        <img class="img-fluid" src="img/banner/home-right.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
</html>