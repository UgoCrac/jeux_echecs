<?php

require_once 'PieceEchecs.php';
class Pion extends PieceEchecs {
    public function __construct($y, $x, $couleur) {
        parent::__construct($y, $x, $couleur);
    }

    public function peutAllerA(int $x, int $y) {
        // Déplacements différents pour les pions blancs et noirs
        if ($this->couleur === 'blanc') {
            if ($x === $this->x && $y === $this->y + 1) {
                return true; // Déplacement d'une case vers l'avant
            } else {
                return false; // Autres déplacements non autorisés
            }
        } else {
            if ($x === $this->x && $y === $this->y - 1) {
                return true; // Déplacement d'une case vers l'avant
            } else {
                return false; // Autres déplacements non autorisés
            }
        }
    }
}
?>