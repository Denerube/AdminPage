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
<p>er wordt naar de databse gepushed even geduld</p>

</div>

    <?php
    $stap=new Stap();
//loop alle stappen af
for ($j=1;$j<=$oef->getAantalStappen();$j++){
   //nieuwe stap maken
    $stap->setNaam($_GET["naamStap".$j]);
    $stap->setSoortVraag($_GET["soortVraag".$j]);
    $stap->setAantalVragen($_GET["aantal".$j]);
    $stap->setFeedback($_GET["feedback".$j]);
    ?>
    <?php//display the stap?>
    <div id="stap<?php echo $j?>">


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

        </div>
        <?php

    }
    //stap in array steken
    $oef->addStap($stap);
    //opnieuw uitvoeren

}?>

</div>
<p>ale dan</p>
</body>

<?php
//json klaarzetten om te pushen naar DB
    //json uit de db trekken
    ini_set("allow_url_fopen", 1);
    $json = file_get_contents('https://c41f0f46-dc80-44f1-a4b4-cfc752fa88b5-bluemix.cloudant.com/testdatabase/82e256d2d40c54bac03da4badfd243c3');
    $obj=json_decode($json,true);
    $stappen=null;
    $beschrijving=null;
    var_dump($oef);
    for ($c=0;$c< $oef->getAantalStappen();$c++){
        $kijk=$oef->getStappen()[$c]->getSoortVraag();
        $beschrijving=array("beschrijving"=>$oef->getStappen()[$c]->getNaam());
        switch ($kijk) {
            case "KEUZEVRAAG":
                $antwoorden=array();
                $mog=array();
                for ($k=0;$k<$oef->getStappen()[$c]->getAantalVragen();$k++) {


                    if($oef->getStappen()[$c]->getVragen()[$k]->getJuistOfFout()=="JUIST") {
                        //juiste antwoorden invoegen

                        array_push($antwoorden,$oef->getStappen()[$c]->getVragen()[$k]->getContent());

                        //$antwoord = array("antwoord" => $oef->getStappen()[$c]->getVragen()[$k]->getContent());
                    }
                    elseif($oef->getStappen()[$c]->getVragen()[$k]->getJuistOfFout()=="FOUT"){

                        array_push($mog,$oef->getStappen()[$c]->getVragen()[$k]->getContent());
                        //$mogelijheden=array("mogelijkheden"=>$mog);
                    }


                }
                break;
    }
        $feedback=$oef->getStappen()[$c]->getFeedback();
        $type=$oef->getStappen()[$c]->getSoortVraag();
        $vraag=$oef->getStappen()[$c]->getNaam();

        $antwoord=array("correct"=>$antwoorden,"mogelijkheden"=>$mog);
        //$displayantwoorde=array("antwoord"=>$antwoord);
        $rest=array("antwoord"=>$antwoord,"feedback"=>$feedback,"type"=>$type,"vraag"=>$vraag);

    }




    //json file klaarzetten om naar JS te sture
    $obj["overzicht"][$oef->getNaam()][$oef->getStappen()[$c]->getNaam()]=$rest;
    //var_dump($obj);
    $pas=json_encode($obj,true);
    ?>

<form id="click">
    <p  style="display: none" id="test" ><?php echo  $pas?></p>
    <input type="submit">
</form>
<footer>
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/test.js"></script>
</footer>
</html>