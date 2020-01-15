<?php
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/config.inc.php";

ECHO "<section class='info info__centr'>
<h3 class='info__h3'>
    {$headers[1]}
</h3>
<ul class='info__ul'>";
for ($i=0; $i <count($li_info); $i++) { 
    ECHO "<li>{$li_info[$i]}</li>";
}
ECHO "</ul>
</section>"; ?>