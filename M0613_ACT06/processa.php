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
    'usuari'     => camp('usuari'),
    'clau'       => camp('clau'),
    'correu'     => camp('correu'),
    'naixement'  => camp('naixement'),
    'cp'         => camp('cp'),
    'adreca'     => camp('adreca'),
    'origen'     => camp('origen', 'no ho ha dit'),
    'newsletter' => isset($_POST['newsletter']) ? 'Sí' : 'No',
    'condicions' => isset($_POST['condicions']) ? 'Acceptades' : 'No acceptades',
];

$errors = [];

if ($usuari['nom'] === '') {
    $errors[] = 'El nom és obligatori.';
}
if ($usuari['cognoms'] === '') {
    $errors[] = 'Els cognoms són obligatoris.';
}
if (strlen($usuari['usuari']) < MIN_USUARI) {
    $errors[] = 'El nom d\'usuari ha de tenir com a mínim ' . MIN_USUARI . ' caràcters.';
}
if (strlen($usuari['clau']) < MIN_CLAU) {
    $errors[] = 'La contrasenya ha de tenir com a mínim ' . MIN_CLAU . ' caràcters.';
}
if ($usuari['correu'] === '' || !filter_var($usuari['correu'], FILTER_VALIDATE_EMAIL)) {
    $errors[] = 'Has d\'indicar un correu electrònic vàlid.';
}
if ($usuari['condicions'] !== 'Acceptades') {
    $errors[] = 'Has d\'acceptar les condicions d\'ús.';
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
    <a class="tornar" href="<?= PAG_FORMULARI ?>">Tornar al formulari</a>
<?php else: ?>
    <h2>Compte creat correctament</h2>
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
