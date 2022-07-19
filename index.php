<?php
function verbindmetdatabase(){
    return new mysqli("localhost","root","","databasevoormeubelwinkel");
}
function toonAlleRijenVanEenMeubelRS($rs){
    while($rij = $rs->fetch_assoc()){
        echo "<div>
            <h3>".$rij["naam"]."</h3>
            <img src=".$rij["plaatje"]." width=150px>
            </div>";
    }
}


$mysqli = verbindmetdatabase();

$sql = "SELECT * FROM Meubel";
$result = $mysqli -> query($sql);
?>

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