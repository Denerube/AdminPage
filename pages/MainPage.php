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
    <title>Opties</title>
    <link rel="stylesheet" href="../css/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<main class="main-wrapper">
		<h2 class="main-header">Wat wilt u doen?</h2>
		<a class="main-button enabled" href="NewOefPage.php">Nieuwe oefening aanmaken</a>

		<a class="main-button disabled" href="#">Andere optie voor toekomst</a>
		<a class="main-button disabled" href="#">Andere optie voor toekomst</a>
	</main>
</body>
</html>

<?php


?>