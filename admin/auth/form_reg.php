<?php
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/connect.inc.php";
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/config.inc.php";
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/classes/User.class.php";



$user = new User();
$name = $_POST["name"];
$mail = $_POST["email"];

$password = $_POST["password"];
$dubl_password = $_POST["dubl_password"];


$user->register($name, $mail, $password, $dubl_password);


?>