<!-- Crear array asociativo con:
 - nombre
 - curso
 - edat
 - nota_media

 10 alumnes

 Mostrarlos en una tabla html
-->

<?php

$alumnes = [
    ['nombre' => 'Marc', 'curso' => 'A', 'edat' => 20, 'nota_media' => 7],
    ['nombre' => 'Laia', 'curso' => 'B', 'edat' => 21, 'nota_media' => 9],
    ['nombre' => 'Joan', 'curso' => 'A', 'edat' => 22, 'nota_media' => 8],
    ['nombre' => 'Anna', 'curso' => 'C', 'edat' => 19, 'nota_media' => 7],
    ['nombre' => 'Pablo', 'curso' => 'B', 'edat' => 23, 'nota_media' => 5],
    ['nombre' => 'Marta', 'curso' => 'A', 'edat' => 21, 'nota_media' => 10],
    ['nombre' => 'Albert', 'curso' => 'C', 'edat' => 18, 'nota_media' => 6],
    ['nombre' => 'Elena', 'curso' => 'B', 'edat' => 20, 'nota_media' => 7],
    ['nombre' => 'Jordi', 'curso' => 'A', 'edat' => 22, 'nota_media' => 9],
    ['nombre' => 'Sara', 'curso' => 'C', 'edat' =>25, 'nota_media' => 8],
];

// Buscado en php.net

//////////////// count — Cuenta todos los elementos de un array o en un objeto Countable //////////////

// function count(Countable|array $value, int $mode = COUNT_NORMAL): int
// Ejemplo:

/*
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(count($a));

$b[0]  = 7;
$b[5]  = 9;
$b[10] = 11;
var_dump(count($b));
*/

// Ejemplo con $alumnes: cuántos alumnos hay en total
echo "Número de alumnos: " . count($alumnes) . "\n";

echo "<br>";

/////////////////// in_array — Indica si un valor pertenece a un array //////////////////////////

// function in_array(mixed $needle, array $haystack, bool $strict = false): bool
// Ejemplo:

/*
$os = array("Mac", "NT", "Irix", "Linux");
if (in_array("Irix", $os)) {
    echo "Got Irix";
}
if (in_array("mac", $os)) {
    echo "Got mac";
}
*/

// Ejemplo con $alumnes: comprobar si existe un alumno con curso "B"
$cursos = array_column($alumnes, 'curso');
if (in_array("B", $cursos)) {
    echo "Hay al menos un alumno en el curso B\n";
}

echo "<br>";

/////////////////// array_key_exists — Verifica si una clave existe en un array /////////////////////

// function array_key_exists(string|int|float|bool|resource|null $key, array $array): bool
// Ejemplo:

/*
$searchArray = ['first' => 1, 'second' => 4];
var_dump(array_key_exists('first', $searchArray));
*/

// Ejemplo con $alumnes: comprobar si el primer alumno tiene la clave 'nota_media'
if (array_key_exists('nota_media', $alumnes[0])) {
    echo "El alumno tiene nota media registrada\n";
}

echo "<br>";

////////////////////////// sort — Ordena un array en orden creciente //////////////////////////////

// function sort(array &$array, int $flags = SORT_REGULAR): true
// Ejemplo:

/*
$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);
foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}
*/

// Ejemplo con $alumnes: ordenar las notas medias de menor a mayor
$notas = array_column($alumnes, 'nota_media');
sort($notas);
foreach ($notas as $nota) {
    echo "Nota: $nota\n";
}

echo "<br>";

////////////////////////// rsort — Ordena un array en orden decreciente ////////////////////////

// function rsort(array &$array, int $flags = SORT_REGULAR): true
// Ejemplo:

/*
$fruits = array("lemon", "orange", "banana", "apple");
rsort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
*/

// Ejemplo con $alumnes: ordenar las notas medias de mayor a menor
$notas = array_column($alumnes, 'nota_media');
rsort($notas);
foreach ($notas as $nota) {
    echo "Nota: $nota\n";
}

echo "<br>";

////////////////////////// ksort — Ordena un array según las claves en orden ascendente ///////////////

// function ksort(array &$array, int $flags = SORT_REGULAR): true
// Ejemplo:

/*
$fruits = array("d"=>"lemon", "a"=>"orange", "b"=>"banana", "c"=>"apple");
ksort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}
*/

// Ejemplo con $alumnes: crear un array nombre => nota_media y ordenarlo por nombre (clave)
$notas_por_nombre = array_column($alumnes, 'nota_media', 'nombre');
ksort($notas_por_nombre);
foreach ($notas_por_nombre as $nombre => $nota) {
    echo "$nombre tiene nota de $nota\n</br>";
}

echo "<br>";

///////////////////////////// array_sum — Calcula la suma de los valores del array ////////////////////

// function array_sum(array $array): int|float
// Ejemplo:

/*
$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a) . "\n";

$b = array("a" => 1.2, "b" => 2.3, "c" => 3.4);
echo "sum(b) = " . array_sum($b) . "\n";
*/

// Ejemplo con $alumnes: suma de todas las notas medias
$notas = array_column($alumnes, 'nota_media');
echo "Suma de notas: " . array_sum($notas) . "\n<br>";
echo "Media de la clase: " . (array_sum($notas) / count($notas)) . "\n<br>";

echo "<br>";

//////////////////////////////////// max — El valor más grande ////////////////////////////////

// function max(mixed $value, mixed ...$values): mixed
// Ejemplo:

