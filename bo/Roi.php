<?php
require_once 'PieceEchecs.php';
class Roi extends PieceEchecs {
    public function __construct($y, $x, $couleur) {
        parent::__construct($y, $x, $couleur);
    }

    public function peutAllerA(int $x, int $y) {
        $deltaX = abs($x - $this->x);
        $deltaY = abs($y - $this->y);

        // Vérifier si le déplacement est d'exactement une case dans n'importe quelle direction
        if (($deltaX == 1 && $deltaY == 0) || ($deltaX == 0 && $deltaY == 1) || ($deltaX == 1 && $deltaY == 1)) {
            return true; // Le roi peut aller sur cette case
        } else {
            return false; // Le roi ne peut pas aller sur cette case
        }
    }
}
?>