<?php
function verbindmetdatabase(){
    return new mysqli("localhost","root","","databasevoormeubelwinkel");
}
function toonAlleRijenVanEenMeubelRS($rs){
    while($rij = $rs->fetch_assoc()){
        echo "<div>
            <h3>".$rij["naam"]."</h3>
            <img src=".$rij["plaatje"]." width=150px>
            <button onclick=weGaanNuKopen(".$rij["id"].")> Koop Deze ! </button>
            </div>";
    }
}










$mysqli = verbindmetdatabase();

$sql = "SELECT * FROM Meubel";
$result = $mysqli -> query($sql);
?>
    <script>
        function weGaanNuKopen(itemid){
            alert("we gaan kopen: "+ itemid);
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