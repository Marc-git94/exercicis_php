<?php

/**
 * PAS 3 - Una sola página
 * Fins ara teníem dos fitxers, el formulari i el resultat
 * Mira com es fa la petició i així farà una cosa o altre
 * La primera visita és amb GET i quan es prem el botó d'enviar és amb POST
 */

 $nom = '';
 $correu = '';
 $dia = '';
 $repetir = '';
 $carrer = '';
 $numero = '';
 $telefon = '';

 // var de control
 $enviat = false;

 // Array predefinido $_SERVER nos da información del servidor
 // echo "<pre>";
 // print_r($_SERVER);
 // echo "</pre>";

 // Si el REQUEST_METHOD es POST, es que ya se ha hecho click al botón de enviar del formulario con método POST
 if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $nom = trim($_POST['nom'] ?? '');
  $correu = trim($_POST['correu'] ?? '');
  $dia = trim($_POST['dia'] ?? 'sense triar');
  $repetir = trim($_POST['repetir'] ?? '');
  $carrer = trim($_POST['carrer'] ?? '');
  $numero = trim($_POST['numero'] ?? '');
  $telefon = trim($_POST['telefon'] ?? '');
  $enviat = true;
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inscripció al festival</title>
  <link rel="stylesheet" href="pas1-formulari.css">
</head>
<body>
  <h1>Inscripció al festival</h1>
  <?php if ($enviat) :?>
    <p>Inscripció rebuda: <?= $nom; ?><br>
    (<?= $correu ?>)<br>
    dia: <?= $dia ?><br>
    carrer: <?= $carrer . ", " . $numero ?><br>
    telèfon: <?= $telefon ?></p>
  <?php endif; ?>
  <form method="post">
    <label for="nom">Nom: </label>
    <input type="text" id="nom" name="nom"><br>
    <label for="correu">Correu: </label>
    <input type="email" id="correu" name="correu"><br>
    <label for="repetirCorreu">Repetir correu: </label>
    <input type="email" id="repetirCorreu" name="repetirCorreu"><br>
    <label for="dia">Dia: </label>
    <select id="dia" name="dia">
      <option value="divendres">Divendres</option>
      <option value="dissabte">Dissabte</option>
    </select><br>
    <label for="carrer">Carrer: </label>
    <input type="text" id="carrer" name="carrer"><br>
    <label for="numero">Número: </label>
    <input type="number" id="numero" name="numero"><br>
    <label for="telefon">Telefon: </label>
    <input type="number" id="telefon" name="telefon"><br>
    <button>Inscribirme</button>
  </form>
</body>
</html>