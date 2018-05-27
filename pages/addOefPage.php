<?php
include_once "../models/Stap.php";
include_once "../models/Oef.php";
include_once "../models/Vraag.php";
include_once "../models/User.php";
session_start();
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


$oef= $_SESSION["listOef"];
//echo $oef->getNaam();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<h2>Wat wilt u doen?</h2>
<div class="main-wrapper-step">
    <?php
    include_once "../models/Oef.php";
    //$_SESSION["listOef"]=$lijstoef;=> gebruikt deze session variable
        $oef=new Oef();
        $oef->setNaam($_GET["naamOef"]);
        $oef->setAantalStappen($_GET["aantalStappn"]);
        $_SESSION["listOef"]=$oef;
        //array_push($_SESSION["listOef"],$oef);

        $aantal=$_GET["aantalStappn"];
        $oef->setAantalStappen($aantal);
    ?>
    <form action="addStapToOef.php" method="get" class="stap-form">
    <?php
     for($i=1;$i<=$aantal;$i++){
          ?>
         <div class="stap-wrapper" id=<?php echo $i?>>
            <h3 class="stap-top"> Stap <?php echo $i?></h3>
                <div class="stap-nr">
                     <label class="disabled">Stap Nr:</label>
                     <input class="disabled" readonly name="stapNr" class="stapNr" value="<?php echo $i?>" />
                 </div>
                 <div class="stap-naam">
                     <label>Uitleg stap:</label>
                     <input type="text" name=<?php echo "naamStap".$i?>/>
                 </div>
                 <div class="stap-feedback">
                     <label>Feedback:</label>
                     <input type="text" name=<?php echo "FeedbackStap".$i?>/>
                 </div>
                 <div class="stap-soort">
                    <label >Soort vraag: </label>
                    <select class="soortVraag" name=<?php echo "soortVraag".$i?>>
                        <option value="" selected disabled hidden>Kies Soort vraag</option>
                        <option value="Materiaal">Materiaal</option>
                        <option value="Keuze">Keuze</option>
                    </select>
                </div>
                <div class="stap-optie">
                     <label>Aantal opties toe te voegen:</label>
                     <input name=<?php echo "aantal".$i ?> class=<?php echo "aantal".$i ?>></input>
                 </div>
                 <button class="geefVragenIn" id=<?php echo $i?> name="aantalvragen" type="submit" form="form<?php echo $i?>" >Geef vragen in voor stap <?php echo $i?></button>
                 <div class="toe-te-voegen">
                     
                 </div>
         </div>

        <?php

      }

    ?>
        <input class="stap-aanmaken" type="submit" value="Opdracht aanmaken"></input>

    </form>
</div>
</body>
<footer>
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/script.js"></script>

</footer>
</html>
