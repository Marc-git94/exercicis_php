<?php

// CONSTANTES: guardan valores que no queremos modificar durante el programa.

const IVA = 0.21; // Crea la constante IVA con el valor 0.21, es decir, un 21 %.

// VARIABLES DEL PRODUCTO.

$producte = 'Teclat'; // Guarda el nombre del producto: Teclat.
$base = 79.90;        // Guarda el precio del producto sin IVA: 79,90 €.
$estoc = 4;           // Guarda las unidades disponibles en el almacén: 4.

// CÁLCULO DEL PRECIO CON IVA.

// round() es una función predefinida de PHP que redondea un número.
// $base * (1 + IVA) multiplica el precio base por 1,21 para añadir el 21 % de IVA.
// El número 2 indica que queremos redondear a dos decimales.
$total = round($base * (1 + IVA), 2);
// El resultado se guarda en $total: 96.68 €.

// VARIABLES CON LOS DATOS PERSONALES.

$nom = 'Marc';          // Guarda el nombre.
$cognom = 'Garcia';     // Guarda el apellido.
$direccio = 'Carrer 1'; // Guarda la dirección.

// Cerramos el bloque de PHP para escribir HTML directamente.
?>

<!-- Muestra un encabezado HTML de nivel 2 con el nombre del producto. -->
<h2><?php echo $producte; ?></h2>
<!-- <?php echo $producte; ?> ejecuta PHP y muestra el valor de $producte. -->

<!-- Muestra el precio final con IVA y la moneda EUR. -->
<p>Preu amb IVA: <?= $total ?> EUR</p>
<!-- <?= $total ?> es una forma abreviada de escribir <?php echo $total; ?>. -->

<!-- Muestra las unidades disponibles del producto. -->
<p>Disponibilitat: <?= $estoc ?></p>
<!-- El navegador mostrará el valor de $estoc, que es 4. -->

<!-- Muestra un encabezado con el título Dades personals. -->
<h2>Dades personals</h2>

<!-- Muestra el nombre de la persona. -->
<p>Nom complet: <?= $nom ?></p>
<!-- <?= $nom ?> muestra Marc. -->

<!-- Muestra el apellido de la persona. -->
<p>Cognom: <?= $cognom ?></p>
<!-- <?= $cognom ?> muestra Garcia. -->

<!-- Muestra la dirección de la persona. -->
<p>Direccio: <?= $direccio ?></p>
<!-- <?= $direccio ?> muestra Carrer 1. -->