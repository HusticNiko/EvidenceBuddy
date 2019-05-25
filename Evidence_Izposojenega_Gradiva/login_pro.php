<?php


session_start();


$_SESSION["id"] = $_POST["id"];

$_SESSION["name"] = $_POST["name"];




$mysqli = new mysqli("localhost", "root", "", "evidence");
$result = $mysqli->query($sql);


if(empty($result->fetch_assoc())) {
    $insert = $conn->query("INSERT INTO users (name,google_id) VALUES ('" . $_POST["name"] . "', '" . $_POST["id"] . "')");
    $sql = $conn->query("SELECT * FROM users WHERE name='" . $_POST["name"] . "'");

}






echo "Updated Successful";

?>