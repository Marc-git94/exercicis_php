<?php

/*
Exercici 1: Buscar un grup
________________________________________
*/

// Array de grups (el mateix dels apartats anteriors, amb forats)
$grups[0] = 'Futbol';
$grups[1] = 'Basquet';
$grups[2] = 'Informatic';
$grups[8] = 'Fortnite';
$grups[]  = 'Minecraft';

// -	Amb in_array(), comprova si dos grups concrets son al cartell i mostra un 
//      missatge diferent per a cada cas.

$grupSi = 'Fortnite'; // aquest hi es
$grupNo = 'Tenis';    // aquest no hi es

// El true fa la comparació estricta (compara valor i tipus)
if (in_array($grupSi, $grups, true)) {
    echo "<p>$grupSi es al cartell</p>";
} else {
    echo "<p>$grupSi no es al cartell</p>";
}

if (in_array($grupNo, $grups, true)) {
    echo "<p>$grupNo es al cartell</p>";
} else {
    echo "<p>$grupNo no es al cartell</p>";
}

// -	Escriu la funció buscaGrup(array $llista, string $grup), que torni la 
//      posició on es el grup o -1 si no hi es.

function buscaGrup(array $llista, string $grup)
{
    foreach ($llista as $posicio => $valor) {
        if ($valor === $grup) {
            return $posicio; // el return surt immediatament de la funció i del bucle
        }
    }
    return -1; // si arriba aquí és que ha recorregut tot l'array i no l'ha trobat
}

// -	Prova-la amb un grup que hi sigui i un que no.

echo "<p>buscaGrup(\$grups, 'Fortnite'): " . buscaGrup($grups, 'Fortnite') . "</p>";
echo "<p>buscaGrup(\$grups, 'Tenis'): " . buscaGrup($grups, 'Tenis') . "</p>";

// Fixa-t'hi: in_array() et diu SI hi és; la meva funció et diu ON és.
// Dins de la funció, el return surt immediatament del bucle: un cop trobat
// el grup no cal seguir mirant la resta de caselles.


/*
Exercici 2: Les quatre ordenacions
________________________________________
*/

// -	Crea un array associatiu grup => nombre d'assistents, amb cinc grups.

$assistents = array(
    'Madrid'    => 60000,
    'Barcelona' => 45000,
    'Deportivo' => 12000,
    'Betis'     => 38000,
    'Atletico'  => 52000
);

// -	Fes quatre còpies i aplica a cadascuna asort(), arsort(), ksort() i krsort().

// Atenció: asort, ksort i companyia modifiquen l'array que reben, per això 
// primer fem les còpies i així l'original $assistents queda intacte.
$copia1 = $assistents;
$copia2 = $assistents;
$copia3 = $assistents;
$copia4 = $assistents;

asort($copia1);  // pel VALOR, de menor a major
arsort($copia2); // pel VALOR, de major a menor
ksort($copia3);  // per la CLAU, de menor a major
krsort($copia4); // per la CLAU, de major a menor

// -	Mostra els quatre resultats, cadascun amb el seu títol.

echo "<h3>asort(): pel valor, de menor a major</h3><pre>";
print_r($copia1);
echo "</pre>";

echo "<h3>arsort(): pel valor, de major a menor</h3><pre>";
print_r($copia2);
echo "</pre>";

echo "<h3>ksort(): per la clau, de menor a major</h3><pre>";
print_r($copia3);
echo "</pre>";

echo "<h3>krsort(): per la clau, de major a menor</h3><pre>";
print_r($copia4);
echo "</pre>";

// -	Explica en un comentari la diferència entre asort() i ksort().

/*
 * asort() ordena pel VALOR: aquí pel nombre d'assistents (Deportivo 12000 el
 * primer i Madrid 60000 l'últim). ksort() ordena per la CLAU: aquí pel nom del
 * grup, alfabèticament (Atletico el primer i Madrid l'últim).
 * En tots dos casos cada clau continua unida al seu valor: només canvia
 * l'ordre de les caselles.
 */


/*
Exercici 3: Barrejar el cartell
________________________________________
*/

// -	Aplica shuffle() a l'array associatiu de l'exercici anterior i mostra'l amb print_r().

// Ho faig sobre una còpia perquè shuffle() també modifica l'array que rep
$barrejat = $assistents;
shuffle($barrejat);

echo "<pre>";
print_r($barrejat);
echo "</pre>";

// -	Explica què ha passat amb els noms dels grups.

/*
 * Els noms dels grups s'han perdut. shuffle() desordena els valors a l'atzar
 * però crea claus numèriques noves (0, 1, 2, 3, 4) i descarta les claus
 * originals. Només queden els nombres d'assistents i ja no sabem a quin
 * grup pertany cadascun.
 */

// -	Fes-ho bé: barreja un array on els noms dels grups siguin el valor, i 
//      mostra l'ordre del sorteig en una llista numerada.

$cartell = array('Madrid', 'Barcelona', 'Deportivo', 'Betis', 'Atletico');
shuffle($cartell); // ara no perdem res: els noms són els valors

echo "<h3>Ordre del sorteig</h3>";
echo "<ol>";
foreach ($cartell as $grup) {
    echo "<li>$grup</li>";
}
echo "</ol>";

?>
