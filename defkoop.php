<?php
    include("lossefuncties.php");
    $p = $_GET["pid"];
    $m = $_GET["mid"];


    $sql = "UPDATE meubel SET `klant_id`=$p WHERE id = $m";
    $mysqli = verbindmetdatabase();
    $mysqli -> query($sql);

//    echo $sql;
    header('Location: index.php');
?>
