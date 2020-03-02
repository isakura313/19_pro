<?php
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/connect.inc.php";

$back = "<p><a href=\"javascript: history.back()\">Вернуться назад</a></p>";
$back_timer = "<script>
    setTimeout(()=> window.history.back(), 3000)
</script>";

if($result = $connect->query("SELECT * FROM keywords")){
    $keywords = [];
    while($row = $result->fetch_assoc()){
        array_push($keywords, $row["keywords"]);
    }
    $result->close();
}

 if($result = $connect->query("SELECT * FROM anchors")){
    $anchor = ["Color" =>[], "Path"=> [],"Content"=>[], "Order"=>[]];
    while($row = $result->fetch_assoc()){
        array_push($anchor["Color"], $row["color"]);
        array_push($anchor["Path"], $row["path"]);
        array_push($anchor["Content"], $row["content"]);
        array_push($anchor["Order"], $row["ordera"]);
    }
    $result->close();
 }



 if($result = $connect->query("SELECT * FROM info ORDER BY ordera")){
    $info = [];
    while($row = $result->fetch_assoc()){
        array_push($info, $row["content"]);
    }
    $result->close();
}

if($result = $connect->query("SELECT * FROM info ORDER BY ordera")){
    $info_cms = ["id" =>[], "content"=> [],"ordera"=>[]];
    while($row = $result->fetch_assoc()){
        array_push($info_cms["id"], $row["id"]);
        array_push($info_cms["content"], $row["content"]);
        array_push($info_cms["ordera"], $row["ordera"]);
    }
    $result->close();
}




if($result = $connect->query("SELECT * FROM headers")){
    $headers = [];
    while($row = $result->fetch_assoc()){
        array_push($headers, $row["content"]);
    }
    $result->close();
}


if($result = $connect->query("SELECT * FROM li_info")){
    $li_info = [];
    while($row = $result->fetch_assoc()){
        array_push($li_info, $row["content"]);
    }
    $result->close();
}




if($result = $connect->query("SELECT * FROM faq ORDER BY ordera")){
    $faq = ["QUEST"=>[],"ANSWER"=>[]];
    while($row = $result->fetch_assoc()){
        array_push($faq["QUEST"], $row["quest"]);
        array_push($faq["ANSWER"], $row["answer"]);
    }
    $result->close();

}


if($result = $connect->query("SELECT * FROM cards")){
    $cards = ["Img"=>[], "Header"=> [], "Parag" => [], "Ordera" => [], "Date"=> []];
    while($row = $result->fetch_assoc()){
        array_push($cards["Img"], $row["img"]);
        array_push($cards["Header"], $row["header"]);
        array_push($cards["Parag"], $row["parag"]);
        array_push($cards["Ordera"], $row["ordera"]);
        array_push($cards["Date"], $row["date"]);
    }
    $result->close();

}
if($result = $connect->query("SELECT * FROM cards")){
    $cards_cms = ["Id"=>[], "Img"=>[], "Header"=> [], "Parag" => [], "Ordera" => [], "Date" => []];
    while($row = $result->fetch_assoc()){
        array_push($cards_cms["Id"], $row["id"]);
        array_push($cards_cms["Img"], $row["img"]);
        array_push($cards_cms["Header"], $row["header"]);
        array_push($cards_cms["Parag"], $row["parag"]);
        array_push($cards_cms["Ordera"], $row["ordera"]);
        array_push($cards_cms["Date"], $row["date"]);
    }
    $result->close();

}


