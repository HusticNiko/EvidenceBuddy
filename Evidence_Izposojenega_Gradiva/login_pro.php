<?php


session_start();


$_SESSION["id"] = $_POST["id"];

$_SESSION["name"] = $_POST["name"];




$mysqli = new mysqli("localhost", "root", "", "evidence");


$sql = "SELECT * FROM users WHERE name='".$_POST["name"]."'";

$result = $mysqli->query($sql);


if(!empty($result->fetch_assoc())){

    $sql2 = "INSERT INTO users (name,google_id) VALUES ('".$_POST["name"]."', '".$_POST["id"]."')";

}else{

    $sql2 = "INSERT INTO users (name,google_id) VALUES ('".$_POST["name"]."', '".$_POST["id"]."')";

}


$mysqli->query($sql2);


echo "Updated Successful";

?>