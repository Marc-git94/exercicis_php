<?php
/*
* Aquest fitxer té 6 errors. Alguns aturen la pàgina, altres no.
* Abans de començar, assegura't que veus els errors: si la pàgina
* surt en blanc, revisa la configuració de l’Exercici 1.
*/

const IVA = 0.21;

$botiga = 'Tienda Molona'; // Error 1: botiga = 'Tienda Molona'; Li faltaba $

$producte = 'Producto to flama'; // Error 2: $producte = 'Producto to flama' Li faltaba ;

$preu = 34.90;

$unitats = 2;

$subtotal = $preu * $unitats;
$importIva = $subtotal * IVA; // Error 3: $importIva = $subtotal * $IVA; S'ha de quita $ a IVA
$total = $subtotal + $importIva;
?>

<!DOCTYPE html>
<html lang="ca">
<head>
   <meta charset="utf-8">
   <title>Tiquet</title>
</head>
<body>
   <h1><?php echo $botiga; ?></h1> <!-- Error 5 substituir per php-->

   <p>Producte: <?= $producte ?></p>
   <p>Unitats: <?= $unitats ?></p>

   <?php
   echo '<p>Preu unitari: ' . $preu . ' EUR</p>'; //Error 4: echo '<p>Preu unitari: ' + $preu + ' EUR</p>'; Posar . y no +
   echo "<p>Subtotal: $subtotal EUR</p>"; // Error 6: echo "<p>Subtotal: $subtotal EUR</p>"; substituir ' por "
   ?>

   <p>IVA: <?= $importIva ?> EUR</p>
   <p>Total: <?= $total ?> EUR</p>
</body>
</html>