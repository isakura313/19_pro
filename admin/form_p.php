<?php

require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/connect.inc.php";
$ans = $_GET['choose'];
$id = $_GET['id'];
$p = $_GET['parag_cont'];
$ordera = $_GET['ordera'];
print_r($_GET);
// echo($ans);

if($ans=="ins"){
   $sql = "INSERT INTO info VALUES ('$id', '$p', '$ordera')";
   if($connect->query($sql)){
   echo "Новая запись успешно загружена";
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
        echo "Записть успешно удалена";
        } else{
            echo "Произошло фиаско";
        }
        $connect -> close();
        exit(); 
}
if($ans=="update"){
//здесь у нас происходит обновление нашего параграфа

}



?>