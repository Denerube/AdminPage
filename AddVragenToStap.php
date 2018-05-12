<?php
include_once "../models/Stap.php";
include_once "../models/Oef.php";
include_once "../models/Vraag.php";
session_start();
//$_SESSION["listOef"] gebruikt deze session variable
$oef=$_SESSION["listOef"];
$oef=new Oef();



?>