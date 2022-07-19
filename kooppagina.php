<?php
include("lossefuncties.php");

$mysqli = verbindmetdatabase();
$deidvandemeubel = $_GET["meubelid"];

$sql = "SELECT * FROM Meubel WHERE id = $deidvandemeubel;";
$result = $mysqli -> query($sql);

$meubel = $result->fetch_assoc();

echo "Ik heb een ".$meubel["naam"]." gekocht.<br><br>";
echo "<img src=".$meubel["plaatje"]." >"
?>

