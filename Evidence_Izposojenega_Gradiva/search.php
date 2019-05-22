<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 4. 01. 2019
 * Time: 20:30
 */
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
<!DOCTYPE html>
<html>
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="vendors/linericon/style.css">
    <link rel="stylesheet" href="css/themify-icons.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="vendors/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" href="vendors/nice-select/css/nice-select.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!-- main css -->
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header class="header_area">
    <div class="main_menu">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                    <ul class="nav navbar-nav menu_nav">
                        <li class="nav-item"><a class="nav-link" href="/Evidence_Izposojenega_Gradiva/Profil.php">Domaca stran "<?php echo $uporabniskoIme; ?>"</a></li>
                        <li class="nav-item"><a class="nav-link" href="/Evidence_Izposojenega_Gradiva/Gradivo.php">Gradiva</a></li>
                        <li class="nav-item"><a class="nav-link" href="/Evidence_Izposojenega_Gradiva/odjava.php">Odjava</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<br>
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
                <div class="col-xs-6 col-sm-4 col-md-3">
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
</div><!-- /.container -->
</body>
</html>