<?php

$mysqli = new mysqli("localhost","root","","databasevoormeubelwinkel");

$sql = "SELECT * FROM Meubel";
$result = $mysqli -> query($sql);

while($rij = $result->fetch_assoc()){
    echo $rij["naam"];
}

print("yes weet ik zeker");

?>



<style>
    h3{
        color:orange;
    }    
</style>
<div>
    <h1>Dit zijn onze meubels</h1>
</div>
<div>
    <h3>Tafel</h3>
    <img src="tafel.jpg" width="150px">

</div>
<div>
    <h3>Stoel</h3>
    <img src="stoel.jpg" width="150px">

</div>
<div>
    <hr>
</div>
