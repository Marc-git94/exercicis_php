<?php
$productes = [
    ['nom' => 'Teclat mecanic RGB', 'categoria' => 'teclats', 'preu' => 79.90, 'estoc' => 4],
    ['nom' => 'Ratoli vertical', 'categoria' => 'ratolins', 'preu' => 29.95, 'estoc' => 7],
    ['nom' => 'Monitor 27" QHD', 'categoria' => 'monitors', 'preu' => 289.00, 'estoc' => 0],
    ['nom' => 'Auriculars ANC', 'categoria' => 'audio', 'preu' => 129.00, 'estoc' => 2],
    ['nom' => 'Hub USB-C 7 en 1', 'categoria' => 'accessoris', 'preu' => 34.90, 'estoc' => 20],
    ['nom' => 'Suport per a portatil', 'categoria' => 'accessoris', 'preu' => 24.50, 'estoc' => 0],
];

// Exercici 1
function valorEstoc(array $productes): float {
    $total = 0.0;
    foreach ($productes as $item) { $total += $item['preu'] * $item['estoc']; }
    return round($total, 2);
}

function quantsEsgotats(array $productes): int {
    $comptador = 0;
    foreach ($productes as $item) { if ($item['estoc'] === 0) { $comptador++; } }
    return $comptador;
}

function preuMitja(array $productes): float {
    $numProductes = count($productes);
    if ($numProductes === 0) { return 0.0; }
    $sumaPreus = 0.0;
    foreach ($productes as $item) { $sumaPreus += $item['preu']; }
    return round($sumaPreus / $numProductes, 2);
}

// Exercici 2
function nomesDisponibles(array $productes): array {
    $res = [];
    foreach ($productes as $item) { if ($item['estoc'] > 0) { $res[] = $item; } }
    return $res;
}

function elMesCar(array $productes): array {
    if (empty($productes)) { return []; }
    $mesCar = $productes[0];
    foreach ($productes as $item) { if ($item['preu'] > $mesCar['preu']) { $mesCar = $item; } }
    return $mesCar;
}

function resumCataleg(array $productes): array {
    return [
        'total' => count($productes),
        'disponibles' => count(nomesDisponibles($productes)),
        'mes_car' => elMesCar($productes)['nom'] ?? 'Cap'
    ];
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 7 - Arrays i Funcions</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

    <h1>Exercicis d'Arrays i Funcions (Apartat 7)</h1>

    <h2>Exercici 1: Funcions que tornen un valor</h2>
    <div class="resum-caixa">
        <strong>Valor total de l'estoc:</strong> <?php echo valorEstoc($productes); ?> €<br>
        <strong>Productes esgotats:</strong> <?php echo quantsEsgotats($productes); ?><br>
        <strong>Preu mitjà del catàleg:</strong> <?php echo preuMitja($productes); ?> €<br>
        <strong>Preu mitjà d'un array buit:</strong> <?php echo preuMitja([]); ?> €
    </div>

    <h2>Exercici 2: Funcions que tornen un array (Resum)</h2>
    <div class="resum-caixa">
        <?php
        $resum = resumCataleg($productes);
        foreach ($resum as $clau => $valor) {
            echo "<strong>" . ucfirst($clau) . ":</strong> " . $valor . "<br>";
        }
        ?>
    </div>

    <h3>Visualització: Productes Només Disponibles</h3>
    <div class="graella">
        <?php
        $disponibles = nomesDisponibles($productes);
        foreach ($disponibles as $prod) {
            echo "
            <div class='targeta'>
                <h3>{$prod['nom']}</h3>
                <p><strong>Categoria:</strong> {$prod['categoria']}</p>
                <p><strong>Preu:</strong> {$prod['preu']} €</p>
                <p><strong>Estoc:</strong> {$prod['estoc']} u.</p>
            </div>
            ";
        }
        ?>
    </div>

</body>
</html>