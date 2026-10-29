<?php
// Comprueba si la petición que ha llegado al servidor utiliza el método POST.
// Este es el método que utiliza el formulario para enviar los datos.
if ($_SERVER['REQUEST_METHOD'] !== 'POST') {

    // Muestra un mensaje indicando que se debe acceder desde el formulario.
    echo '<p>Has d\'arribar aqui des del formulari. ';

    // Muestra un enlace para volver a la página del formulario.
    echo '<a href="registre.html">Torna-hi</a></p>';

    // Detiene la ejecución del archivo PHP.
    // El código que viene después ya no se ejecutará.
    exit;
}

// Crea un array associatiu amb les dades de l'usuari.
// Cada camp té una clau (nom, cognoms, correu...) i un valor.
$usuari = [

    // Recupera el nom enviat pel formulari.
    // ?? '' significa que, si el camp no existeix, s'utilitza una cadena buida.
    // trim() elimina els espais del principi i del final.
    'nom' => trim($_POST['nom'] ?? ''),

    // Recupera els cognoms i elimina els espais sobrants.
    'cognoms' => trim($_POST['cognoms'] ?? ''),

    // Recupera la data de naixement.
    'naixement' => trim($_POST['naixement'] ?? ''),

    // Recupera el telèfon.
    'telefon' => trim($_POST['telefon'] ?? ''),

    // Recupera el correu electrònic.
    'correu' => trim($_POST['correu'] ?? ''),

    // Recupera el nom d'usuari.
    'usuari' => trim($_POST['usuari'] ?? ''),

    // Recupera el carrer i el número.
    'carrer' => trim($_POST['carrer'] ?? ''),

    // Recupera la població.
    'poblacio' => trim($_POST['poblacio'] ?? ''),

    // Recupera el codi postal.
    'cp' => trim($_POST['cp'] ?? ''),

    // Recupera el tipus de client seleccionat.
    'tipus' => trim($_POST['tipus'] ?? ''),

    // Recupera l'origen pel qual l'usuari ha conegut BitBazar.
    'origen' => trim($_POST['origen'] ?? ''),

    // Comprova si existeix la casella butlleti.
    // Si està marcada, guarda 'Si'; si no, guarda 'No'.
    'butlleti' => isset($_POST['butlleti']) ? 'Si' : 'No',

    // Comprova si s'han acceptat les condicions.
    // Si la casella està marcada, guarda 'Si'; si no, guarda 'No'.
    'condicions' => isset($_POST['condicions']) ? 'Si' : 'No',
];

// Recupera la contrasenya.
// No s'aplica trim(), perquè els espais també poden formar part de la contrasenya.
$clau = $_POST['clau'] ?? '';

// Recupera la contrasenya repetida.
$clau2 = $_POST['clau2'] ?? '';

// Crea un array buit on es guardaran els missatges d'error.
$errors = [];

// Comprova si el nom està buit.
if ($usuari['nom'] === '') {

    // Afegeix un missatge a l'array d'errors.
    $errors[] = 'El nom és obligatori.';
}

// Comprova si els cognoms estan buits.
if ($usuari['cognoms'] === '') {

    // Afegeix un error si no s'han introduït els cognoms.
    $errors[] = 'Els cognoms són obligatoris.';
}

// Comprova si el correu està buit.
if ($usuari['correu'] === '') {

    // Afegeix un error si falta el correu.
    $errors[] = 'El correu és obligatori.';

// Si el correu no està buit, comprova que tingui un format vàlid.
} elseif (filter_var($usuari['correu'], FILTER_VALIDATE_EMAIL) === false) {

    // Afegeix un error si el format del correu no és vàlid.
    $errors[] = 'El correu no té un format vàlid.';
}

// Comprova si el nom d'usuari té menys de 4 caràcters.
if (strlen($usuari['usuari']) < 4) {

    // Afegeix un error si no arriba als 4 caràcters.
    $errors[] = 'El nom d\'usuari ha de tenir com a mínim 4 caràcters.';
}

// Comprova si la contrasenya té menys de 6 caràcters.
if (strlen($clau) < 6) {

    // Afegeix un error si la contrasenya és massa curta.
    $errors[] = 'La contrasenya ha de tenir com a mínim 6 caràcters.';
}

// Compara les dues contrasenyes.
// !== comprova si són diferents.
if ($clau !== $clau2) {

    // Afegeix un error si les contrasenyes no coincideixen.
    $errors[] = 'Les dues contrasenyes no coincideixen.';
}

// Comprova el codi postal només si no està buit.
// preg_match() comprova si el text compleix una expressió regular.
// /^[0-9]{5}$/ significa que ha de contenir exactament 5 xifres.
if ($usuari['cp'] !== '' && preg_match('/^[0-9]{5}$/', $usuari['cp']) !== 1) {

    // Afegeix un error si el codi postal no té el format esperat.
    $errors[] = 'El codi postal ha de tenir exactament 5 xifres.';
}

