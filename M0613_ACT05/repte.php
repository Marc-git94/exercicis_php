<?php

// El catàleg de productes general de BitBazar
$productes = [
    ['nom' => 'Teclat mecanic RGB', 'categoria' => 'teclats', 'preu' => 79.90, 'estoc' => 4],
    ['nom' => 'Ratoli vertical', 'categoria' => 'ratolins', 'preu' => 29.95, 'estoc' => 7],
    ['nom' => 'Monitor 27" QHD', 'categoria' => 'monitors', 'preu' => 289.00, 'estoc' => 0],
    ['nom' => 'Auriculars ANC', 'categoria' => 'audio', 'preu' => 129.00, 'estoc' => 2],
    ['nom' => 'Hub USB-C 7 en 1', 'categoria' => 'accessoris', 'preu' => 34.90, 'estoc' => 20],
    ['nom' => 'Suport per a portatil', 'categoria' => 'accessoris', 'preu' => 24.50, 'estoc' => 0],
];

// ==========================================
// FUNCIONS DEL REPTE
// ==========================================

// Calcula el preu amb IVA. Per defecte s'aplica el 21% (0.21)
function preuAmbIva(float $preu, float $iva = 0.21): float
{
    return $preu * (1 + $iva);
}

// Formata un preu a l'estil català: 1.234,50 EUR
function formatPreu(float $preu): string
{
    return number_format($preu, 2, ',', '.') . ' EUR';
}

// Determina l'estat de l'estoc segons les unitats
function estatEstoc(int $estoc): string
{
    if ($estoc === 0) {
        return 'Esgotat';
    } elseif ($estoc <= 3) {
        return 'Últimes unitats';
    } else {
        return 'Disponible';
    }
}

// Filtra els productes d'una categoria. Amb 'totes' torna el catàleg sencer
function filtraCategoria(array $productes, string $categoria): array
{
    if ($categoria === 'totes') {
        return $productes;
    }

    $filtrats = [];
    foreach ($productes as $item) {
        if ($item['categoria'] === $categoria) {
            $filtrats[] = $item;
        }
    }
    return $filtrats;
}

// Retorna un array associatiu amb estadístiques del catàleg
function resumCataleg(array $productes): array
{
    $total = count($productes);
    $disponibles = 0;
    $esgotats = 0;
    $valorEstoc = 0.0;

    foreach ($productes as $item) {
        if ($item['estoc'] > 0) {
            $disponibles++;
        } else {
            $esgotats++;
        }
        $valorEstoc += $item['preu'] * $item['estoc'];
    }

    return [
        'total' => $total,
        'disponibles' => $disponibles,
        'esgotats' => $esgotats,
        'valor_estoc' => formatPreu($valorEstoc) // Reutilitzem formatPreu aquí també
    ];
}

// Escriu l'HTML de la targeta d'un producte
function pintaTargeta(array $producte): void
{
    $preuFinal = preuAmbIva($producte['preu']);
    $preuFormatat = formatPreu($preuFinal);
    $estat = estatEstoc($producte['estoc']);
    
    // Asignamos la clase CSS correspondiente según el estado
    $claseEstat = 'estoc-disponible';
    if ($estat === 'Esgotat') { 
        $claseEstat = 'estoc-esgotat'; 
    } elseif ($estat === 'Últimes unitats') { 
        $claseEstat = 'estoc-ultimes'; 
    }

    echo "
    <div class='targeta'>
        <h3>{$producte['nom']}</h3>
        <p><strong>Categoria:</strong> {$producte['categoria']}</p>
        <p><strong>Preu (+IVA):</strong> $preuFormatat</p>
        <p><strong>Estat:</strong> <span class='$claseEstat'>$estat</span> ({$producte['estoc']} u.)</p>
    </div>
    ";
}

// Escriu la graella sencera. Si l'array és buit, mostra un missatge d'avís
function pintaGraella(array $productes): void
{
    if (empty($productes)) {
        echo "<p class='missatge-buit'>No s'ha trobat cap producte en aquesta categoria.</p>";
        return;
    }

    echo "<div class='graella'>";
    foreach ($productes as $producte) {
        pintaTargeta($producte);
    }
    echo "</div>";
}


// ==========================================
// MOSTRA DE LA PÀGINA (HTML)
// ==========================================
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Repte Final - El catàleg de BitBazar</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

    <h1>Catàleg de BitBazar</h1>

    <h2>1. Resum del Catàleg</h2>
    <div class="resum-caixa">
        <?php
        $resum = resumCataleg($productes);
        foreach ($resum as $clau => $valor) {
            echo "<strong>" . ucfirst(str_replace('_', ' ', $clau)) . ":</strong> " . $valor . "<br>";
        }
        ?>
    </div>

    <h2>2. Tots els productes</h2>
    <?php pintaGraella($productes); ?>

    <hr>

    <h2>3. Filtre per categoria: 'accessoris'</h2>
    <?php pintaGraella(filtraCategoria($productes, 'accessoris')); ?>

    <hr>

    <h2>4. Filtre per categoria que no existeix: 'smartphones'</h2>
    <?php pintaGraella(filtraCategoria($productes, 'smartphones')); ?>

</body>
</html>