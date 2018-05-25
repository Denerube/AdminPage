<?php
include_once "../models/Oef.php";
include_once "../models/Stap.php";
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
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Wat wilt u doen?</h1>
<?php


    //$_SESSION["listOef"]=$lijstoef;=> gebruikt deze session variable
    $oef=$_SESSION["listOef"];
    $oef->setNaam($_GET["naamOef"]);
    $oef->setAantalStappen($_GET["aantalStappn"]);


    $aantal=$_GET["aantalStappn"];
?>
<form action="addStapToOef.php" method="get">
<?php
 for($i=1;$i<=$aantal;$i++){
      ?>

     <div id="<?php echo $i?>">

        <p> stap <?php echo $i?></p>
        <label>Stap:</label>
             <label>Stap Nr:</label>
             <input readonly name="stapNr" class="stapNr" value="<?php echo $i?>" />
             <label>Naam stap</label>
             <input type="text" name="<?php echo "naamStap".$i?>"/>
            <label>feedback Stap</label>
            <input type="text" name="<?php echo "feedback".$i?>"/>
        <label >Soort vraag</label>
        <select class="soortVraag" name=<?php echo "soortVraag".$i?>>
            <option value="" selected disabled hidden>Kies Soort vraag</option>
            <option value="Keuzevraag">Keuzevraag</option>
        </select>
             <br/>
             <label>Hoeveel verschillende opties zijn er?</label>
             <input name=<?php echo "aantal".$i ?> class="aantal"></input>
             <br/>
             <button class="geefVragenIn" name="aantalvragen" type="submit" form="form<?php echo $i?>" >Geef vragen in voor stap <?php echo $i?></button>


     </div>

    <?php

  }
$_SESSION["listOef"]=$oef;
?>
    <input type="submit" >HALLO</input>

</form>
</body>
<footer>
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/script.js"></script>

</footer>
</html>
