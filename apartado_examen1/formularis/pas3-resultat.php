<?php

/**
 * PAS 3 - Una sola pagina
 * Fins ara teniem dos fitxers, el formulari i el resultat
 * Mira com es fa la petició i així fara una cosa o altre
 * La primera visita es amb GET i quan es prem el boto
 * d'enviar es amb POST
 */

$nom = '';
$correu = '';
$dia = '';

//variable de control
$enviat = false;

// Array predefinido $_SERVER nos da informacion del
// servidor
// echo "<pre>";
// print_r($_SERVER);
// echo "</pre>";

// Si el request method es POST es que ya se ha
// clicado al botón de enviar del formulario
// con method=post
if($_SERVER['REQUEST_METHOD'] === "POST"){
    $nom = trim($_POST['nom'] ?? '');
    $correu = trim($_POST['correu'] ?? '');
    $dia = trim($_POST['dia'] ?? 'sense triar');
    $enviat = true;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscripcio al festival</title>
    <link rel=stylesheet href="css/styles.css">
</head>
<body>
    <h1>Inscripcio al festival</h1>

    <?php if($enviat): ?>
        <p>Inscripcio rebuda: <?= $nom; ?> 
        (<?= $correu ?>), dia <?= $dia ?>.</p>
    <?php endif; ?>

    <!-- <form action="pas3-resultat.php" method="post"> -->
        <form method="post">
            <div class="campo">
                <label for="nom">Nom</label>
                <input id="nom" name="nom" type="text" required>
            </div>

            <div class="campo">
                <label for="correu">Correu</label>
                <input id="correu" name="correu" type="email" required>
            </div>

            <div class="campo">
                <label for="dia">Dia</label>
                <select id="dia" name="dia">
                    <option value="divendres">Divendres</option>
                    <option value="dissabte">Dissabte</option>
                </select>
            </div>

            <button type="submit">Inscriu-me</button>
        </form>

</body>
</html>