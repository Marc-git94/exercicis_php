<?php

/*
Exercici 1: Buscar un grup
*/

// Creamos el array $grups con índices numéricos.
// Hay huecos entre los índices 2 y 8, igual que en los ejercicios anteriores.
$grups[0] = 'Futbol';
$grups[1] = 'Basquet';
$grups[2] = 'Informatic';
$grups[8] = 'Fortnite';

// Añadimos Minecraft sin indicar un índice.
// PHP utiliza el índice numérico más alto (8) y le suma 1.
// Por tanto, Minecraft queda en el índice 9.
$grups[] = 'Minecraft';


// Guardamos en una variable el nombre de un grupo que sí existe.
$grupSi = 'Fortnite';

// Guardamos en otra variable el nombre de un grupo que no existe.
$grupNo = 'Tenis';

// in_array() comprueba si un valor existe dentro de un array.
// El tercer argumento, true, hace que la comparación sea estricta:
// compara tanto el valor como el tipo de dato.
if (in_array($grupSi, $grups, true)) {

    // Este mensaje aparece porque Fortnite está dentro del array.
    echo "<p>$grupSi es al cartell</p>";

} else {

    // Este mensaje aparecería si Fortnite no estuviera en el array.
    echo "<p>$grupSi no es al cartell</p>";
}

// Comprobamos si Tenis está dentro del array.
if (in_array($grupNo, $grups, true)) {

    // Este mensaje aparecería si Tenis estuviera en el array.
    echo "<p>$grupNo es al cartell</p>";

} else {

    // Este mensaje aparece porque Tenis no está dentro del array.
    echo "<p>$grupNo no es al cartell</p>";
}


// Creamos una función que recibe un array y el nombre de un grupo.
// array indica que el primer argumento debe ser un array.
// string indica que el segundo argumento debe ser una cadena de texto.
function buscaGrup(array $llista, string $grup)
{
    // Recorremos todos los elementos del array.
    // $posicio recibe la clave y $valor recibe el contenido.
    foreach ($llista as $posicio => $valor) {

        // Comparamos el valor actual con el grupo que buscamos.
        // === compara el valor y el tipo de dato.
        if ($valor === $grup) {

            // Devolvemos la posición donde hemos encontrado el grupo.
            // return termina inmediatamente la función.
            return $posicio;
        }
    }

    // Si hemos recorrido todo el array y no lo hemos encontrado,
    // devolvemos -1 para indicar que no existe.
    return -1;
}


// Llamamos a la función buscando Fortnite.
// La función devuelve 8, porque Fortnite está en el índice 8.
// Las barras invertidas \$ evitan que PHP interprete $grups
// como una variable dentro de esta cadena con comillas dobles.
echo "<p>buscaGrup(\$grups, 'Fortnite'): " . buscaGrup($grups, 'Fortnite') . "</p>";

// Buscamos Tenis.
// Como no existe, la función devuelve -1.
echo "<p>buscaGrup(\$grups, 'Tenis'): " . buscaGrup($grups, 'Tenis') . "</p>";

// Diferencia importante:
// in_array() nos dice si un valor existe (true o false).
// buscaGrup() nos devuelve la posición donde está o -1 si no existe.



/*
Exercici 2: Les quatre ordenacions
*/

// Creamos un array asociativo.
// Cada clave es el nombre de un grupo y cada valor es su número de asistentes.
$assistents = array(
    'Madrid'    => 60000,
    'Barcelona' => 45000,
    'Deportivo' => 12000,
    'Betis'     => 38000,
    'Atletico'  => 52000
);

// Creamos cuatro copias del array original.
// Así podemos ordenar cada copia de una forma distinta
// sin modificar el array original $assistents.
$copia1 = $assistents;
$copia2 = $assistents;
$copia3 = $assistents;
$copia4 = $assistents;

// asort() ordena por los VALORES de menor a mayor.
// Las claves originales se conservan asociadas a sus valores.
asort($copia1);

// arsort() ordena por los VALORES de mayor a menor.
arsort($copia2);

// ksort() ordena por las CLAVES de menor a mayor.
// Como las claves son nombres, quedan en orden alfabético.
ksort($copia3);

// krsort() ordena por las CLAVES de mayor a menor.
krsort($copia4);


// Mostramos el resultado de asort().
echo "<h3>asort(): pel valor, de menor a major</h3><pre>";
print_r($copia1);
echo "</pre>";

// Mostramos el resultado de arsort().
echo "<h3>arsort(): pel valor, de major a menor</h3><pre>";
print_r($copia2);
echo "</pre>";

// Mostramos el resultado de ksort().
echo "<h3>ksort(): per la clau, de menor a major</h3><pre>";
print_r($copia3);
echo "</pre>";

// Mostramos el resultado de krsort().
echo "<h3>krsort(): per la clau, de major a menor</h3><pre>";
print_r($copia4);
echo "</pre>";

/*
asort() ordena por el valor: en este caso, por el número de asistentes.
ksort() ordena por la clave: en este caso, por el nombre del grupo.

En ambos casos, cada nombre sigue asociado a su número de asistentes.
Solo cambia el orden de los elementos.
*/



/*
Exercici 3: Barrejar el cartell
*/

// Creamos una copia del array original para no modificarlo.
$barrejat = $assistents;

// shuffle() mezcla los elementos en un orden aleatorio.
// Importante: elimina las claves originales y crea índices numéricos nuevos.
shuffle($barrejat);

// Mostramos el array mezclado.
echo "<pre>";
print_r($barrejat);
echo "</pre>";

// Al mezclar el array asociativo, los nombres de los grupos se pierden
// como claves. Solo permanecen los números de asistentes, ahora asociados
// a los índices numéricos 0, 1, 2, 3 y 4.


// Creamos un array donde los nombres de los grupos son los valores.
// En este caso no hay claves asociativas que necesitemos conservar.
$cartell = array('Madrid', 'Barcelona', 'Deportivo', 'Betis', 'Atletico');

// Mezclamos los nombres de los grupos en un orden aleatorio.
shuffle($cartell);

// Mostramos el título del sorteo.
echo "<h3>Ordre del sorteig</h3>";

// Abrimos una lista HTML numerada.
echo "<ol>";

// Recorremos los grupos en el orden aleatorio que ha generado shuffle().
foreach ($cartell as $grup) {

    // Cada grupo aparece como un elemento numerado de la lista.
    echo "<li>$grup</li>";
}

// Cerramos la lista HTML.
echo "</ol>";

?>