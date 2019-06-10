<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 4. 01. 2019
 * Time: 19:36
 */
include "NavUpo.php";
if (isset($_POST['submit'])) {

    $query = "SELECT geslo FROM uporabnik WHERE ID='$loggin_session'";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    if ($_POST['geslo'] === $_POST['gesloNovo']) {

        $novoUpoIme = $_POST['ime'];
        $novoGeslo = ($_POST['gesloNovo']);
        $novEmail = $_POST['email'];

        $sql = "UPDATE `uporabnik` SET `geslo`='$novoGeslo' WHERE ID='$loggin_session'";
        $result = mysqli_query($conn, $sql);

        if (!$result) {
            die('Invalid query: ' . mysqli_error());
        }else{
            header("Location: odjava.php");
        }
    } else {
        echo "<div class=\"alert alert-danger\">
                    <strong>Opozorilo:</strong> Gesli se ne ujemata.
                </div>";
    }
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
</head>

<body>
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-5">
                    <div class="banner_content">
                        <br><br><br><br><br><br><br>
                        <form class="form-horizontal" action="profiluredi.php" method="POST">
                            <fieldset>
                                <legend class="text-center">Spreminjanje gesla</legend>

                                <!-- Name input-->
                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="name">Novo geslo:</label>
                                    <div class="col-md-6">
                                        <input id="name" name="geslo" type="password" placeholder="Vpisite novo geslo" class="form-control">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-md-4 control-label" for="name">Potrditev gesla:</label>
                                    <div class="col-md-6">
                                        <input id="name" name="gesloNovo" type="password" placeholder="Vpisi geslo za potrditev" class="form-control">
                                    </div>
                                </div>


                                <!-- Form actions -->
                                <div class="form-group">
                                    <div class="col-md-10 text-right">
                                        <button type="submit" name="submit" class="btn btn-success btn-md">Spremeni Geslo</button>
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                        </div>
                    </div><div class="col-lg-3">
                    <div class="home_right_img">
                        <img class="img-fluid" src="img/banner/home-right.png" alt="">
                    </div>
                </div>
                </div>

            </div>
        </div>
    </div>
</section>
</html>
