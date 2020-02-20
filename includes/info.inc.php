<?php
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/config.inc.php";
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/classes/Info.php";

echo "<section class='info' id='main'>
<h3 class='info__h3'>
    {$headers[0]}
</h3>
<div class='info_text'> ";
for ($i=0; $i < count($info); $i++) { 
    // С помощью класса
    $info_item = new Info($info_cms["id"][$i], $info_cms["content"][$i], $info_cms["ordera"][$i]);
    echo "<p class='info_text__p'>";
    echo $info_item->content;
    echo "</p>";
}
echo "</div>
</section>";
?>