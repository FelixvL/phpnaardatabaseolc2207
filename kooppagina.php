<?php
include("lossefuncties.php");
headVanPagina();
$mysqli = verbindmetdatabase();
$deidvandemeubel = $_GET["meubelid"];

$sql = "SELECT * FROM Meubel WHERE id = $deidvandemeubel;";
$result = $mysqli -> query($sql);

$meubel = $result->fetch_assoc();


?>

<script>
    function kopen(){
        meubel = <?= $deidvandemeubel ?>;
        persoon = localStorage.getItem("klantid");
        console.log(meubel + ">>>"+ persoon);
        window.location = "defkoop.php?pid="+persoon+"&mid="+meubel;
    }

</script>
<?php


echo "Ik heb een ".$meubel["naam"]." gekocht.<br><br>";
echo "<img src=".$meubel["plaatje"]." >";
echo "<button onclick=kopen()>koop definitief</button>";
?>

