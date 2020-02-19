<?php
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/connect.inc.php";
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/config.inc.php";
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/classes/User.class.php";
// получаем данные из пост
// валидизация данных

// данные пользователя отправляются в базу данных
//пишется что пользователь зареган успешно
$mysqli= mysqli_connect(
    'localhost',  /* Хост, к которому мы подключаемся */
    'root',       /* Имя пользователя */
    '',   /* Используемый пароль */
    '14_10');
$user = new User();
$name = $_POST["name"];
$mail = $_POST["email"];
//$name = trim($name);
//$mail = trim($mail); // обрежу пробелы если пользователь не понял
//$pattern_name = '/\w{3,}/';
//$pattern_mail = '/\w+@\w+\.\w+/';
//$pattern_password = '/(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])[a-zA-Z\d]{8,}/';

$password = $_POST["password"];
$dubl_password = $_POST["dubl_password"];


$user->register($name, $mail, $password, $dubl_password);

//if(preg_match($pattern_name, $name)  && preg_match($pattern_mail, $mail)
//    &&  $password == $dubl_password){
//    $sql_test = "SELECT * FROM users WHERE email = '$mail'";
//    $result_test = $connect->query($sql_test);
//    while($row = $result_test-> fetch_assoc()){
//        if($row["email"] == $mail){
//            echo " есть пользователь с таким именем";
//             die();
//        }
//    }
//
//    $password = md5($password);
//
//    $sql = "INSERT INTO users VALUES (NULL, '$name','$mail','$password')";
//    if($connect->query($sql)) {
//        echo "<h1>Вы успешно зарегестрированы </h1>
//        <script>
//            setTimeout(()=>{
//                window.location.assign('http://localhost:8080/admin');
//            }, 2000)
//        </script>
//        ";
//        // sleep(2);
//        // header('http://localhost:8080/admin');
//
//    }
//
//} else{
//    echo "<h1> Ты что хакер? уходи! </h1>";
//    print_r($_POST);
//}

?>