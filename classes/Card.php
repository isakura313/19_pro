<?php
class Card
{

public function __construct($id, $img, $header, $parag, $ordera, $date)
{
    #должно быть в конструкторе имя
    $this->id = $id;
    $this->img = $img;
    $this->header = $header;
    $this->parag = $parag;
    $this->ordera = $ordera;
    $this->date = $date;
}

public function return_view(){
    return "<div class='card__img' style='background-image:url(".Util::get_full_img($this->img).");'> </div>
    <h3 class='card__h3'>". $this->header."</h3>
    <div class='card__line'></div>
       <p class='card__p'>".$this->parag."</p>
       <p>".$this->date."</p>";

}
}