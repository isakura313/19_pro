<?php
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/config.inc.php";

ECHO "<section class='cards' id='about'>";
        for ($i=0; $i < count($cards["Img"]); $i++) { 
           echo "<div class='card animated zoomIn delay-{$i}s'>
                    <div class='card__img' style='background-image:url({$cards['Img'][$i]});'></div>
                    <h3 class='card__h3'>{$cards["Header"][$i]} </h3>
                    <div class='card__line'></div>
                    <p class='card__p'> {$cards["Parag"][$i]}</p>
                </div>";
        }
ECHO " </section>";