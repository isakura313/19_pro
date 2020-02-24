<?php

require $_SERVER['DOCUMENT_ROOT'] . "/19_pro/includes/connect.inc.php";
require $_SERVER['DOCUMENT_ROOT'] . "/19_pro/includes/config.inc.php";
require $_SERVER['DOCUMENT_ROOT'] . "/19_pro/classes/User.class.php";

$user = new User();
$name = $_POST["name"];
$password = $_POST["password"];
$user -> login($name, $password);
