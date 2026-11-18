<?php
declare(strict_types=1);

// ============================================================================
// DECLARACIÓ DE LES FUNCIONS
// ============================================================================

/**
 * Calcula l'àrea d'un rectangle.
 *
 * @param float $base Amplitud de la base
 * @param float $altura Alçada del rectangle
 * @return float Àrea total calculada
 */
function area(float $base, float $altura): float
{
    return $base * $altura;
}

/**
 * Comprova si un producte està esgotat basant-se en les unitats d'estoc.
 *
 * @param int $unitats Quantitat actual en estoc
 * @return bool True si no queden unitats, False si en queden
 */
function esgotat(int $unitats): bool
{
    return $unitats <= 0;
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 5 - Tipus Estrictes i Conversions</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

    <h1>Exercicis de Tipus Estrictes (Apartat 5)</h1>

    <h2>Exercici 1: Comprovació de tipus estrictes</h2>
    <div class="resum-caixa">
        <p>Àrea amb decimals (3.5, 4.2): <strong><?php echo area(3.5, 4.2); ?></strong></p>
        
        <!-- Funciona perfectament perquè passar un 'int' on s'espera un 'float' NO perd informació.
             PHP fa aquesta conversió automàtica de manera segura fins i tot amb strict_types=1. -->
        <p>Àrea amb enters (3, 4): <strong><?php echo area(3, 4); ?></strong></p>
    </div>

    <h2>Intent de transmissió de tipus erroni</h2>
    <h3>Intentant passar un text ('3') com a base:</h3>
    <div class="missatge-buit" style="border-left: 5px solid #c0392b;">
        <?php
        try {
            echo area('3', 4.0);
        } catch (TypeError $e) {
            // ERROR EXACTE QUE DONA: 
            // Error de tipus: area(): Argument #1 ($base) must be of type float, string given, called in ...
            echo '<strong>Error de tipus capturat:</strong> ' . htmlspecialchars($e->getMessage());
        }
        ?>
    </div>

    <h3>Solució fent una conversió manual (casting):</h3>
    <div class="resum-caixa">
        <?php
        $baseText = '3';
        ?>
        <p>Àrea corregida amb <code>(float)</code>: <strong><?php echo area((float) $baseText, 4.0); ?></strong></p>
    </div>

    <!--
     EXPLICACIÓ I COMENTARI DE SEGURETAT:
     
     Quan desactivem el mode estricte, PHP és massa permissiu i intenta "endevinar" la intenció del programador.
     Per exemple, si passem el text '3 idiotes' a una funció que demana un float, PHP sense mode estricte 
     agafarà el '3', ignorarà la resta del text i farà el càlcul en silenci sense avisar ningú.
    
     Això és altament perillós en entorns reals (com una botiga online o una aplicació bancària) perquè:
     1. Amaga errors de lògica: Si un formulari web envia un text buit o dades corruptes, volem adonar-nos-en
        immediatament per corregir-ho, no que el programa continuï funcionant fent càlculs inventats.
     2. Codi molt més segur i predictible: Amb `declare(strict_types=1)`, el codi es converteix en un contracte.
        Obliga al programador a fer les conversions de forma conscient (com hem fet amb `(float)`). D'aquesta 
        manera, qualsevol que llegeixi el codi sap exactament amb quin tipus de dades s'està treballant en cada moment.
    -->

</body>
</html>