<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 4. 01. 2019
 * Time: 20:30
 */
include "NavUpo.php";
include "connect.php";
include "session.php";
?>
<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if (isset($_POST['search'])){
    $isci = $_POST['search'];

    $isci = preg_replace("#[^0-9a-z]#i", "", $isci);

    $query = mysqli_query($conn, "SELECT * FROM evidenca WHERE imeevidence LIKE '%$isci%'");
    $stevec = mysqli_num_rows($query);
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.css"/>
    <!-- main css -->
    <link rel="stylesheet" href="css/galerija.css">
</head>

<body>
<section class="home_banner_area">
    <div class="banner_inner">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-6">
                    <div class="banner_content">
                        <br><br><br><br><br><br><br>
                        <form class="navbar-form navbar-center" action="search.php" role="search" method="post">
                            <div class="form-group">
                                <input type="text" class="form-control" name="search" placeholder="Išči...">
                            </div>
                            <button type="submit" class="btn btn-default">Poišči</button>
                        </form>
                        <br>
                        <div class="container">

                            <div class="row">
                                <?php
                                if ($stevec == 0) {
                                    echo '<div class=\"alert alert-warning\">
                    <strong>Opozorilo:</strong> Ni bilo najdenega rezultata.
                </div>';
                                } else {
                                    while ($row = mysqli_fetch_assoc($query)) {
                                        $imageThumbURL = 'Evidenca/'.$row["pot"];
                                        $imageURL = 'Evidenca/'.$row["pot"];

                                        ?>
                                        <div class="col-xs-6 col-sm-4 col-md-4">
                                            <div class="thumbnail">
                                                <div class="caption">
                                                    <h4>Slika</h4>
                                                    <p><?php echo $row['imeevidence']; ?></p>
                                                </div>
                                                <img src="<?php echo $imageThumbURL; ?>" alt="..." style="height: 200px; width: 600px">
                                            </div>
                                        </div>
                                    <?php }
                                } ?>
                            </div>
                        </div>
                        <br>
                        <form action="dodajanje_evidence.php" method="post" enctype="multipart/form-data">
                            <input type="submit" name="submit" value="Dodajanje evidence"/>
                        </form>
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