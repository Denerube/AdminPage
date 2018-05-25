<?php
session_start();
include "models/User.php";
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
$user=new User();
$_SESSION["user"]=null;

if( $result==NULL) {

    $_SESSION["user"]=null;
    $user= NULL;
    header("location:pages/LoginPage.php");


    }elseif($json["userData"]["isAdmin"]==1){
    //var_dump($json);
    $user->setUserName($json["userData"]["email"]);
    $user->setToken($json["userData"]["token"]);
    $user->setIsAdmin($json["userData"]["isAdmin"]);
    $_SESSION["user"]=$user;
    header("location:pages/Mainpage.php");
    }
    else{
        $_SESSION["user"]=null;
        header("location:pages/LoginPage.php");

    }

?>