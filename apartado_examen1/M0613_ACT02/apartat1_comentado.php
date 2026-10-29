<?php
/*
Exercici 1: Les tres maneres
*/

// Creamos un array llamado $grups mediante asignación directa.
// Indicamos manualmente la posición de cada elemento.

// Guardamos 'Futbol' en la posición 0.
$grups[0] = 'Futbol';

// Guardamos 'Basquet' en la posición 1.
$grups[1] = 'Basquet';

// Guardamos 'Informatic' en la posición 2.
$grups[2] = 'Informatic';

// Guardamos 'Fortnite' en la posición 8.
// Esto deja las posiciones 3, 4, 5, 6 y 7 sin elementos.
$grups[8] = 'Fortnite';

// Añadimos 'Minecraft' sin indicar una posición.
// PHP utiliza el índice numérico más alto (8) y le suma 1.
// Por tanto, 'Minecraft' se guarda en la posición 9.
$grups[] = 'Minecraft';


// Creamos un array utilizando array().
// Cada elemento recibe automáticamente un índice numérico: 0, 1 y 2.
$estils = array('Esport', 'Treball', 'Videojoc');

// Creamos un array con los números desde 2019 hasta 2026, ambos incluidos.
// range() genera automáticamente todos los valores del intervalo.
$edicions = range(2019, 2026);


// Dividimos la frase cada vez que aparece un espacio.
// explode() separa el texto y guarda cada palabra como un elemento del array.
$paraules = explode(' ', 'Escull el teu grup favorit');


// Mostramos los cuatro arrays.
echo "<pre>";

// print_r() muestra el contenido de un array de forma legible.
print_r($grups);
print_r($estils);
print_r($edicions);
print_r($paraules);

// Cerramos la etiqueta <pre>.
echo "</pre>";

// <pre> conserva los espacios y los saltos de línea del texto mostrado.
// Así podemos leer mejor los arrays en el navegador.


// Mostramos el array $edicions de tres maneras diferentes.
echo "<pre>";

// print_r() muestra los índices y los valores de forma legible.
// No indica explícitamente el tipo de dato de cada elemento.
print_r($edicions);

// var_dump() muestra información más detallada:
// indica el tipo de dato, el valor y el número de elementos del array.
var_dump($edicions);

// var_export() representa el array como código PHP.
// Su resultado se puede utilizar para reconstruir el array.
var_export($edicions);

echo "</pre>";


// ¿Por qué Minecraft no se guarda en la posición 2?
// Porque al utilizar [] sin indicar el índice, PHP busca el índice
// numérico más alto existente y le suma 1.
// El índice más alto era 8, así que Minecraft se guarda en el 9.
// PHP no rellena automáticamente los huecos de las posiciones anteriores.



/*
Exercici 2: L'array associatiu
*/

// Creamos un array vacío llamado $estils.
// Lo hacemos porque antes $estils contenía el array del ejercicio 1.
// Así evitamos mezclar los datos de los dos ejercicios.
$estils = array();

// Añadimos elementos mediante asignación directa.
// En este caso, las claves son nombres de equipos y los valores
// representan sus sistemas de juego.
$estils['Barcelona'] = '4-3-3';
$estils['Madrid'] = '4-3-3';

// Creamos otro array asociativo con dos equipos más.
// array_merge() combina este nuevo array con el que ya tenemos.
$estils = array_merge($estils, array(
    'Betis' => '4-4-2',
    'Deportivo' => '4-2-1-3'
));

// Accedemos directamente al valor asociado a la clave 'Betis'.
// Concatenamos el texto con el valor para mostrarlo en un párrafo HTML.
echo "<p>L'estil del Betis es: " . $estils['Betis'] . "</p>";

// Añadimos un equipo nuevo al array mediante su clave.
$estils['Atletico'] = '3-4-3';

// Mostramos el array asociativo completo.
echo "<pre>";
print_r($estils);
echo "</pre>";

// count() cuenta cuántos elementos tiene el array.
// En este caso, hay cinco equipos.
echo "<p>Nombre de grups: " . count($estils) . "</p>";



/*
Exercici 3: Esborrar una casella
*/

// Creamos un array numérico con cinco elementos.
// PHP asigna automáticamente los índices del 0 al 4.
$esports = array('Futbol', 'Basquet', 'Informatic', 'Fortnite', 'Minecraft');

// Mostramos el array completo.
echo "<pre>";
print_r($esports);
echo "</pre>";

// Contamos los elementos del array.
// El resultado inicial es 5.
echo "<p>count(): " . count($esports) . "</p>";

// Eliminamos el elemento que está en el índice 2.
// Como los índices empiezan en 0, corresponde al tercer elemento: Informatic.
unset($esports[2]);

// Mostramos el array después de eliminar el elemento.
// Los índices restantes no se reorganizan automáticamente.
echo "<pre>";
print_r($esports);
echo "</pre>";

// Ahora count() devuelve 4, porque quedan cuatro elementos.
echo "<p>count(): " . count($esports) . "</p>";

// Añadimos un nuevo elemento sin especificar el índice.
// El índice numérico más alto que queda es 4.
// Por eso, PHP añade 'Tenis' en el índice 5.
$esports[] = 'Tenis';

// Mostramos el array actualizado.
echo "<pre>";
print_r($esports);
echo "</pre>";

// ¿Por qué un bucle for puede fallar después de unset()?
// unset() elimina el elemento, pero no reorganiza los índices.
// Los índices pasan a ser 0, 1, 3, 4 y, después de añadir Tenis, 5.
//
// Si utilizamos un for desde 0 hasta count($esports) - 1,
// recorreremos los índices 0, 1, 2, 3 y 4.
// El índice 2 ya no existe, así que se producirá un aviso
// si intentamos acceder a él, y no llegaremos al índice 5.
//
// Una solución es utilizar foreach(), que recorre los elementos existentes.
// Otra solución es utilizar array_values() para crear un array
// con índices numéricos consecutivos desde 0.

?>