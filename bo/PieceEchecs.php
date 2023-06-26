<?php 
require 'Couleur.php';
?>

<?php

abstract class PieceEchecs{

    protected int $y;
    protected int $x;
    protected $couleur;

    public function __construct(int $y, int $x, $couleur){
        $this->setY($y);
        $this->setX($x);
        $this->setCouleur($couleur);
    }


    /**
     * Get the value of y
     */ 
    public function getY()
    {
        return $this->y;
    }

    /**
     * Set the value of y
     *
     * @return  self
     */ 
    public function setY($y)
    {
        $this->y = $y;

        return $this;
    }

    /**
     * Set the value of x
     *
     * @return  self
     */ 
    public function setX($x)
    {
        $this->x = $x;

        return $this;
    }

    /**
     * Get the value of couleur
     */ 
    public function getCouleur()
    {
        return $this->couleur;
    }

    /**
     * Set the value of couleur
     *
     * @return  self
     */ 
    public function setCouleur($couleur)
    {
        $this->couleur = $couleur;

        return $this;
    }

    public function getCouleurCase(){
        $result = $this->x * $this->y;
        if ($result % 2 == 0) {
            return true;
        } else{
            return false;
        }

    }

    public function estDansLEchiquier(){
        if ($this->x <= 8 && $this->x >= 1 && $this->y <= 8 && $this->y >= 1) {
            return true;
        } else {
            return false;
        }
    }

    abstract function peutAllerA(int $x, int $y);

    public function __toString(){
        return 'Je suis un ' . get_class($this) . ', je me trouve sur la case (' . $this->y . ',' . $this->x .') et je suis de couleur ' . $this->couleur . '.';
    }

    /**
     * Get the value of x
     */ 
    public function getX()
    {
        return $this->x;
    }
}


?>