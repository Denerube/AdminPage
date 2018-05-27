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
    <main class="main-wrapper">
        <h2>Maak een nieuwe oefening</h2>
        <form id="root" action="addOefPage.php" method="get">
            <div class="nieuwe-oef-input">
                <label>Beschrijving van de nieuwe oefening:</label>
                <br>
                <input name="naamOef" type="text">
                <br>
            </div>
            <div class="nieuwe-oef-input">
                <label>Aantal stappen van de nieuwe oefening:</label>
                <br>
                <input name="aantalStappn" type="text" required>
                <br>
            </div>
            <input class="nieuwe-oef-submit" id="addform" type="submit" value="Indienen"></input>
        </form>
    </main>

    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>

<?php
$_SESSION["listOef"];

?>
<?php
?>