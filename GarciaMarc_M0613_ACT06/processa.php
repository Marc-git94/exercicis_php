<?php
require_once 'config.php';
require_once 'funcions.php';

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    $titolPagina = 'Accés directe';
    require 'header.php';
    echo '<h2>Aquí no s\'hi arriba directament</h2>';
    echo '<a class="tornar" href="' . PAG_FORMULARI . '">Anar al formulari</a>';
    require 'footer.php';
    exit;
}

$usuari = [
    'nom'        => camp('nom'),
    'cognoms'    => camp('cognoms'),
    'naixement'  => camp('naixement'),
    'telefon'    => camp('telefon'),
    'correu'     => camp('correu'),
    'usuari'     => camp('usuari'),
    'carrer'     => camp('carrer'),
    'poblacio'   => camp('poblacio'),
    'cp'         => camp('cp'),
    'tipus'      => camp('tipus'),
    'origen'     => camp('origen', 'no ho ha dit'),
    'butlleti'   => isset($_POST['butlleti']) ? 'Si' : 'No',
    'condicions' => isset($_POST['condicions']) ? 'Si' : 'No',
];

$clau  = $_POST['clau'] ?? '';
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

if (strlen($usuari['usuari']) < MIN_USUARI) {
    $errors[] = 'El nom d\'usuari ha de tenir com a mínim ' . MIN_USUARI . ' caràcters.';
}

if (strlen($clau) < MIN_CLAU) {
    $errors[] = 'La contrasenya ha de tenir com a mínim ' . MIN_CLAU . ' caràcters.';
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

$titolPagina = count($errors) > 0
    ? 'No s\'ha creat el compte'
    : 'Compte creat';

require 'header.php';
?>

<?php if (count($errors) > 0): ?>

    <h2>No s'ha pogut crear el compte</h2>
    <ul class="errors">
        <?php foreach ($errors as $error): ?>
            <li><?= htmlspecialchars($error) ?></li>
        <?php endforeach; ?>
    </ul>
    <a class="tornar" href="<?= PAG_FORMULARI ?>">Torna al formulari</a>

<?php else: ?>

    <h2>Benvingut/da, <?= htmlspecialchars($usuari['nom']) ?>!</h2>
    <p>El teu compte s'ha creat correctament. T'enviarem la confirmació a
        <strong><?= htmlspecialchars($usuari['correu']) ?></strong>.</p>

    <p>Dades registrades (<?= count($usuari) ?> camps):</p>

    <table>
        <?php foreach ($usuari as $clauCamp => $valor): ?>
            <tr>
                <th><?= etiqueta($clauCamp) ?></th>
                <td><?= htmlspecialchars($valor) ?></td>
            </tr>
        <?php endforeach; ?>
    </table>

    <a class="tornar" href="gracies.php">Continuar</a>

<?php endif; ?>

<?php
require 'footer.php';
