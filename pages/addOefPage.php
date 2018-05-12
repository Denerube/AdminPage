<?php session_start()?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Wat wilt u doen?</h1>
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
 for($i=1;$i<=$aantal;$i++){
      ?>
     <div>
         <form action="addStapToOef.php" id="form<?php echo $i?>">
        <p> stap <?php echo $i?></p>
        <label>Stap:</label>
             <input readonly name="stapNr" value="<?php echo "stap".$i?>" />
             <label>Naam vraag</label>
             <input type="text" name="naamVraag"/>
        <label >Soort vraag</label>
        <select class="soortVraag" name="soortvraag">
            <option value="" selected disabled hidden>Kies Soort vraag</option>
            <option value="Materiaal">Materiaal</option>
            <option value="Keuze">Keuze</option>
        </select>
         </form>
         <button type="submit" form="form<?php echo $i?>" >Geef vragen in voor stap <?php echo $i?></button>
     </div>
    <?php

  }

?>
</body>
<footer>
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/script.js"></script>

</footer>
</html>
