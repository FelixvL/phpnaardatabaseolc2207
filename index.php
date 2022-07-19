<?php
include("lossefuncties.php");











$mysqli = verbindmetdatabase();

$sql = "SELECT * FROM Meubel";
$result = $mysqli -> query($sql);
?>
    <script>
        function weGaanNuKopen(itemid){
            window.location = "kooppagina.php?meubelid="+itemid;

        }

    </script>
    <style>
        h3{
            color:orange;
        }    
    </style>
    <div>
        <h1>Dit zijn onze meubels</h1>
    </div>

<?php
    toonAlleRijenVanEenMeubelRS($result);
?>
<div>
    <hr>
</div>