<?php
/*
Aquest fitxer te d'errors: 3 de sintaxi (PHP no arrenca)
i 3 de logica (funciona, pero el resultat no es el correcte)
Arreglals d'un en un, comprovant la pagina despres de cada canvi
Anota a error-trobats.md quin era, com te n'as adonat
i com l'has resolt
*/

// Error 1: nom = 'Aina'; Faltaba el $
$nom = 'Aina';
// Error 2: $assignatura = 'Desenvolupament web' Faltaba el ;
$assignatura = 'Desenvolupament web';


$nota1 = 7;
$nota2 = 9;
// Error 3: $mitjana = $nota1 + $nota2 / 2; La jerarquia no es la corecta, faltan ()
$mitjana = ($nota1 + $nota2) / 2;

echo '<h1>Butlleti de notes</h1>';
//Error 4: echo '<p>Alumne: $nom</p>'; Faltaba la "
echo "<p>Alumne: $nom</p>";

//Error 5: echo '<p>Assignatura: ' + $assignatura + '</p>'; En PHP es concatena amb . y no amb +
echo '<p>Assignatura: ' . $assignatura . '</p>';


//Error 6: echo '<p>Mitjana: $mitjana</p>'; Faltaba la "
echo "<p>Mitjana: $mitjana</p>";

echo '<p>Generat el ' . date('d/m/Y') . '</p>';


?>