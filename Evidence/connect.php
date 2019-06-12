<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 13. 05. 2019
 * Time: 17:43
 */
$conn = new mysqli("localhost","root","","evidence");

// Check connection
if (mysqli_connect_error()) {
    die("Connection failed: " . $conn->connect_error);
} else {
    //echo "Connected successfully";
}
$conn->set_charset("utf8");