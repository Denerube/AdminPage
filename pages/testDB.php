<html>




</html>


<?php
ini_set("allow_url_fopen", 1);
$json = file_get_contents('https://c41f0f46-dc80-44f1-a4b4-cfc752fa88b5-bluemix.cloudant.com/test/708d5f21df17db06806e80fe13a1cb26');
$obj = json_decode($json,true);
$lol= array("jet"=>"value");
$kek= array("key"=>"val","keyyyy"=>$lol);
$jtest=array("testrij1" => $kek);
$obj["testrij1"];
array_push($obj["testrij1"],$jtest);
echo "<br/>";
echo json_encode($obj);
$pas=json_encode($obj);
?>

<form id="click">
    <p  style="display: none" id="test" ><?php echo  $pas?></p>
    <input name="h" value="hallo">
    <input type="submit">
</form>
<script src="../js/jquery-3.1.1.min.js"></script>
<script src="../js/test.js"></script>
