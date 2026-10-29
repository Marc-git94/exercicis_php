<?php

// Variables que faltaban (en el original se usaban sin haberlas declarado)
$x = 'Hola, bon dia';
$dades = 'Dades ';
$base = 2;

echo "Hola";
echo "Hola", " ", "món";
echo "<p>Text</p>";

print "Hola";
var_dump($x);
print_r($dades);

$nom = "Aina";
$edat = 19;
$actiu = true;

$nom = "Bernat";
$total = $edat + 1;

echo $nom;

$x = 5;
$x = "cinc";

$a = "10" + 5;   // suma numérica -> 15
$b = "10" . 5;   // concatenación -> "105"
var_dump($a, $b);

$nom = 'Aina';
echo 'Hola $nom';   // comillas simples: NO interpreta la variable, imprime $nom literal

$nom = "Aina";
echo "Hola $nom";   // comillas dobles: sí interpreta la variable

$nom = "Aina";
$punts = 8;

echo 'Hola ' . $nom . ', tens ' . $punts . ' punts';
echo "Hola $nom, tens $punts punts";
echo "Hola {$nom}, tens {$punts} punts";

define('IVA', 0.21);
const BOTIGA = 'A la Web';

echo BOTIGA;
$total = $base * (1 + IVA);

$missatge = "Hola";

function saluda() {
  // Error corregido: $missatge está fuera de la función, así que aquí no existe.
  // Solución: declararla dentro (o pasarla como parámetro: function saluda($missatge))
  $missatge = "Hola";
  echo $missatge;
  $intern = "Adeu";   // variable local: solo existe dentro de la función
}

saluda();
// echo $intern;   // Error a propósito: $intern es local y fuera de la función no existe

?>
