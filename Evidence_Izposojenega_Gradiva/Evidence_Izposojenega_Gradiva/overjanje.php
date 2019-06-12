<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 13. 05. 2019
 * Time: 17:44
 */
include "connect.php";
session_start();


    if (isset($_POST['upo-ime']) && isset($_POST['geslo'])) {

        // priprava SQL izraza
        $stmt = $conn->prepare("SELECT uporabnisko_ime, geslo FROM uporabnik WHERE uporabnisko_ime=? AND geslo=?");

        // priprava parametrov v SQL izrazu
        $stmt->bind_param('ss', $_POST['upo-ime'], $_POST['geslo']);
        $stmt->execute(); // izvršitev SQL izraza
        $stmt->store_result(); // shranjevanje vrnjenega rezultata

        if ($stmt->num_rows == 1) {
            print("Prijava uspešna!");

            //ZA POSILJANJE SEJE NA NASLEDNO STRAN
            $_SESSION['upo-ime'] = $_POST['upo-ime'];
            $_SESSION['geslo'] = $_POST['geslo'];

            header("Location: Profil.php");
        }else{
            header("Location: prijava.php?napaka=1");
        }
    } else {
        header("Location: prijava.php");
    }
?>