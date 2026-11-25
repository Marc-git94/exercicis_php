<?php
if (!isset($titolPagina)) {
    $titolPagina = 'Inici';
}
?>
<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= htmlspecialchars($titolPagina) ?> · <?= BOTIGA_NOM ?></title>
    <link rel="stylesheet" href="<?= FULL_ESTILS ?>">
</head>
<body>
<header>
    <div>
        <h1><?= BOTIGA_NOM ?></h1>
        <p><?= BOTIGA_LEMA ?></p>
    </div>
    <p class="usuari">
        <?php if (isset($_SESSION['usuari'])): ?>
            Hola, <strong><?= htmlspecialchars($_SESSION['nom']) ?></strong>
            &middot; <a href="sortir.php">Sortir</a>
        <?php else: ?>
            <a href="login.php">Iniciar sessió</a>
        <?php endif; ?>
    </p>
</header>
<main>
