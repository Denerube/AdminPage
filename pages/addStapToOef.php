<?php
include_once "../models/Stap.php";
include_once "../models/Oef.php";
session_start()?>
<!DOCTYPE html>
<html >
<body>
<form action="../AddVragenToStap.php"
    <label>Stap nr:<?php echo $_GET["stapNr"]?></label>
    <br>
    <label>Soort vraag:</label>


    <?php

    //$_SESSION["listOef"] gebruikt deze session variable
    $oef=$_SESSION["listOef"];
    $stap=new Stap();
    $stap->setNaam($_GET["naamVraag"]);
    $stap->setSoortVraag($_GET["soortvraag"]);
    $stap->setAantalVragen($_GET["aantal"]);
    $oef->addStap($stap);
    $_SESSION["listOef"]=$oef;
    $aantal=$_GET["aantal"];



    switch ($_GET["soortvraag"]) {
        case "Materiaal":
            echo "Mat";
            ?>
        <br>
    <?php


            ?>
    <?php
            for ($j=0;$j<$aantal;$j++) {

                ?>
                <input type="file" name="Nr<?php echo $j+1?>">geef materiaal in<?php echo $j+1?> (op volgorde)</input>
                <input type="radio" name="JF<?php echo $j+1?>" value="juist">juist</input>
                <input type="radio"name="JF<?php echo $j+1?>"value="fout">fout</input>
                <br>
                <?php
            }
            ?>
            <input type="hidden" name="MaxMateriaal" value="<?php echo $j ?>"/>
        <br>
        <input type="submit" value="vul in"></input>
    <?php
            break;
        case "Keuze":
            echo "Keuze";

            ?>
            <br>
            <?php
            for ($j=0;$j<$aantal;$j++) {

                ?>
                geef keuze <?php echo $j+1?> in (op volgorde)<input type="text" name="Nr<?php echo $j+1?>"></input>
                <input type="radio" name="JF<?php echo $j+1?>" value="juist">juist</input>
                <input type="radio"name="JF<?php echo $j+1?>"value="fout">fout</input>
                <br>
                <?php
            }

            ?>
    <input type="hidden" name="MaxMateriaal" value="<?php echo $j ?>"/>
    <br>
    <input type="submit" value="vul in"></input>

<?php
            break;

    }

    ?>

</form>

</body>
</html>
