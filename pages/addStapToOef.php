<?php
include_once "../models/Stap.php";
include_once "../models/Oef.php";
include_once "../models/Vraag.php";

session_start();
//$_SESSION["listOef"]=$lijstoef;=> gebruikt deze session variable
$oef=$_SESSION["listOef"];
echo"OEF TEST";
echo "<br/>";
echo $oef->getNaam();
echo "<br/>";
//loop alle stappen af
for ($j=1;$j<=$oef->getAantalStappen();$j++){
   //nieuwe stap maken
    $stap=new Stap();

    $stap->setNaam($_GET["naamStap".$j]);
    $stap->setSoortVraag($_GET["soortVraag".$j]);
    $stap->setAantalVragen($_GET["aantal".$j]);

    echo "STAP TEST";
    echo "<br/>";
    echo "stapnaam:" .$stap->getNaam();
    echo "<br/>";
    echo "soortstap:".$stap->getSoortVraag();
    echo "<br/>";
    echo "aantalVragen:".$stap->getAantalVragen();
    echo "<br/>";
    //stap vullen met vragen
    for ($y=1;$y<=$stap->getAantalVragen();$y++){
        $vraag=new Vraag();

        $vraag->setNaam($_GET["nr".$j.$y]);
        $vraag->setContent($_GET["nr".$j.$y]);
        $vraag->setJuistOfFout($_GET["JF".$j.$y]);
        $stap->addVraag($vraag);
        echo "VRAAG TEST";

        echo "<br/>";
        echo "naam:".$vraag->getNaam();
        echo "<br/>";
        echo "content:".$vraag->getContent();
        echo "<br/>";
        echo "JF:".$vraag->getJuistOfFout();
        echo "<br/>";
    }
    //stap in array steken
    $oef->addStap($stap);
    //opnieuw uitvoeren
}


?>