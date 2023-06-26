<?php

require_once 'PieceEchecs.php';

class Cavalier extends PieceEchecs{
    public function __construct($y, $x, $couleur) {
        parent::__construct($y, $x, $couleur);
}
    public function peutAllerA(int $x, int $y){
        if (($y == $this->y + 2 || $y == $this->y - 2) && ($x == $this->x + 1 || $x == $this->x - 1)) {
            return true;
        } else {
           return false;
        } 
    }

}


?>