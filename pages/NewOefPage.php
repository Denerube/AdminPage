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
?>

<!DOCTYPE html>
    <html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<h1>Maak nieuwe oefening</h1>
<form id="root" action="addOefPage.php" method="get">
    <label>Naam nieuw labo</label>
    <input name="naamOef" type="text">
    <label>Hoeveel stappen bevat het nieuwse labo?</label>
    <input name="aantalStappn" type="text" required>
    <input id="addform" type="submit"></input>
</form>
</body>
<footer>
    <script src="../js/jquery-3.1.1.min.js"></script>
    <script src="../js/script.js"></script>
</footer>
</html>

<?php
$_SESSION["listOef"]= new Oef();

?>
<?php
?>