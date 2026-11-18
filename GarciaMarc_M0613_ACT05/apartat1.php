<?php
declare(strict_types=1);

/**
 * Mostra la capçalera de la botiga amb el títol i un subtítol.
 *
 * @return void Només escriu per pantalla
 */
function capcalera(): void
{
    echo '<header>';
    echo '<h1>BitBazar</h1>';
    echo '<p>La teva botiga de tecnologia</p>';
    echo '</header>';
}

/**
 * Mostra el peu de pàgina amb el nom de la botiga i l'any actual.
 */
function peu(): void
{
    $anyActual = date('Y');
    echo '<footer>';
    echo "<p>&copy; $anyActual - BitBazar. Tots els drets reservats.</p>";
    echo '</footer>';
}

/**
 * Una funció de prova que no es cridarà mai.
 */
function funcioNoCridada(): void
{
    echo '<p>Això no s\'hauria de veure mai a la pantalla.</p>';
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 1 - Funcions i Estructura</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

    <?php 
    // Crida capcalera() una vegada al principi de la pàgina
    capcalera(); 
    ?>

    <h2>Exercici 1: Declaració i invocació de funcions</h2>
    <div class="resum-caixa">
        <p>La capçalera s'ha carregat correctament invocant la funció <code>capcalera()</code>.</p>
    </div>

    <!--
     EXPLICACIÓ DE LA FUNCIÓ NO CRIDADA:
     Tot i que la funció funcioNoCridada() està declarada correctament més amunt,
     no veurem el seu text en el navegador. 
     El motiu es que declarar una funcio nomes la deixa en memoria, fins que no es
     crida pel seu nom, el codi del seu interior no s'executa
    -->

    <hr>

    <h2>Peu de pàgina de la botiga</h2>
    <?php
    // Crida peu() tres vegades seguides al final
    peu();
    peu();
    peu();
    ?>

</body>
</html>