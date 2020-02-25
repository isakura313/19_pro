<?php
    require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/connect.inc.php";
    require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/config.inc.php";

    $ans = $_POST['choose'];
    $id = $_POST['id'];
    $color = $_POST['color'];
    $path = $_POST['path'];
    $content = $_POST['content'];
    $ordera = $_POST['ordera'];
    
    if($ans=="ins"){
        $sql = "INSERT INTO anchors VALUES ('$id', '$color', '$path', '$content', '$ordera')";
        if ($connect->query($sql)) {
            echo "Новая запись успешно загружена $back $back_timer";
        } else {
            echo "Произошло фиаско";
        }
        $connect -> close();
        exit();  
    }

    if($ans=="del"){
        $id = trim($id);
        $sql = "DELETE FROM anchors WHERE id='$id'";
        if ($connect->query($sql)) {
            echo "Запись успешно удалена $back $back_timer";
        } else {
            echo "Произошло фиаско";
        }
        $connect -> close();
        exit();  
    }

    if($ans=="update"){
        $id = trim($id);
        $sql = "UPDATE anchors SET color='$color', path='$path', content='$content', ordera='$ordera'  WHERE id='$id'";
        if($connect->query($sql)){
            echo "Запись успешно отредактирована $back $back_timer";
        } else {
            echo "Произошло фиаско";
        }
        $connect -> close();
        exit(); 
    }