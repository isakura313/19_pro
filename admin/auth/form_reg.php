<?php
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/connect.inc.php";
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/config.inc.php";
// получаем данные из пост
// валидизация данных

// данные пользователя отправляются в базу данных
//пишется что пользователь зареган успешно


$name = $_POST["name"];
$mail = $_POST["email"];
$password = $_POST["password"];
$dubl_password = $_POST["dubl_password"];



if($password == $dubl_password  ){

    //все норм продолжаем
    // id int
    // name varchar(100)
    // email  varchar(100)
    // password varchar(255)

    $sql_test = "SELECT * FROM users WHERE email = '$mail'";
    $result_test = $connect->query($sql_test);
    while($row = $result_test-> fetch_assoc()){
        if($row["email"] == $mail){
            echo " есть пользователь с таким именем";
             die();
        }
    }

    $password = md5($password);
    $sql = "INSERT INTO users VALUES (NULL, '$name','$mail','$password')";
    if($connect->query($sql)) {
        echo "ты зареган";
    }

} else{
    echo "<h1> Ты что хакер? уходи! </h1>";
}



?>