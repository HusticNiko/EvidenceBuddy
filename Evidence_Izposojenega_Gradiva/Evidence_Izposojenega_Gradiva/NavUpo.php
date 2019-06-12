<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 13. 05. 2019
 * Time: 17:40
 */
include "connect.php";
include "session.php"
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
                        <li class="nav-item"><a class="nav-link" href="/Evidence_Izposojenega_Gradiva/izposoja_evidenc.php">Izposoja</a></li>
                        <li class="nav-item"><a class="nav-link" href="/Evidence_Izposojenega_Gradiva/vrni_evidence.php">Vrnitev</a></li>
                        <li class="nav-item"><a class="nav-link" href="/Evidence_Izposojenega_Gradiva/odjava.php">Odjava</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>




</body>
</html>