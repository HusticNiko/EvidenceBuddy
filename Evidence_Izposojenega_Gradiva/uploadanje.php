<?php
/**
 * Created by PhpStorm.
 * User: filip
 * Date: 12. 12. 2018
 * Time: 17:50
 */
if(isset($_POST["submit"])){
    require 'connect.php';
    $name=$_POST["ImeEvidence"];
    $image=$_FILES["image"]["name"];
    $Opis_slike=$_POST["OpisEvidence"];

    $insert = $conn->query("INSERT into evidenca (imeevidence, pot,opis) VALUES ('".$name."','$image', '".$Opis_slike."')");
    if($insert){
        echo "File uploaded successfully.";
        move_uploaded_file($_FILES["image"]["tmp_name"], "Evidenca/$image");
        header("Location: dodajanje_evidence.php");
    }else{
        echo "File upload failed, please try again.";
    }
}else{
    echo "Please select an image file to upload.";
}
?>