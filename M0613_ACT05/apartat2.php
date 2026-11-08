<?php
declare(strict_types=1);

// ============================================================================
// DECLARACIÓ DE LES FUNCIONS
// ============================================================================

/**
 * Mostra un missatge de benvinguda personalitzat amb el nom.
 *
 * @param string $nom Nom de la persona a saludar
 * @return void
 */
function saluda(string $nom): void
{
    echo "<p>Hola, <strong>$nom</strong>! Benvingut/da a BitBazar.</p>";
}

/**
 * Mostra la fitxa d'un producte correctament formatada.
 *
 * @param string $nom Nom del producte
 * @param float $preu Preu en euros (sense IVA)
 * @param int $estoc Unitats disponibles al magatzem
 * @return void
 */
function targeta(string $nom, float $preu, int $estoc): void
{
    $preuFormatat = number_format($preu, 2, ',', '.');

    if ($estoc <= 0) {
        $classeEstoc = 'estoc-esgotat';
    } elseif ($estoc <= 5) {
        $classeEstoc = 'estoc-ultimes';
    } else {
        $classeEstoc = 'estoc-disponible';
    }

    echo '<div class="targeta">';
    echo "<h3>$nom</h3>";
    echo "<p>Preu: $preuFormatat EUR</p>";
    echo "<p class=\"$classeEstoc\">Estoc: $estoc unitats</p>";
    echo '</div>';
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 2 - Paràmetres i Targetes</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

    <h1>Exercicis Paràmetres i Targetes (Apartat 2)</h1>

    <h2>Exercici 1: Salutacions</h2>
    <div class="resum-caixa">
        <?php
        saluda('Anna');
        saluda('Marc');
        saluda('Laia');
        ?>
    </div>

    <h2>Exercici 2: Targetes de Producte</h2>
    <div class="graella">
        <?php
        targeta('Teclat mecànic', 79.90, 4);
        targeta('Rató sense fils', 25.50, 12);
        targeta('Monitor 4K 27"', 349.00, 2);
        
        targeta('Auriculars Gaming', 59.95, 8);
        ?>
    </div>

    <!--
     EXPLICACIÓ DE QUÈ PASSA SI CANVIEM L'ORDRE DELS ARGUMENTS (Exercici 3):
    
     Si cridem la funció passant el preu al lloc del nom, per exemple:
     targeta(79.90, 'Teclat mecànic', 4);
    
     Passarà el següent:
     Com que tenim activat el mode estricte (declare(strict_types=1)), PHP llançarà un
     error fatal de tipus: "TypeError: targeta(): Argument #1 ($nom) must be of type string, float given".
     L'execució de la pagina s'aturara immediatament i no es mostrara res mes.
    
     Per què passa? 
     1. Els arguments van per ordre: PHP assigna el primer valor (79.90) al primer paràmetre ($nom).
     2. Comprovació de tipus: PHP detecta que $nom requereix un text ('string'), però està rebent un decimal ('float').
     Gràcies als tipus i al mode estricte, PHP ens protegeix de cometre errors que podrien trencar la lògica del programa.
    -->

</body>
</html>