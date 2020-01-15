<?php
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/config.inc.php";

ECHO  "<div class='faq_wrapper'>";
for ($i=0; $i < count($faq["QUEST"]) ; $i++) { 
   echo "<div class='faq__panel'>
        <div class='faq__panel__quest'>
           <i class='fas fa-angle-up'></i>
            {$faq["QUEST"][$i]}
        </div>
        <div class='faq__panel__answer'>
            {$faq["ANSWER"][$i]}
        </div>
        </div>
   
   ";
}
// <div class='faq__panel'>

//     <div class='faq__panel__answer'>
//         
//     </div>
// </div>

echo "</div>";


?>