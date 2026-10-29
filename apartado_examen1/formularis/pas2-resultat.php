<?php
/**
 * PAS 2 - Recollir les dades correctament.
 */

//echo "<p>Hola, " .$_POST['nom']. "</p>";

/** trim: para sacar los espacios y inicializar si la
 * variable venia vacia
 */
$nom = trim($_POST['nom'] ?? '');
$correu = trim($_POST['correu'] ?? '');
$dia = trim($_POST['dia'] ?? 'sense triar');

echo "<p>Hola, " .$nom. "</p>";

?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RESULTAT PAS 2</title>
</head>
<body>
    
    <h1>Dades recollides: </h1>

    <ul>
        <li>Nom: <?= $nom ?></li>
        <li>Correu: <?= $correu ?></li>
        <li>Dia: <?= $dia ?></li>
    </ul>

    <p>El nom té <?= strlen($nom)?> caràcters.</p>

</body>
</html>