<?php
include("lossefuncties.php");
headVanPagina();










$mysqli = verbindmetdatabase();

$sql = "SELECT * FROM Meubel";
$result = $mysqli -> query($sql);
?>
    <script>
        window.onload = function(){
            deklant = localStorage.getItem("klantid");
            console.log(deklant);
        }
        function wordtKlant(){
            localStorage.setItem("klantid", document.getElementById("voorklant").value);
        }
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
        <input type=text id=voorklant ><button onclick="wordtKlant()">wordt klant</button>
<?php
    toonAlleRijenVanEenMeubelRS($result);
?>
<div>
    <hr>
</div>