// Comprova si s'ha seleccionat un tipus de client.
if ($usuari['tipus'] === '') {

    // Afegeix un error si no s'ha triat cap tipus de client.
    $errors[] = 'Has de triar un tipus de client.';
}

// Comprova si l'usuari no ha acceptat les condicions.
if ($usuari['condicions'] === 'No') {

    // Afegeix un error perquè acceptar les condicions és obligatori.
    $errors[] = 'Has d\'acceptar les condicions del servei.';
}
?>
<!-- Aquí acaba el primer bloc PHP i comença l'HTML de la pàgina. -->

<!DOCTYPE html>
<!-- Indica que el document utilitza HTML5. -->

<html lang="ca">
<!-- Indica que l'idioma principal de la pàgina és el català. -->

<head>
    <!-- Conté la configuració de la pàgina. -->

    <meta charset="UTF-8">
    <!-- Permet mostrar correctament accents i caràcters especials. -->

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Adapta l'amplada de la pàgina a la pantalla del dispositiu. -->

    <title>BitBazar - Resultat</title>
    <!-- Defineix el títol que apareix a la pestanya del navegador. -->

    <link rel="stylesheet" href="estils.css">
    <!-- Connecta la pàgina amb el fitxer CSS estils.css. -->
</head>

<body>
    <!-- Conté el contingut visible de la pàgina. -->

    <main>
        <!-- Identifica el contingut principal. -->

        <h1>BitBazar</h1>
        <!-- Mostra el títol principal. -->

        <?php if (count($errors) > 0): ?>
        <!-- Comprova si hi ha errors.
             count($errors) compta quants missatges hi ha a l'array.
             Si n'hi ha més de zero, mostra el bloc següent. -->

            <h2>No s'ha pogut crear el compte</h2>
            <!-- Informa que hi ha errors al formulari. -->

            <ul>
                <!-- Crea una llista de missatges d'error. -->

                <?php foreach ($errors as $error): ?>
                <!-- Recorre l'array d'errors un per un.
                     A cada volta, $error conté un missatge diferent. -->

                    <li><?= htmlspecialchars($error) ?></li>
                    <!-- Mostra el missatge dins d'un element de llista.
                         htmlspecialchars() evita que el text s'interpreti com HTML.
                         <-?= ... ?> és una manera curta d'escriure echo. -->

                <?php endforeach; ?>
                <!-- Acaba el bucle foreach. -->

            </ul>
            <!-- Tanca la llista d'errors. -->

            <p><a href="registre.html">Torna al formulari</a></p>
            <!-- Mostra un enllaç per tornar al formulari. -->

        <?php else: ?>
        <!-- Si no hi ha cap error, s'executa aquest altre bloc. -->

            <h2>Benvingut/da, <?= htmlspecialchars($usuari['nom']) ?>!</h2>
            <!-- Mostra el nom de l'usuari.
                 htmlspecialchars() protegeix la sortida HTML. -->

            <p>El teu compte s'ha creat correctament. T'enviarem la confirmació a
                <strong><?= htmlspecialchars($usuari['correu']) ?></strong>.</p>
            <!-- Mostra un missatge de confirmació i el correu introduït.
                 strong posa el correu en negreta. -->

            <p>Dades registrades (<?= count($usuari) ?> camps):</p>
            <!-- Mostra quants camps hi ha dins de l'array $usuari.
                 En aquest cas, count($usuari) retorna 13. -->

            <table>
                <!-- Crea una taula per mostrar les dades registrades. -->

                <?php foreach ($usuari as $camp => $valor): ?>
                <!-- Recorre l'array associatiu.
                     $camp conté la clau, com ara 'nom' o 'correu'.
                     $valor conté el valor corresponent. -->

                    <tr>
                        <!-- Crea una fila de la taula. -->

                        <th><?= htmlspecialchars($camp) ?></th>
                        <!-- Mostra el nom del camp com a capçalera de fila. -->

                        <td><?= htmlspecialchars($valor) ?></td>
                        <!-- Mostra el valor del camp en una cel·la.
                             htmlspecialchars() evita interpretar el valor com HTML. -->
                    </tr>

                <?php endforeach; ?>
                <!-- Acaba el bucle que mostra totes les dades. -->

            </table>
            <!-- Tanca la taula. -->

        <?php endif; ?>
        <!-- Acaba la condició: mostra errors o mostra les dades correctes. -->

    </main>
    <!-- Tanca el contingut principal. -->

</body>
<!-- Tanca el cos de la pàgina. -->

</html>
<!-- Tanca el document HTML. -->