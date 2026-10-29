<?php
/*
* Aquest fitxer té 6 errors. Alguns aturen la pàgina, altres no.
* Abans de començar, assegura't que veus els errors: si la pàgina
* surt en blanc, revisa la configuració de l’Exercici 1.
*/

// Creamos una constante llamada IVA con el valor 0.21 (21 %).
// Las constantes no llevan $ delante.
const IVA = 0.21;

// Guardamos el nombre de la tienda en una variable.
// El símbolo $ es obligatorio al declarar variables en PHP.
$botiga = 'Tienda Molona';

// Guardamos el nombre del producto.
// El punto y coma ; es obligatorio para terminar la instrucción.
$producte = 'Producto to flama';

// Guardamos el precio de una unidad del producto.
$preu = 34.90;

// Guardamos la cantidad de unidades que se compran.
$unitats = 2;

// Calculamos el subtotal multiplicando el precio por las unidades.
$subtotal = $preu * $unitats;

// Calculamos el IVA multiplicando el subtotal por la constante IVA.
// IVA es una constante, así que se escribe sin $.
$importIva = $subtotal * IVA;

// Calculamos el total sumando el subtotal y el importe del IVA.
$total = $subtotal + $importIva;
?>

<!DOCTYPE html>
<html lang="ca">
<head>
   <!-- Indicamos que el documento utiliza caracteres UTF-8. -->
   <meta charset="utf-8">

   <!-- Establecemos el título que aparece en la pestaña del navegador. -->
   <title>Tiquet</title>
</head>
<body>

   <!-- Mostramos el nombre de la tienda utilizando PHP. -->
   <h1><?php echo $botiga; ?></h1>

   <!-- Mostramos el nombre del producto. -->
   <!-- <-?= es una forma abreviada de escribir <-?php echo -->
   <p>Producte: <?= $producte ?></p>

   <!-- Mostramos la cantidad de unidades compradas. -->
   <p>Unitats: <?= $unitats ?></p>

   <?php
   // Mostramos el precio unitario.
   // En PHP, el punto (.) sirve para concatenar o unir cadenas de texto.
   echo '<p>Preu unitari: ' . $preu . ' EUR</p>';

   // Mostramos el subtotal.
   // Las comillas dobles permiten insertar variables directamente en el texto.
   echo "<p>Subtotal: $subtotal EUR</p>";
   ?>

   <!-- Mostramos el importe del IVA. -->
   <p>IVA: <?= $importIva ?> EUR</p>

   <!-- Mostramos el precio total que debe pagar el cliente. -->
   <p>Total: <?= $total ?> EUR</p>

</body>
</html>