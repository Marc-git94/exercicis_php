<?php
declare(strict_types=1);

// ============================================================================
// DECLARACIÓ DE LES FUNCIONS
// ============================================================================

/**
 * Calcula i mostra directament per pantalla el preu amb un 21% d'IVA.
 *
 * @param float $base Preu base sense impostos
 * @return void
 */
function preuAmbIvaEcho(float $base): void
{
    echo $base * 1.21;
}

/**
 * Calcula i retorna el preu amb un 21% d'IVA per poder operar amb ell.
 *
 * @param float $base Preu base sense impostos
 * @return float Preu final amb IVA inclòs
 */
function preuAmbIva(float $base): float
{
    return $base * 1.21;
}

/**
 * Formata un valor numèric com a preu en lletres de moneda.
 *
 * @param float $preu Valor numèric a formatar
 * @return string Text formatat amb dos decimals i "EUR"
 */
function formatPreu(float $preu): string
{
    return number_format($preu, 2, ',', '.') . ' EUR';
}

// ============================================================================
// LOGICA DE NEGOCI (Càlculs previs)
// ============================================================================

// Array de tres preus base
$preusBase = [10.00, 45.50, 120.00];

// Variable acumuladora per calcular el total
$totalAmbIva = 0.0;

// Calculem el total sumant els resultats que ens retorna la funció preuAmbIva()
foreach ($preusBase as $preu) {
    $totalAmbIva += preuAmbIva($preu);
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 3 - Operacions amb Return</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

    <h1>Exercicis de Retorn de Valors (Apartat 3)</h1>

    <h2>Exercici 1 i 2: Operacions amb Return</h2>
    <div class="resum-caixa">
        <p>El total de la compra (amb IVA) és: <strong><?php echo formatPreu($totalAmbIva); ?></strong></p>
        <p>El producte més car (amb IVA) costa: <strong><?php echo formatPreu(preuAmbIva(max($preusBase))); ?></strong></p>
    </div>

    <!--
     EXPLICACIÓ EXERCICI 2 (Per què no es pot fer amb preuAmbIvaEcho?)
     
     EXPLICACIÓ DE PER QUÈ NO PODEM OPERAR AMB preuAmbIvaEcho():
    
     Si intentéssim fer el mateix codi substituint preuAmbIva() per preuAmbIvaEcho():
     1. $totalAmbIva += preuAmbIvaEcho($preu); -> Donaria un ERROR o un comportament inesperat. 
        Com que preuAmbIvaEcho() té un retorn 'void' (buit), no "torna" res a la suma. En canvi,
        en el mateix moment de fer el bucle, escriuria els números "bruts" directament a la pantalla.
    
     2. formatPreu(preuAmbIvaEcho(max($preusBase))) -> Llançaria un TypeError immediat.
        La funció formatPreu() necessita obligatòriament rebre un valor de tipus 'float'. 
        Com que preuAmbIvaEcho() és 'void', no li passa res a formatPreu(). L'únic que faria 
        és escriure el número a la pantalla abans d'hora, i després el programa fallaria.
    
     EN RESUM: 
     Amb 'echo', el valor s'escapa directament cap a la pantalla del navegador i el codi PHP
     perd el control sobre ell (és com llençar aigua a terra). 
     Amb 'return', la funció ens entrega el resultat a la mà, permetent-nos guardar-lo, 
     sumar-lo o transformar-lo abans de decidir si el volem ensenyar.
    -->

</body>
</html>