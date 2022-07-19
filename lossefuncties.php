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
    function headVanPagina(){
        echo "<h1>AllermooisteWebsite</h1>";
    }
?>