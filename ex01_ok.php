<?php

// Error: Estas variables no estaban declaradas y por eso daba error
$x = 'Hola, bon dia';
$dades = 'Dades ';
$base = 2;
$intern = 4;

echo "Hola, ";
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

$a = "10" + 5;
$b = "10" . 5;
var_dump($a, $b);

$nom = 'Aina';
echo 'Hola $nom';

$nom = "Aina";
echo "Hola $nom";

$nom = "Aina";
$punts = 8;

echo 'Hola ' . $nom . ', tens ' . $punts . ' punts';
echo "Hola $nom, tens $punts punts";
echo "Hola {$nom}, tens {$punts} punts";

define('IVA', 0.21);
const BOTIGA = 'A la Web';

echo BOTIGA;
$total = $base * (1 + IVA);

function saluda() {

//Error: Esta variable estaba declarada fuera de la funcion y la he puesto dentro
$missatge = "Hola";

  echo $missatge;
  $intern = "Adeu";
}

saluda();
echo $intern;

?>