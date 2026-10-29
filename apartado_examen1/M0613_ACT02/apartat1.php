<?php
/*
Exercici 1: Les tres maneres
________________________________________
*/
// -	Crea $grups amb assignacio directa: cinc grups, i fes que un vagi a la 
//      posicio 8 i el seguent sense indicar posicio.

$grups[0] = 'Futbol';
$grups[1] = 'Basquet';
$grups[2] = 'Informatic';
$grups[8] = 'Fortnite';
$grups[] = 'Minecraft';

// -	Crea $estils amb array() i $edicions amb range(2019, 2026).

$estils = array('Esport', 'Treball', 'Videojoc');
$edicions = range(2019, 2026);

// -	Parteix una frase en paraules amb explode() i desa-la a $paraules.

$paraules = explode(' ', 'Escull el teu grup favorit');

// -	Mostra els quatre arrays amb print_r() dins del <pre> (busca informacio de 
//      que es <pre> i de com s’utilitza i fes-ho amb <pre>).

/* <pre></pre>
Respeta espacios y saltos de linea: Mantiene los espacios en blanco, tabulaciones 
y los enter (saltos de linea) exactamente como los escribiste en el codigo.
*/
echo "<pre>";

print_r($grups);
print_r($estils);
print_r($edicions);
print_r($paraules);

echo "</pre>";

// -	Mostra un dels arrays amb print_r(), var_dump() i var_export(), i escriu 
//      en un comentari quina diferencia hi veus.

// print_r() ho mostra de forma llegible: Array ( [0] => 2019 ... ), sense indicar el tipus
// var_dump() ho mostra amb el tipus de cada valor (int(2019)) i diu la mida de l'array: array(8)
// var_export() ho mostra com a codi PHP: array ( 0 => 2019, 1 => 2020, ... ), es podria copiar per recrear l'array

// Les tres van dins de <pre> perque, si no, el navegador ho mostraria tot en una sola linia
echo "<pre>";

print_r($edicions);
var_dump($edicions);
var_export($edicions);

echo "</pre>";

//      Atencio: mira be els indexs de $grups despres del 8. Per que el grup seguent no va a la posicio 2?

// Quan afegim amb [] sense indicar posicio, PHP agafa l'index numeric mes gran que hi ha 
// i li suma 1. Com que el mes gran era el 8, el seguent grup (Minecraft) va a la 9.
// No omple els forats: les posicions 3, 4, 5, 6 i 7 no existeixen (estan buides),
// mentre que la 0, 1 i 2 si que estan ocupades.


/*
Exercici 2: L’array associatiu
________________________________________*/

// -	Crea $estils com a array associatiu on la clau sigui el nom del grup i 
// el valor, el seu estil musical. Posa'n dos amb assignacio directa i dos mes amb array().

// Primer buidem $estils, perque abans era l'array numeric de l'exercici 1
// i si no es barrejarien les claus numeriques amb les de text
$estils = array();

// Dos amb assignacio directa (clau = nom de l'equip, valor = estil de joc)
$estils['Barcelona'] = '4-3-3';
$estils['Madrid'] = '4-3-3';

// Dos mes amb array(), units als anteriors amb array_merge()
$estils = array_merge($estils, array(
    'Betis' => '4-4-2',
    'Deportivo' => '4-2-1-3'
));

// -	Mostra per pantalla l'estil d'un grup concret accedint-hi per la clau.

echo "<p>L'estil del Betis es: " . $estils['Betis'] . "</p>";

// -	Afegeix-hi un grup nou i mostra l'array sencer amb print_r().

$estils['Atletico'] = '3-4-3';

echo "<pre>";
print_r($estils);
echo "</pre>";

// -	Mostra quants grups hi ha amb count().

echo "<p>Nombre de grups: " . count($estils) . "</p>";


/*
Exercici 3: Esborrar una casella
________________________________________*/

// -	Crea un array de cinc grups amb indexs numerics i mostra count().

$esports = array('Futbol', 'Basquet', 'Informatic', 'Fortnite', 'Minecraft');

echo "<pre>";
print_r($esports);
echo "</pre>";
echo "<p>count(): " . count($esports) . "</p>";

// -	Esborra el tercer grup amb unset() i torna a mostrar l'array i el count().

unset($esports[2]); // el tercer grup es la posició 2 (es comença a comptar des de 0)

echo "<pre>";
print_r($esports);
echo "</pre>";
echo "<p>count(): " . count($esports) . "</p>";

// -	Afegeix-hi un grup nou amb [] i mira a quina posicio ha anat a parar.

$esports[] = 'Tenis';

echo "<pre>";
print_r($esports);
echo "</pre>";

// Ha anat a la posicio 5: l'index mes gran era el 4 (Minecraft) i PHP hi suma 1.
// El forat de la posicio 2 no es reutilitza.

// -	Explica en un comentari per que, despres d'un unset(), un bucle for de 0 a count()-1 pot fallar.

// unset() esborra la casella pero no reindexa l'array: els indexs que queden son 0, 1, 3, 4 (i 5 
// despres d'afegir Tenis).
// Un for de 0 a count()-1 fa servir indexs correlatius, i aixo falla per dos motius:
//   1. Quan arriba a l'index 2, aquesta casella ja no existeix: PHP dona un avis (Undefined array key 2).
//   2. count() val menys que l'ultim index, aixi que el bucle s'atura abans d'hora
//      i l'ultim element (el de l'index 4 o 5) no es recorre mai.
// Solucions: recorrer amb foreach, o reindexar abans amb array_values().