/*
echo max(2, 3, 1, 6, 7), PHP_EOL;  // 7
echo max(array(2, 4, 5)), PHP_EOL; // 5

// Aquí, comparamos -1 < 0, por lo que 'hello' es el valor más grande
echo max('hello', -1), PHP_EOL;    // hello

// Con varios arrays de diferentes tamaños, max devuelve
// el más largo
$val = max(array(2, 2, 2), array(1, 1, 1, 1)); // array(1, 1, 1, 1)
var_dump($val);

// Varios arrays de la misma longitud son comparados de izquierda a derecha
// también, en nuestro ejemplo: 2 == 2, pero 5 > 4
$val = max(array(2, 4, 8), array(2, 5, 1)); // array(2, 5, 1)
var_dump($val);

// Si se proporciona un array y un no-array, el array será siempre
// devuelto, sabiendo que las comparaciones tratan los arrays como
// más grandes que cualquier valor
$val = max('string', array(2, 5, 7), 42);   // array(2, 5, 7)
var_dump($val);

// Si un argumento es NULL o un booleano, será comparado con otros
// valores utilizando la regla FALSE < TRUE según los otros tipos concernidos
// En el ejemplo de abajo, -10 es tratado como TRUE en la comparación
$val = max(-10, FALSE); // -10
var_dump($val);

// Por otro lado, 0 es tratado como FALSE, por lo que es "más pequeño que" TRUE
$val = max(0, TRUE); // TRUE
var_dump($val);
*/

// Ejemplo con $alumnes: la nota media más alta
$notas = array_column($alumnes, 'nota_media');
echo "Nota más alta: " . max($notas) . "\n";

echo "<br>";

///////////////////////////////////// min — El valor más pequeño ///////////////////////////////

// function min(mixed $value, mixed ...$values): mixed
// Ejemplo:

/*
echo min(2, 3, 1, 6, 7), PHP_EOL;  // 1
echo min(array(2, 4, 5)), PHP_EOL; // 2

// Aquí, comparamos -1 < 0, por lo tanto, -1 es el valor más bajo
echo min('hello', -1), PHP_EOL;    // -1

// Con varios arrays de diferentes tamaños, min retorna el más corto
$val = min(array(2, 2, 2), array(1, 1, 1, 1)); // array(2, 2, 2)
var_dump($val);

// Varios arrays del mismo tamaño son comparados desde la izquierda hacia la derecha,
// por lo tanto, en nuestro ejemplo: 2 == 2, pero 4 < 5
$val = min(array(2, 4, 8), array(2, 5, 1)); // array(2, 4, 8)
var_dump($val);

// Si se proporciona un array y un no-array, el array nunca será retornado
// ya que las comparaciones tratan los arrays como mayores que cualquier valor
$val = min('string', array(2, 5, 7), 42);   // string
var_dump($val);

// Si un argumento es NULL o un booleano, será comparado con
// otras valores utilizando la regla FALSE < TRUE según los otros
// tipos proporcionados. En el ejemplo de abajo, tanto -10 como 10 son tratados
// como valiendo TRUE en la comparación
$val = min(-10, FALSE, 10); // FALSE
var_dump($val);

$val = min(-10, NULL, 10);  // NULL
var_dump($val);

// Por otro lado, 0 es tratado como valiendo FALSE, por lo tanto, es "más pequeño que" TRUE
$val = min(0, TRUE); // 0
var_dump($val);
*/

// Ejemplo con $alumnes: la nota media más baja
$notas = array_column($alumnes, 'nota_media');
echo "Nota más baja: " . min($notas) . "\n";

echo "<br>";


/////////////////// array_column — Devuelve los valores de una columna de un array de entrada ///////////

// function array_column(array $array, int|string|null $column_key, int|string|null $index_key = null): array
//Ejemplo:
// Array que representa un conjunto de registros de una base de datos

/*
$records = [
    [
        'id' => 2135,
        'first_name' => 'John',
        'last_name' => 'Doe',
    ],
    [
        'id' => 3245,
        'first_name' => 'Sally',
        'last_name' => 'Smith',
    ],
    [
        'id' => 5342,
        'first_name' => 'Jane',
        'last_name' => 'Jones',
    ],
    [
        'id' => 5623,
        'first_name' => 'Peter',
        'last_name' => 'Doe',
    ]
];

$first_names = array_column($records, 'first_name');
print_r($first_names);
*/

// Ejemplo con $alumnes: obtener solo los nombres de todos los alumnos
$nombres = array_column($alumnes, 'nombre');
print_r($nombres);

echo "<br>";

///////////////////////////// implode — Une elementos de un array en un string //////////////////////////
// function implode(string $separator, array $array): string
// Ejemplo:

/*
$array = ['lastname', 'email', 'phone'];
var_dump(implode(",", $array)); // string(20) "lastname,email,phone"

// Devuelve un string vacío si se usa un array vacío:
var_dump(implode('hello', [])); // string(0) ""

// El separador es opcional:
var_dump(implode(['a', 'b', 'c'])); // string(3) "abc"
*/

// Ejemplo con $alumnes: lista de nombres separados por comas
$nombres = array_column($alumnes, 'nombre');
echo implode(", ", $nombres) . "\n";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Alumnos</title>
</head>
<body>

    <table>
            <tr>
                <th>Nombre</th>
                <th>Curso</th>
                <th>Edad</th>
                <th>Nota Media</th>
            </tr>

            <?php foreach ($alumnes as $alumne): ?>
                <tr>
                    <td><?=$alumne['nombre']?></td>
                    <td><?=$alumne['curso']?></td>
                    <td><?=$alumne['edat']?></td>
                    <td><?=$alumne['nota_media']?></td>
                </tr>
            <?php endforeach; ?>            
    </table>

</body>
</html>
