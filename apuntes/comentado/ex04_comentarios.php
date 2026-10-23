<?php
/*
Aquest fitxer té errors: 3 de sintaxi (PHP no arrenca)
i 3 de lògica (funciona, però el resultat no és el correcte).
Arregla'ls d'un en un, comprovant la pàgina després de cada canvi.
Anota a error-trobats.md quin era, com te n'has adonat
i com l'has resolt.
*/

// ERROR 1: faltaba el símbolo $ delante de la variable.
// Incorrecto: nom = 'Aina';
// Correcto: las variables de PHP empiezan por $.
$nom = 'Aina'; // Guarda el nombre Aina en la variable $nom.

// ERROR 2: faltaba el punto y coma ; al final de la instrucción.
// Incorrecto: $assignatura = 'Desenvolupament web'
// Correcto: cada instrucción termina con ;.
$assignatura = 'Desenvolupament web'; // Guarda el nombre de la asignatura.

// Guarda la primera nota en la variable $nota1.
$nota1 = 7;

// Guarda la segunda nota en la variable $nota2.
$nota2 = 9;

// ERROR 3: la operación matemática estaba mal planteada.
// Incorrecto: $mitjana = $nota1 + $nota2 / 2;
// Sin paréntesis, primero se divide $nota2 entre 2 y después se suma $nota1.
// Correcto: sumamos las dos notas y dividimos el resultado entre 2.
$mitjana = ($nota1 + $nota2) / 2; // Calcula la media: (7 + 9) / 2 = 8.

// Muestra un encabezado HTML de nivel 1 con el texto "Butlletí de notes".
echo '<h1>Butlleti de notes</h1>';

// ERROR 4: con comillas simples, PHP no sustituye $nom por su valor.
// Incorrecto: echo '<p>Alumne: $nom</p>';
// Correcto: utilizamos comillas dobles para que PHP interprete la variable.
echo "<p>Alumne: $nom</p>"; // Muestra: Alumne: Aina.

// ERROR 5: el operador + sirve para sumar números, no para unir textos.
// Incorrecto: echo '<p>Assignatura: ' + $assignatura + '</p>';
// Correcto: en PHP utilizamos el punto . para concatenar (unir) textos.
echo '<p>Assignatura: ' . $assignatura . '</p>';
// Muestra: Assignatura: Desenvolupament web.

// ERROR 6: con comillas simples, PHP no sustituye $mitjana por su valor.
// Incorrecto: echo '<p>Mitjana: $mitjana</p>';
// Correcto: utilizamos comillas dobles para mostrar el valor de la variable.
echo "<p>Mitjana: $mitjana</p>"; // Muestra: Mitjana: 8.

// La función date('d/m/Y') obtiene la fecha actual con el formato día/mes/año.
// d = día; m = mes; Y = año con cuatro cifras.
// El punto . une el texto inicial, la fecha y el texto final.
echo '<p>Generat el ' . date('d/m/Y') . '</p>';
// Muestra, por ejemplo: Generat el 23/10/2026.
// La fecha cambiará según el día en que se ejecute el código.

?>