<?php

require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/connect.inc.php";
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/config.inc.php";
$ans = $_POST['choose'];
$id = $_POST['id'];
$header = $_POST['header'];
$parag = $_POST['parag_cont'];
$ordera = $_POST['ordera'];


print_r($_POST);
// echo($ans);

if($ans=="ins"){
    print_r($_FILES);
    $upload_name =  uniqid() .$_FILES['picture']['name']; // несовершенный код
    $path = "img/upload_img/. $upload_name";
    $uploaddir  = $_SERVER["DOCUMENT_ROOT"]."/19_pro/img/upload_img/";
    $uploadfile = $uploaddir .$upload_name;

    // здесь у нас будет движение этого файла и показатель, загрузился он или нет
   $sql = "INSERT INTO info VALUES ('$id', '$p', '$ordera')";
   if($connect->query($sql)){
   echo "Новая запись успешно загружена $back $back_timer";
   } else{
       echo "Произошло фиаско";
   }
   $connect -> close();
   exit();  
}

if($ans=="del"){
    $id = trim($id);
    $sql = "DELETE FROM info WHERE id='$id'";
    if($connect->query($sql)){
        echo "Записть успешно удалена $back $back_timer";
        } else{
            echo "Произошло фиаско";
        }
        $connect -> close();
        exit(); 
}
if($ans=="update"){
//здесь у нас происходит обновление нашего параграфа
$id = trim($id);
$sql = "UPDATE info SET content='$p', ordera='$ordera' WHERE id='$id'";
if($connect->query($sql)){
    echo "Запись успешно отредактировано $back $back_timer";

    } else{
        echo "Произошло фиаско";
    }
    $connect -> close();
    exit(); 
}




?>