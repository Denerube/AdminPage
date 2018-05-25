<?php
//TODO login
function post($email,$password){
    $url = 'http://dtsl.ehb.be/~stijn.rooselaers/PHP-Slim-Restful/api/index.php/login';
// use key 'http' even if you send the request to https://...
    $options = array(
        'http' => array(
            'header'  => "content-type: raw",
            'method'  => 'POST',
            'content' => "{\"email\":\"" .$email . "\", \"password\":\"" . $password . "\"}"
        )
    );
    $context  = stream_context_create($options);
    $result = file_get_contents($url, false, $context);
//var_dump($data);
    if ($result === FALSE) { /* Handle error */ }
    return $result;

};

//MAIN
$result=post($_POST["loginName"],$_POST["loginPas"]);
$json=json_decode($result,true);


if( $result==NULL) {
    echo "null";
    }elseif($json["userData"]["isAdmin"]==1){
    echo"gelukt";
    header("location:pages/Mainpage.php");
}
    else{
    echo "fuck off youre not a real admin";
    }

?>