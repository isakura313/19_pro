<?php
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/classes/Db.php";
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/classes/Card.php";
header("Access-Control-Allow-Origin: *");

function show_card($sql){
    $result = Db::getdbconnect()->query($sql);
    $cards = ["Img"=>[], "Header"=> [], "Parag" => [], "Ordera" => []];
    while($row = $result->fetch_assoc()){
        array_push($cards["Img"], $row["img"]);
        array_push($cards["Header"], $row["header"]);
        array_push($cards["Parag"], $row["parag"]);
        array_push($cards["Ordera"], $row["ordera"]);
    }
    //инициализация объекта card
    //генерация его html как в cads.inc.php
    // его возвращение в конце работы функции
    // ее в js нужно добавить через insertAdjacentHTML
    //cards.inc.php больше не нужны
    // его импорт в index.php тоже не нужен

}

if($_GET['price'] =='asc') {
    $sql = "SELECT * FROM cards ORDER BY parag ASC";
    show_card($sql);
    

} elseif($_GET['price'] =='desc') {
    $sql = "SELECT * FROM cards ORDER BY parag DESC";
    show_card($sql);

}


?>