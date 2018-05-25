<?php
session_start();


var_dump($oef);

if (isset($_SESSION["user"])){
    if($_SESSION["user"]==null){
        header("location:LoginPage.php");
    }else{
        //doe gwn niets
    }
}
else{
    header("location:LoginPage.php");
}
?>
<?php

$oef=$_SESSION["listOef"];
include_once "../models/Stap.php";
include_once "../models/Oef.php";
include_once "../models/Vraag.php";

?>
<html>
<header>

</header>
<body>


<?php
//$_SESSION["listOef"]=$lijstoef;=> gebruikt deze session variable

?>
<?php // we gaan de oef afdrukken?>
<div id="overzicht">
<div class="infoOef">
<h1>"OEF TEST";</h1>
<p>Naam oef:<?php echo $oef->getNaam();?></p>
    <p>aantal stappen :<?php echo $oef->getAantalStappen();?></p>
</div>

    <?php
    $stap=new Stap();
//loop alle stappen af
for ($j=1;$j<=$oef->getAantalStappen();$j++){
   //nieuwe stap maken
    $stap->setNaam($_GET["naamStap".$j]);
    $stap->setSoortVraag($_GET["soortVraag".$j]);
    $stap->setAantalVragen($_GET["aantal".$j]);
    ?>
    <?php//display the stap?>
    <div id="stap<?php echo $j?>">

    <h1>"STAP TEST";</h1>

    <p>stapnaam: <?php echo "stapnaam:" .$stap->getNaam();?></p>

    <p>soort stap <?php echo "soortstap:".$stap->getSoortVraag();?></p>

    <p>aantalVragen <?php echo "aantalVragen:".$stap->getAantalVragen();?></p>
    </div>
<?php
    //stap vullen met vragen
    for ($y=1;$y<=$stap->getAantalVragen();$y++){
        $vraag=new Vraag();

        $vraag->setNaam($_GET["nr".$j.$y]);
        $vraag->setContent($_GET["nr".$j.$y]);
        $vraag->setJuistOfFout($_GET["JF".$j.$y]);
        $stap->addVraag($vraag);
        ?>
        <div id="vraag <?php $y?>">
            <h2>VRAAG TEST</h2>
            <p>Naam: <?php echo $vraag->getNaam()?></p>

            <p>Content:<?php echo $vraag->getContent() ?></p>
            <p>JF:<?php echo $vraag->getJuistOfFout()?></p>
        </div>
        <?php

    }
    //stap in array steken
    $oef->addStap($stap);
    //opnieuw uitvoeren

}
//json klaarzetten om te pushen naar DB
    ini_set("allow_url_fopen", 1);
    $json = file_get_contents('https://ceb1f13c-d64d-4ddc-a4b4-12833d7843eb-bluemix.cloudant.com/projectmobileapps/c0a82b412d43ff4cbb362eccfef0d002');
    $obj=json_decode($json,true);
    ?>
    <p id="json" style="visibility: hidden"></p>
    <button id="click">click me</button>
</div>

</body>
<footer>
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/test.js"></script>
</footer>
</html>