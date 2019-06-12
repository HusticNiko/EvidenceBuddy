<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 13. 05. 2019
 * Time: 17:44
 */
include "connect.php";
if(!isset($_SESSION))
{
    session_start();
}

if (isset($_SESSION['upo-ime'])){
    $user_check = $_SESSION['upo-ime'];

    $res = mysqli_query($conn, "SELECT * FROM `uporabnik` WHERE uporabnisko_ime = '$user_check'");

    if (!$res) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
//pridobivanje vrstice nato iz te vrstice stolpec ID
    $row = mysqli_fetch_assoc($res);
    $loggin_session = $row['ID'];
    $uporabniskoIme = $row['uporabnisko_ime'];
    $Ime=$row['ime'];

}

if(!isset($loggin_session)) {
    mysqli_close($conn);
}
?>