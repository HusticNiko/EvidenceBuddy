<?php
/**
 * Created by PhpStorm.
 * User: niko
 * Date: 13. 05. 2019
 * Time: 17:31*/

?>

<?php


include "NavUpo.php";
include "session.php";

if (isset($_POST['search'])) {
    $search = mysqli_real_escape_string($conn, $_POST['query']);

    //SELECT * FROM `evidenca` WHERE imeevidence LIKE "harry" AND tk_uporabnik = 0;
    $sql = "SELECT * FROM evidenca WHERE imeevidence LIKE '%$search%' AND status_gradiva = 'NEIZPOSOJENO'";
    $result = mysqli_query($conn, $sql);
    $queryResult = mysqli_num_rows($result);
} else {
    echo "Ni rezultatov.";
}

if (isset($_POST['submit'])) {
    $selectOption = $_POST['imegradiva'];

    $date = date('Y/m/d H:i:s');


    $insert = $conn->query("INSERT into izposoja (datum, tk_uporabnik, tk_evidenca) VALUES ('" . $date . "','" . $loggin_session . "','" . $selectOption . "')");
    if ($insert) {
        echo "<div align='center' class=\"alert alert-success\">
  <strong>Gradivo izposojeno!</strong> uspešno ste izposodili gradivo.
</div>";
    } else {
        echo "<div align='center' class=\"alert alert-warning\">
  <strong>Gradivo ni izposojeno!</strong> nekaj je šlo narobe poskusi še enkrat!
</div>";
    }
    $update = $conn->query("UPDATE evidenca set status_gradiva = 'IZPOSOJENO' where ID = $selectOption ");
    if ($update) {
        echo "<div align='center' class=\"alert alert-success\">
  <strong>Gradivo posodobljeno!</strong> uspešno ste izposodili gradivo.
</div>";
    } else {
        echo "<div align='center' class=\"alert alert-warning\">
  <strong>Gradivo ni posodobljeno!</strong> nekaj je šlo narobe poskusi še enkrat!
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
                        <h1 class="text-uppercase"><?php echo $Ime; ?></h1>

                        <div class="row">
                            <div class="col-12">
                                <h2 class="contact-title col-sm-6">Izposoja evidence</h2>
                            </div>
                            <div class="col-lg-8 mb-4 mb-lg-0">
                                <form class="form-contact contact_form"
                                      action="/Evidence_Izposojenega_Gradiva/izposoja_evidenc.php"
                                      method="post" id="contactForm" novalidate="novalidate">
                                    <div class="row"></div>
                                    <div class="col-sm-6">
                                        <div class="form-inline">
                                            <input class="form-control" name="query" type="text"
                                                   placeholder="Ime evidence:">
                                            <button type="submit" name="search" class="primary_btn button-contactForm"
                                                    class="searchbtn">Išči
                                            </button>


                                        </div>
                                    </div>
                            </div>
                            </form>
                            <form action="/Evidence_Izposojenega_Gradiva/izposoja_evidenc.php" method="post">
                                <select name="imegradiva">
                                    <?php while ($row1 = mysqli_fetch_assoc($result)):; ?>
                                        <option value="<?php echo $row1['ID']; ?>"><?php echo $row1['imeevidence']; ?></option>
                                    <?php endwhile; ?>
                                </select>
                                <input type="submit" name="submit" value="Izposodi"/>
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