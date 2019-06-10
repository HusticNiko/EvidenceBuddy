<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 3. 01. 2019
 * Time: 00:45
 */
if(!isset($_SESSION))
{
    session_start();
}
if(session_destroy()) {
    header("Location: index.php");
}
?>