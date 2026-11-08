<?php
declare(strict_types=1);

// ============================================================================
// DECLARACIÓ DE LES FUNCIONS
// ============================================================================

/**
 * Calcula el preu amb IVA, utilitzant un percentatge per defecte del 21%.
 *
 * @param float $base Preu base sense impostos
 * @param float $iva Percentatge d'IVA (per defecte 0.21)
 * @return float Preu arrodonit amb IVA
 */
function preuAmbIva(float $base, float $iva = 0.21): float
{
    return round($base * (1 + $iva), 2);
}

/**
 * Aplica un descompte percentual a un preu (per defecte un 10%).
 *
 * @param float $preu Preu original
 * @param int $percentatge Descompte a aplicar (per defecte 10)
 * @return float Preu final amb el descompte aplicat
 */
function aplicaDescompte(float $preu, int $percentatge = 10): float
{
    $descompte = $preu * ($percentatge / 100);
    return round($preu - $descompte, 2);
}

/**
 * Genera un text de benvinguda personalitzat.
 *
 * @param string $nom Nom de la persona
 * @param string $salutacio Text de salutació (per defecte 'Hola')
 * @return string Missatge de benvinguda complet
 */
function benvinguda(string $nom, string $salutacio = 'Hola'): string
{
    return "$salutacio, $nom!";
}

// ============================================================================
// LOGICA DE NEGOCI (Càlculs previs)
// ============================================================================

$preuBase = 100.00;
$ivaNormal   = preuAmbIva($preuBase);         // Usa el 0.21 per defecte
$ivaReduït   = preuAmbIva($preuBase, 0.10);   // Usa el 0.10 passat com a argument
$ivaSuperred = preuAmbIva($preuBase, 0.04);   // Usa el 0.04 passat com a argument

$preuProducte = 50.00;
$descompteDefecte = aplicaDescompte($preuProducte);       // Usa el 10% per defecte
$descompteGran     = aplicaDescompte($preuProducte, 25);   // Usa el 25% passat
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 4 - Paràmetres Opcionals</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

    <h1>Exercicis Paràmetres Opcionals (Apartat 4)</h1>

    <h2>Exercici 1: Preu amb diferents tipus d'IVA</h2>
    <div class="resum-caixa">
        <p>Base de <strong><?php echo number_format($preuBase, 2, ',', '.'); ?> EUR</strong> amb IVA per defecte (21%): <strong><?php echo number_format($ivaNormal, 2, ',', '.'); ?> EUR</strong></p>
        <p>Base de <strong><?php echo number_format($preuBase, 2, ',', '.'); ?> EUR</strong> amb IVA reduït (10%): <strong><?php echo number_format($ivaReduït, 2, ',', '.'); ?> EUR</strong></p>
        <p>Base de <strong><?php echo number_format($preuBase, 2, ',', '.'); ?> EUR</strong> amb IVA superreduït (4%): <strong><?php echo number_format($ivaSuperred, 2, ',', '.'); ?> EUR</strong></p>
    </div>

    <h2>Exercici 2: Aplicar descomptes</h2>
    <div class="resum-caixa">
        <p>Preu original: <strong><?php echo number_format($preuProducte, 2, ',', '.'); ?> EUR</strong>. Amb descompte del 10% (per defecte): <strong><?php echo number_format($descompteDefecte, 2, ',', '.'); ?> EUR</strong></p>
        <p>Preu original: <strong><?php echo number_format($preuProducte, 2, ',', '.'); ?> EUR</strong>. Amb descompte de Black Friday (25%): <strong><?php echo number_format($descompteGran, 2, ',', '.'); ?> EUR</strong></p>
    </div>

    <h2>Exercici 3: Ordre dels paràmetres opcionals</h2>
    <div class="resum-caixa">
        <p><?php echo benvinguda('Laura'); ?></p>
        <p><?php echo benvinguda('Joan', 'Bon dia'); ?></p>
    </div>

    <!--
     EXPLICACIÓ DE QUÈ PASSA SI POSES EL PARÀMETRE OPCIONAL EL PRIMER:
    
     Si canviem la signatura de la funció d'aquesta manera:
     function benvinguda(string $salutacio = 'Hola', string $nom): string { ... }
    
     PHP llançarà un error de tipus Deprecated (Obsolet) o un Fatal Error depenent de la versió:
     "Fatal error: Uncaught ArgumentCountError: Too few arguments to function benvinguda()..."
     o el següent avís de sintaxi abans de l'execució:
     "Deprecated: Optional parameter $salutacio declared before required parameter $nom is implicitly required"
    
     Per què passa?
     Si el primer paràmetre és opcional i el segon és obligatori, quan intentes cridar la funció amb un 
     sol argument, com `benvinguda('Laura')`, PHP assignarà aquest valor al primer paràmetre de la llista ($salutacio).
     Llavors, el segon paràmetre ($nom), que és obligatori, es quedarà buit. Com que PHP llegeix d'esquerra a dreta, 
     invalida per complet la utilitat del valor per defecte. Els paràmetres opcionals han d'anar SEMPRE al final.
    -->

</body>
</html>