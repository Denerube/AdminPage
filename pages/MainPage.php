<?php
session_start();
include_once "../models/Stap.php";
include_once "../models/Oef.php";
include_once "../models/Vraag.php";
include_once "../models/User.php";

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
<a href="NewOefPage.php">Nieuwe oefening maken</a>

</body>
</html>

<?php


?>