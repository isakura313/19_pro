<?php

require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/connect.inc.php";
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/config.inc.php";
$ans = $_POST['choose'];
$id = $_POST['id'];
$header = $_POST['header'];
$parag = $_POST['parag_cont'];
$ordera = $_POST['ordera'];


print_r($_POST);
print_r($_FILES);
// echo($ans);

if($ans=="ins"){
    print_r($_FILES);
    $upload_name =  uniqid() .$_FILES['picture']['name']; // несовершенный код
    $path = "img/upload_img/{$upload_name}";
    $uploaddir  = $_SERVER["DOCUMENT_ROOT"]."/19_pro/img/upload_img/";
    $uploadfile = $uploaddir .$upload_name;
    //  сам процесс перемещения файла на сервер
    // процесс валидизации размера
    if($_FILES['picture']['size']>= 2000000){
        echo "так много нельзя!Найдите картинку поменьше!";
        die();
    }
    //нужно добавить валидизацию на скрипт

    if(move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile )){
        echo "файл в общем корректный и все работает верно";
    } else{
        echo "Возможна атака с помощью файловой загрузки";
    }

    $sql = "INSERT INTO cards VALUES ('$id', '$path', '$header', '$parag', '$ordera' )";
   if($connect->query($sql)){
   echo "Новая запись успешно загружена $back";
   } else{
       echo "Произошло фиаско";
   }
   $connect -> close();
   exit();  
}

if($ans=="del"){
    $id = trim($id);
    $sql_path = "SELECT img FROM cards WHERE id='$id'";
    $result = $connect-> query($sql_path);
    while($row = $result->fetch_assoc()){
        echo " картинка успешна удалена";
        unlink($_SERVER["DOCUMENT_ROOT"]."/19_pro/".$row['img']);
    }
    $sql = "DELETE FROM cards WHERE id='$id'";

    if($connect->query($sql)){
        echo "Запись успешно удалена";
        } else{
            echo "Произошло фиаско";
        }
        $connect -> close();
        exit(); 
}

if($ans=="update"){
$id = trim($id);

$sql_path = "SELECT img FROM cards WHERE id='$id'";
$result = $connect-> query($sql_path);
while($row = $result->fetch_assoc()){
    echo " картинка успешна удалена";
    echo "<br>";
    unlink($_SERVER["DOCUMENT_ROOT"]."/19_pro/".$row['img']);
}

$upload_name =  uniqid() .$_FILES['picture']['name']; // несовершенный код
$path = "img/upload_img/{$upload_name}";
$uploaddir  = $_SERVER["DOCUMENT_ROOT"]."/19_pro/img/upload_img/";
$uploadfile = $uploaddir .$upload_name;
//  сам процесс перемещения файла на сервер
// процесс валидизации размера
if($_FILES['picture']['size']>= 2000000){
    echo "так много нельзя!Найдите картинку поменьше!";
    die();
}
//нужно добавить валидизацию на скрипт

if(move_uploaded_file($_FILES['picture']['tmp_name'], $uploadfile )){
    echo "файл в общем корректный и все работает верно";
} else{
    echo "Возможна атака с помощью файловой загрузки";
}
$sql = "UPDATE cards SET img='$path',header='$header', parag='$parag', ordera='$ordera' WHERE id='$id'";

if($connect->query($sql)){
    echo "Запись успешно отредактирована $back $back_timer";

    } else{
        echo "Произошло фиаско";
    }
    $connect -> close();
    exit(); 
}




?>