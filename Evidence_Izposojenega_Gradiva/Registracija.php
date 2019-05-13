<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 13. 05. 2019
 * Time: 17:31
 */
include "Nav.php";
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
if(isset($_POST["submit"])) {
    if ($_POST["geslo"] == $_POST["geslo-znova"]) {
        $upo_name = $_POST["upo-ime"];
        $name = $_POST["ime"];
        $surname = $_POST["priimek"];
        $email = $_POST["email"];
        $pasw = $_POST["geslo"];


        $insert = $conn->query("INSERT into uporabnik (ime, priimek, uporabnisko_ime, email, geslo) VALUES ('" . $name . "','" . $surname . "','" . $upo_name . "','" . $email . "','" . $pasw . "')");
        if ($insert) {
            echo "<div align='center' class=\"alert alert-success\">
  <strong>Račun ustvarjen!</strong> uspešno ste ustvarili račun.
</div>";
        }else{
            echo "<div align='center' class=\"alert alert-warning\">
  <strong>Račun ni ustvarjen!</strong> nekaj je šlo narobe poskusi še enkrat!
</div>";
        }
    }else {
        echo "<div align='center' class=\"alert alert-warning\">
  <strong>Gesli se ne ujemata!</strong> niste vpisali enakih gesel!
</div>";
    }
}
?>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/racun_prijava.css">
</head>
<body>
<form action="Registracija.php" method="post">
    <div class="container">
        <h1>Ustvarjanje računa</h1>
        <p>Prosim izpolnite obrazec za ustvarjanje računa.</p>
        <hr>
        <label for="uporabnisko-ime"><b>Uporabniško Ime</b></label>
        <input type="text" placeholder="Vpiši Uporabniško ime" name="upo-ime" required>

        <label for="ime"><b>Ime</b></label>
        <input type="text" placeholder="Vpišite Ime" name="ime" required>

        <label for="priimek"><b>Priimek</b></label>
        <input type="text" placeholder="Vpišite Priimek" name="priimek" required>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Vpišite Email" name="email" required>

        <label for="geslo"><b>Geslo</b></label>
        <input type="password" placeholder="Vpišite Geslo" name="geslo" required>

        <label for="geslo-znova"><b>Ponovi Geslo</b></label>
        <input type="password" placeholder="Ponovi geslo" name="geslo-znova" required>
        <hr>
        <p>Z ustvarjanjem računa se strinjate z <a href="#">Pogoji & Zasebnostjo</a>.</p>

        <button type="submit" name="submit" class="registerbtn">Ustvari račun</button>
    </div>

    <div class="container signin">
        <p>Že imate račun? <a href="prijava.php">Prijava</a>.</p>
    </div>
</form>
</body>
</html>