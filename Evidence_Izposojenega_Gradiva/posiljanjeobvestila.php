<?php
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

                        <div class="row">
                            <div class="col-12">
                            </div>
                            <div class="col-lg-8 mb-4 mb-lg-0">
                                    <h1>Novo sporočilo</h1>
                                    <form action="posiljanjeobvestila.php" method="post">
                                        <br />
                                        <label for="message">Prejemnik</label><br><textarea cols="40" rows="1" id="prejemnik" name="prejemnik"></textarea>  <br />
                                        <label for="message">Naziv</label><br>
                                            <div id="cid_3" class="form-input-wide">
                                                <div class="form-multiple-column" data-columncount="3" data-component="radio">
                                                <span class="form-radio-item">
                                                <input type="radio" class="form-radio" id="input_3_0" name="naziv" value="Vprašanje" />
                                                <label id="label_input_3_0" for="input_3_0"> Vprašanje </label>
                                                    </span>
                                                    <span class="form-radio-item">
                                                <span class="dragger-item">
                                                </span>
                                                <input type="radio" class="form-radio" id="input_3_1" name="naziv" value="Obvestilo" />
                                                <label id="label_input_3_1" for="input_3_1"> Obvestilo </label>
                                                    </span>
                                                    <span class="form-radio-item">
                                                <span class="dragger-item">
                                                </span>
                                                <input type="radio" class="form-radio" id="input_3_2" name="naziv" value="Zahteva" />
                                                <label id="label_input_3_2" for="input_3_2"> Zahteva </label>
                                                    </span>
                                                </div>
                                            </div>
                                        <br>
                                        <label for="message">Sporočilo</label><textarea cols="40" rows="5" id="sporočilo" name="sporočilo"></textarea><br />
                                        <button type="submit" class='primary_btn' name="Pošlji" >Pošlji</button>
                                    </form>



                                    <?php
                                    require 'connect.php';
                                    ini_set('display_errors', 1);
                                    ini_set('display_startup_errors', 1);



                                    if (isset($_POST['sporočilo']) && isset($_POST['Pošlji'])) {
                                        $prejemnik = $_POST['prejemnik'];
                                        $sporočilo = $_POST['sporočilo'];
                                        $naziv = $_POST['naziv'];
                                        $user_check = $_SESSION['upo-ime'];


                                        $sql = "INSERT INTO sporočila(pošiljatelj,prejemnik,naziv,sporočilo,status) VALUES ('" . $user_check . "','" . $prejemnik . "','" . $naziv . "','" . $sporočilo . "','NEPREGLEDANO')";

                                        if ($conn->query($sql) === TRUE) {
                                            echo "Sporočilo uspešno poslano";
                                        } else {
                                            echo "Error: " . $sql . "<br>" . $conn->error;
                                        }


                                    }

                                    ?>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="home_right_img">
                        <img class="img-fluid" src="img/273a20e19c.png" alt="">
                    </div>
                </div>
            </div>
        </div>
</section>
</html>