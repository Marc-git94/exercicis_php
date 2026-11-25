<?php
session_start();
require_once 'config.php';
require_once 'funcions.php';

if (!isset($_SESSION['usuari'])) {
    header('Location: login.php');
    exit;
}

$titolPagina = 'La teva àrea privada';
require 'header.php';
?>

<h2>Hola, <?= htmlspecialchars($_SESSION['nom']) ?></h2>
<p>Has entrat a les
<strong><?= htmlspecialchars($_SESSION['entrada']) ?></strong>.</p>

<table>
    <?php foreach ($_SESSION as $clau => $valor): ?>
        <tr>
            <th><?= htmlspecialchars($clau) ?></th>
            <td><?= htmlspecialchars((string)$valor) ?></td>
        </tr>
    <?php endforeach; ?>
</table>

<a class="tornar" href="sortir.php">Tancar la sessió</a>

<?php
require 'footer.php';
