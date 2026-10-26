<?php
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    echo '<p>Has d\'arribar aqui des del formulari. ';
    echo '<a href="registre.html">Torna-hi</a></p>';
    exit;
}

$usuari = [
    'nom' => trim($_POST['nom'] ?? ''),
    'cognoms' => trim($_POST['cognoms'] ?? ''),
    'naixement' => trim($_POST['naixement'] ?? ''),
    'telefon' => trim($_POST['telefon'] ?? ''),
    'correu' => trim($_POST['correu'] ?? ''),
    'usuari' => trim($_POST['usuari'] ?? ''),
    'carrer' => trim($_POST['carrer'] ?? ''),
    'poblacio' => trim($_POST['poblacio'] ?? ''),
    'cp' => trim($_POST['cp'] ?? ''),
    'tipus' => trim($_POST['tipus'] ?? ''),
    'origen' => trim($_POST['origen'] ?? ''),
    'butlleti' => isset($_POST['butlleti']) ? 'Si' : 'No',
    'condicions' => isset($_POST['condicions']) ? 'Si' : 'No',
];

$clau = $_POST['clau'] ?? '';
$clau2 = $_POST['clau2'] ?? '';

$errors = [];

if ($usuari['nom'] === '') {
    $errors[] = 'El nom és obligatori.';
}

if ($usuari['cognoms'] === '') {
    $errors[] = 'Els cognoms són obligatoris.';
}

if ($usuari['correu'] === '') {
    $errors[] = 'El correu és obligatori.';
} elseif (filter_var($usuari['correu'], FILTER_VALIDATE_EMAIL) === false) {
    $errors[] = 'El correu no té un format vàlid.';
}

if (strlen($usuari['usuari']) < 4) {
    $errors[] = 'El nom d\'usuari ha de tenir com a mínim 4 caràcters.';
}

if (strlen($clau) < 6) {
    $errors[] = 'La contrasenya ha de tenir com a mínim 6 caràcters.';
}

if ($clau !== $clau2) {
    $errors[] = 'Les dues contrasenyes no coincideixen.';
}

if ($usuari['cp'] !== '' && preg_match('/^[0-9]{5}$/', $usuari['cp']) !== 1) {
    $errors[] = 'El codi postal ha de tenir exactament 5 xifres.';
}

if ($usuari['tipus'] === '') {
    $errors[] = 'Has de triar un tipus de client.';
}

if ($usuari['condicions'] === 'No') {
    $errors[] = 'Has d\'acceptar les condicions del servei.';
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>BitBazar - Resultat</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>
    <main>
        <h1>BitBazar</h1>

        <?php if (count($errors) > 0): ?>

            <h2>No s'ha pogut crear el compte</h2>
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?= htmlspecialchars($error) ?></li>
                <?php endforeach; ?>
            </ul>
            <p><a href="registre.html">Torna al formulari</a></p>

        <?php else: ?>

            <h2>Benvingut/da, <?= htmlspecialchars($usuari['nom']) ?>!</h2>
            <p>El teu compte s'ha creat correctament. T'enviarem la confirmació a
                <strong><?= htmlspecialchars($usuari['correu']) ?></strong>.</p>

            <p>Dades registrades (<?= count($usuari) ?> camps):</p>

            <table>
                <?php foreach ($usuari as $camp => $valor): ?>
                    <tr>
                        <th><?= htmlspecialchars($camp) ?></th>
                        <td><?= htmlspecialchars($valor) ?></td>
                    </tr>
                <?php endforeach; ?>
            </table>

        <?php endif; ?>
    </main>
</body>
</html>
