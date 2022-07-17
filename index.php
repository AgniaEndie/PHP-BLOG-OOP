<?php
ini_set('display_errors','1');
ini_set('display_startup_errors','1');
error_reporting(E_ALL);
//include_once ("Config.ini");
include_once("vendor/database/Database.php");
include_once("theme/assets/styles.php");
include('vendor/notifications/Notifications.php');
include('vendor/auth/UserRegistry.php');
include('vendor/auth/UserAuth.php');
//include('vendor/notifications/templates/Notification.template');
include('theme/header/header.php');
//$data =new Database("localhost","endie","Quantum228","portfolio");
//$data::queryResult("SELECT * FROM `users`");


//REGISTRY_FORM_LOGIC
if($_POST['sign_up'] == "Регистрация"){
    $UserRegistry = new UserRegistry();
    $login = $_POST['login'];
    $password = $_POST['password'];
    $password_again = $_POST['password_again'];
    $email = $_POST['email'];

    $responce = $UserRegistry->registerUser($login,$password,$password_again,$email);
    if($UserRegistry->register_message == true){
        //echo "a";
        ?>

<?php

    }
    else{
        echo "error";
    }

}


//AUTH_FORM_LOGIC

if($_POST['sign_in'] == "Войти"){
    $UserAuth = new UserAuth();
    $login = $_POST['login'];
    $password = $_POST['password'];

    $responce = $UserAuth->authUser($login,$password);
    if($responce == true){
        $_SESSION['user'] = array(
            "login"=>$login
        );
    }else{
        echo "-";
    }
}

echo $_SESSION['user']['login'];









//echo $_SERVER['DOCUMENT_ROOT'].'/Config.ini';
$db = new Database();
//$db_use = $db->__construct();
$result = $db->queryResult("SELECT * FROM `users`");
$row = $result->fetch_array();
echo $row[1];
require('theme/assets/js/js.php');
include('theme/footer/footer.php');
?>


