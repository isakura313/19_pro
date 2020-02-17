<?php
class Card
{
public function __construct($id, $img, $header, $parag, $ordera)
{
    $this->id = $id;
    $this->img = " <div class='card__img' style='background-image:url(".Util::get_full_img($img).");'> </div>";
    $this->header = "<h3 class='card__h3'>". $header."</h3>";
    $this->parag = "<div class='card__line'></div>
                     <p class='card__p'>".$parag."</p>";
    $this->ordera = $ordera;
}

}