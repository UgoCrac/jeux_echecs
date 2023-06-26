<?php

require_once 'PieceEchecs.php';

class Fou extends PieceEchecs{
    public function __construct($y, $x, $couleur) {
        parent::__construct($y, $x, $couleur);
}
    public function peutAllerA(int $x, int $y){
        $deltaX = abs($x - $this->x);
        $deltaY = abs($y - $this->y);
        
        if ($deltaX == $deltaY) {
            return true; // Le fou peut aller sur cette case en diagonale
        } else {
            return false; // Le fou ne peut pas aller sur cette case en diagonale
        }
    }

}


?>