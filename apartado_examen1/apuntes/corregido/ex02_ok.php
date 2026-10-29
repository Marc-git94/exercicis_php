<?php

const IVA = 0.21;

$producte = 'Teclat';
$base = 79.90;
$estoc = 4;
// round() es una función predefinida que redondea (aquí, a 2 decimales)
// Error corregido: era (1 * IVA), debe ser (1 + IVA) para sumar el IVA al precio base
$total = round($base * (1 + IVA), 2);

$nom = 'Marc';
$cognom = 'Garcia';
$direccio = 'Carrer 1';
?>

<h2><?php echo $producte; ?></h2>

<p>Preu amb IVA: <?= $total ?> EUR</p>

<p>Disponibilitat: <?= $estoc ?></p>

<h2>Dades personals</h2>

<p>Nom complet: <?= $nom ?></p>

<p>Cognom: <?= $cognom ?></p>

<p>Direccio: <?= $direccio ?></p>
