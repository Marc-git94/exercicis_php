<?php
/*
Exercici 1: Foreach bàsic
________________________________________
*/

// -	Amb el teu array de grups, genera una llista <ul> amb un <li> per grup, 
//      fent servir foreach i la sintaxi alternativa.
?>
<ul>
    <?php foreach ($grups as $grup): ?>
        <li><?= $grup ?></li>
    <?php endforeach; ?>
</ul>

<?php
// -	Fes-ne una segona versio que mostri també la posició de cada grup.
?>

<ul>
    <?php foreach ($grups as $posicio => $grup): ?>
        <li>Posicio <?= $posicio ?>: <?= $grup ?></li>
    <?php endforeach; ?>
</ul>
<?php
// Les posicions que surten son 0, 1, 2, 8 i 9. Amb foreach no cal saber
// que hi ha forats: el bucle només passa per les caselles que existeixen.


/*
Exercici 2: Foreach sobre un associatiu
________________________________________
*/

// -	Amb l'array associatiu grup => estil, genera una taula HTML amb dues columnes.
?>

<?php
// Construïm la taula en un text ($taula1) perquè a l'exercici 3 puguem comparar-la
$taula1  = "<table border='1' cellpadding='5'>";
$taula1 .= "<tr><th>Grup</th><th>Estil</th></tr>";

foreach ($estils as $grup => $estil) {
    $taula1 .= "<tr><td>$grup</td><td>$estil</td></tr>";
}

// -	Afegeix una fila al final amb el total de grups.

$taula1 .= "<tr><td><strong>Total de grups</strong></td><td><strong>" . count($estils) . "</strong></td></tr>";
$taula1 .= "</table>";

echo $taula1;


/*
Exercici 3: El mateix sense foreach
________________________________________
*/

// -	Recorre el mateix array associatiu amb do-while i les funcions reset(), 
//      key(), current() i next().
?>

<?php
$taula2  = "<table border='1' cellpadding='5'>";
$taula2 .= "<tr><th>Grup</th><th>Estil</th></tr>";

reset($estils); // ens situem a la primera casella

do {
    $grup  = key($estils);     // clau de la casella on som
    $estil = current($estils); // valor de la casella on som
    $taula2 .= "<tr><td>$grup</td><td>$estil</td></tr>";
} while (next($estils));       // avancem; al final, next() torna false

$taula2 .= "<tr><td><strong>Total de grups</strong></td><td><strong>" . count($estils) . "</strong></td></tr>";
$taula2 .= "</table>";

echo $taula2;

// -	Comprova que la sortida es identica a la de l'E2.

if ($taula1 === $taula2) {
    echo "<p>Comprovacio: la taula es identica a la de l'exercici 2</p>";
} else {
    echo "<p>Comprovacio: les dues taules son diferents</p>";
}

// -	Escriu en un comentari quina de les dues maneres et sembla mes clara i per que

/*
 * Em sembla mes clara la de foreach. Es mes curta i es llegeix com una frase
 * ("per cada grup i estil de $estils"), i no he de pensar en el punter de l'array.
 * Amb do-while he de recordar fer reset() abans de començar, llegir la casella
 * abans de mirar si n'hi ha una de següent (per això do-while i no while)
 * i saber que next() torna false al final. Si m'oblido d'alguna d'aquestes coses,
 * el bucle falla. A mes, el do-while s'aturaria abans d'hora si algun valor fos
 * false o 0, perque next() torna aquest valor. Foreach no te aquests problemes
 */


/*
Exercici 4: A l’inreves, dins d’una funcio
________________________________________
*/

// -	Escriu la funcio recorrerInvers(array $llista) que mostri els elements de 
//      l'ultim al primer amb end(), key(), current() i prev().
?>

<?php
function recorrerInvers(array $llista)
{
    if (empty($llista)) {      // si l'array es buit, no hi ha res a mostrar
        return;
    }

    end($llista);              // ens situem a l'ultima casella

    do {
        $clau  = key($llista);
        $valor = current($llista);
        echo "$clau: $valor<br>";
    } while (prev($llista));   // retrocedim; a la primera, prev() torna false
}

// -	Crida-la passant-li l'array de grups i estils.

// Deixem el punter de l'array original a la primera casella i ho comprovem
reset($estils);
echo "<p>Abans de cridar la funcio, el punter es a: " . key($estils) . "</p>";

echo "<h3>Recorregut invers</h3>";
recorrerInvers($estils);

echo "<p>Despres de cridar la funcio, el punter es a: " . key($estils) . "</p>";

// -	Despres de cridar-la, recorre l'array original amb un foreach normal i 
//      comprova que no s'ha vist afectat.

echo "<h3>Array original amb foreach</h3>";
foreach ($estils as $grup => $estil) {
    echo "$grup: $estil<br>";
}

// Fixa-t'hi: la funcio rep una copia de l'array, aixi que moure el punter a dins 
// no toca l'original de fora.

/*
 * L'array original no s'ha vist afectat: es mostra en l'ordre de sempre
 * i el punter continua a la mateixa casella.
 * Aixo passa perque la funcio rep una copia de l'array (pas per valor),
 * aixi que els end() i prev() de dins de la funcio mouen el punter de la copia
 * i no el de l'array de fora.
 */
?>
