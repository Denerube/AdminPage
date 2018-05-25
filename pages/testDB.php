<html>




</html>


<?php
ini_set("allow_url_fopen", 1);
$json = file_get_contents('https://c41f0f46-dc80-44f1-a4b4-cfc752fa88b5-bluemix.cloudant.com/test/708d5f21df17db06806e80fe13a1cb26');
$obj=json_decode($json,true);

$new=array("key"=>"sleutel","value"=>"waarde");
$obj["test"]["new"]=$new;
echo "<br/>";
echo"testobj";
echo "<br/>";
var_dump( $obj);

$pas=json_encode($obj);
echo "<br/>";
echo"testpas";
echo "<br/>";
var_dump($pas);
?>

<form id="click">
    <p  style="display: none" id="test" ><?php echo  $pas?></p>
    <input name="h" value="hallo">
    <input type="submit">
</form>
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/test.js"></script>
