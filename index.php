<?php
//include_once ("Config.ini");
include_once("vendor/database/Database.php");
include_once("template/assets/styles.php");
include('vendor/notifications/Notifications.php');
//include('vendor/notifications/templates/Notification.tpl');
include('template/header/header.php');
//$data =new Database("localhost","endie","Quantum228","portfolio");
//$data::queryResult("SELECT * FROM `users`");

$db = new Database ();

//$check = $db->queryResult("SELECT * FROM `users`");

require('template/assets/js/js.php');
include('template/footer/footer.php');
?>


