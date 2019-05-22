<?php


include "NavUpo.php";
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
<body>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<div class="form">
    <form action="uploadanje.php" method="post" enctype="multipart/form-data" >
        Vpišite ime slike:
        <input type="text" name="ImeEvidence">
        Izberite sliko:
        <input type="file" name="image"/>
        Vpišite opis slike:
        <input type="text" name="OpisEvidence">
        <input type="submit" name="submit" value="UPLOAD"/>
    </form>
</div>
</body>
</html>