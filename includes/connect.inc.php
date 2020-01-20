<?php
$connect = new mysqli("localhost", "root", "", "14_10");
$connect-> set_charset("utf8");
if ($connect->connect_errno) {
    die('Ошибка соединения: ' . $connect->connect_errno);
}

?>