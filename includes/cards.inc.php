<?php
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/includes/config.inc.php";
require $_SERVER['DOCUMENT_ROOT']. "/19_pro/classes/Card.php";

ECHO "<section class='cards' id='about'>";
        for ($i=0; $i < count($cards["Header"]); $i++) {
            $card = new Card($cards_cms["Id"][$i], $cards_cms["Img"][$i], $cards_cms["Header"][$i],$cards_cms["Parag"][$i],$cards_cms["Ordera"][$i]);
           echo "<div class='card animated zoomIn delay-{$i}s'>";
                    echo $card->img;
                    echo $card->header;
                    echo $card->parag;
               echo "</div>";
        }
ECHO " </section>";