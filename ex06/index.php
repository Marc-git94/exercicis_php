<!--
EXERCICI 6:

Canvia l'extensio a php i comprova que segueix funcionant igual.

Puja totes les dades a un bloc PHP al capdamunt del fitxer.

Substitueix cada valor de l'HTML per i fes que l'IVA i el
total es calculin sols.

Defineix les constants IVA, BOTIGA, MONEDA I DESCOMPTE_SOCI amb define()
o const.

Substitueix al teu index.php tots els valors fixos per les constants

Intenta canviar el valor d'una constant a mitja pàgina i anota l'error que dona

Busca com fer-ho amb number_format per modificar com es veu el preu.
-->

<?php
const IVA = 0.21;
const TIENDA = "Tienda online GUAY";
const MONEDA = "EUR";
const DESCUENTO_SOCIO = 0.10;

// Error de cambiar constante
// const IVA = 0.10;

$nombreProducto = "Camiseta guay";
$descripcion = "Camiseta chupi chupi guay";
$precio = 99.99;
$stock = 5;
$ref = "CAM-1425376";

$iva = $precio * IVA;
$total = $precio + $iva;
$descuento = $total * DESCUENTO_SOCIO;
$totalConDescuento = $total - $descuento;

function formatoPrecio($cantidad) {
    return number_format($cantidad, 2, ',', '.') . ' ' . MONEDA;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= TIENDA ?></title>
</head>
<body>
    <header>
        <h1><?= TIENDA ?></h1>
        <p>Esto es una tienda online guay</p>
    </header>

    <main>
        <article class="producto">
            <h2><?= $nombreProducto ?></h2>
            <p class="descripcion"><?= $descripcion ?></p>
            <p class="precio">Precio sin IVA: <?= formatoPrecio($precio) ?></p>
            <p class="precio">IVA (<?= IVA * 100 ?>%): <?= formatoPrecio($iva) ?></p>
            <p class="total">Total: <?= formatoPrecio($total) ?></p>
            <p class="total">Total con descuento de socio (-<?= DESCUENTO_SOCIO * 100 ?>%): <?= formatoPrecio($totalConDescuento) ?></p>

            <p class="stock">Stock disponible: <?= $stock ?></p>
            <p class="ref"><?= $ref ?></p>
        </article>

        <footer>
            <p>Footer de <?= TIENDA ?> S.L</p>
        </footer>
    </main>

</body>
</html>