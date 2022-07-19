<?php

$mysqli = new mysqli("localhost","root","","databasevoormeubelwinkel");

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
    while($rij = $result->fetch_assoc()){
        echo "<div>
            <h3>".$rij["naam"]."</h3>
            <img src=".$rij["plaatje"]." width=150px>
            </div>";
    }
?>
<div>
    <hr>
</div>