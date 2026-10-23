<?php

// if/elseif/else

$nota = 7.8;

if ($nota >= 9) {
    $qualif = 'Excelent';
} elseif ($nota >= 7) {
    $qualif = 'Notable';
} elseif ($nota >= 5) {
    $qualif = 'Aprobat';
} else {
    $qualif = 'Suspès';
}

?>

<?php
$estoc = 0;

if ($estoc > 0) { ?>
    <p>En estoc</p>
<?php } else { ?>
    <p>Esgotat</p>
<?php } ?>

<!-- Amb dos punts -->
<?php if ($estoc > 0): ?>
    <p>En estoc</p>
<?php else: ?>
    <p>Esgotat</p>
<?php endif; ?>

<!-- if (...): ... endif; -->

<!-- switch y match -->

<!--
switch ($zona) {
    case 'local':
        $enviament = 0;
        break;
    case 'peninsula':
        $enviament = 4.99;
        break;
    default:
        $enviament = 9.99;
}
-->
<!--
$enviament = match ($zona) {
    'local'     => 0,
    'peninsula' => 4.99,
    default     => 9.99,
};
-->

<!-- for -->

<!--
for ($i = 1; $i <= 10; $i++) {
    echo $i;
}
-->

<!-- while -->

<!--
while ($saldo < $objectiu) {
    $saldo += 1.03;
    $anys++;
}
-->

<!-- do while -->

<!--
do {
    $n = rand(1, 6);
} while ($n !== 6);
-->

<table>
    <?php for ($i = 1; $i <= 10; $i++): ?>
    <tr>
        <td><?= $i ?> x 7</td>
        <td><?= $i * 7 ?></td>
    </tr>
    <?php endfor; ?>
</table>

<!-- Arrays indexats -->

<?php
$colors = ['vermell', 'verd', 'blau'];

echo $colors[0];          // vermell  (corchetes [], no paréntesis)
echo count($colors);      // 3

$colors[] = 'groc';       // afegeix al final

echo '<pre>';
print_r($colors);
echo '</pre>';
?>

<!-- Arrays associatius -->

<?php
$producte = [
    'nom'   => 'Teclat mecanic',
    'preu'  => 79.90,     // decimal con punto; con coma (79,90) PHP lo toma como dos elementos
    'estoc' => 4,
];

echo $producte['nom'];
$producte['preu'] = 69.99;
?>

<!-- foreach: recorrer un array -->

<ul>
<?php
foreach ($colors as $color) {
    echo "<li>$color</li>";
}
?>
</ul>

<dl>
<?php
foreach ($producte as $clau => $valor) {
    echo "<dt>$clau</dt>";
    echo "<dd>$valor</dd>";
}
?>
</dl>

<!-- array dins d'arrays -->

<?php
$productes = [
    ['nom' => 'Teclat',  'preu' => 79.9],
    ['nom' => 'Ratoli',  'preu' => 24.5],
    ['nom' => 'Monitor', 'preu' => 189],
];
?>

<table>
<?php foreach ($productes as $p) : ?>
    <tr>
        <td><?= $p['nom'] ?></td>
        <td><?= $p['preu'] ?> EUR</td>
    </tr>
<?php endforeach; ?>
</table>


<!--
count($a) // Quants elements te
in_array($x, $a, true) // Si un valor hi es (el true fa la comparacio estricta)
array_key_exists('k', $a) // Si una clau existeix
sort / rsort / ksort // Ordena per valor o per clau
array_sum / max / min // Suma, maxim i minim
array_column($a, 'preu') // Treu una columna d'un array d'arrays
implode(', ', $a) / explode // Array a text y text a array

Aplicar en ex08, buscar en el buscador de php.net
-->
