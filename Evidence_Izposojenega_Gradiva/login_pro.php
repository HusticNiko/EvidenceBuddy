<?php


session_start();



$_SESSION["name"] = $_POST["name"];




$mysqli = new mysqli("localhost", "root", "", "evidence");
$result = $mysqli->query($sql);

    $insert = $conn->query("INSERT INTO uporabnik (ime) VALUES ('" . $_POST["name"] . "')");
    $sql = $conn->query("SELECT * FROM uporabnik WHERE name='" . $_POST["name"] . "'");








echo "Updated Successful";

?>