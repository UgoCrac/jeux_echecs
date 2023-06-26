<?php
require_once 'bo/PieceEchecs.php';
require_once 'bo/Cavalier.php';
require_once 'bo/Fou.php';
require_once 'bo/Roi.php';
require_once 'bo/Pion.php';

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php


    // $test = new Cavalier(1,2, 'blanc'); // y en premier et x en deuxieme
    // $test2 = new Fou(1,3, 'Blanc');
    // if ($test->getCouleurCase()) {
    //     echo 'Case blanche <br><hr>';
    // } else {
    //    echo "Case noir <br><hr>";
    // };
    
    // if ($test->estDansLEchiquier()) {
    //     echo "Ok <br><hr>";
    // } else {
    //     echo "Pas Ok <br><hr>";
    // }

    // if ($test->peutAllerA(3, 3)) {
    //     echo "Le cavalier peut aller sur cette case <br><hr>";
    // } else {
    //     echo "Le cavalier ne peut pas aller sur cette case <br><hr>";
    // }

    // echo $test . '<br><hr>';

    // if ($test2->peutAllerA(2, 3)) {
    //     echo "Le Fou peut aller sur cette case <br><hr>";
    // } else {
    //     echo "Le Fou ne peut pas aller sur cette case <br><hr>";
    // }
    
    // echo $test2 . '<br><hr>';

    $tab = [new Cavalier(1,2,'blanc'),
            new Fou(1,3,'blanc'),
            new Cavalier(1,7, 'blanc'),
            new Fou(1,6, 'blanc'),
            new Cavalier(8,2, 'noir'),
            new Fou(8,3, 'noir'),
            new Cavalier(8,7,'noir'),
            new Fou(8,6,'noir'),
            new Cavalier(1,4,'blanc'),
            new Fou(8,4,'noir'),
            new Pion(6,5,'noir'),
            new Roi(4,5,'blanc')];



    $plateau = array(
        array('', '', '', '', '', '', '', ''), // Ligne 1
        array('', '', '', '', '', '', '', ''), // Ligne 2
        array('', '', '', '', '', '', '', ''), // Ligne 3
        array('', '', '', '', '', '', '', ''), // Ligne 4
        array('', '', '', '', '', '', '', ''), // Ligne 5
        array('', '', '', '', '', '', '', ''), // Ligne 6
        array('', '', '', '', '', '', '', ''), // Ligne 7
        array('', '', '', '', '', '', '', '')  // Ligne 8
    );
    
    // Placement des pièces sur le plateau
    foreach ($tab as $piece) {
        $y = $piece->getY(); // Coordonnée y de la pièce
        $x = $piece->getX(); // Coordonnée x de la pièce
        $plateau[$y-1][$x-1] = $piece->getCouleur() . " " .get_class($piece); // Représentation de la pièce sur le plateau
    }
    
    // Affichage du plateau
    echo '<table style="border-collapse: collapse;">';
    for ($i = 0; $i < 8; $i++) {
        echo '<tr>';
        for ($j = 0; $j < 8; $j++) {
            $cellValue = $plateau[$i][$j];
            $cellStyle = 'border: 1px solid black; width: 50px; height: 50px; text-align: center;'; // Style des cellules avec bordures, largeur et hauteur fixe, et alignement du texte centré
            echo "<td style=\"$cellStyle\">$cellValue</td>"; // Affichage de chaque case du plateau avec le style correspondant
        }
        echo '</tr>'; // Fermeture de la ligne du tableau
    }
    echo '</table>'; // Fermeture du tableau
    
    foreach ($tab as $element) {
        if ($element->peutAllerA(5,5)) {
            echo "Le " . get_class($element) . " qui se situe en(" . $element->getX() . "," . $element->getY() . ") peut aller en (5,5) <br><hr>";
        } else {
            echo "Le " . get_class($element) . " qui se situe en(" . $element->getX() . "," . $element->getY() . ") ne peut pas aller en (5,5) <br><hr>";
        }
        
    }


    ?>
</body>
</html>