<!-- Comentario HTML: describe el objetivo del ejercicio.
     Crear un array asociativo con nombre, curso, edad y nota media.
     Añadir 10 alumnos y mostrarlos en una tabla HTML. -->

<?php

// Creamos el array principal $alumnes.
// Cada elemento es un array asociativo que representa a un alumno.
// => relaciona una clave con su valor.

$alumnes = [
    // Primer alumno: nombre Marc, curso A, 20 años y nota media 7.
    ['nombre' => 'Marc',   'curso' => 'A', 'edat' => 20, 'nota_media' => 7],

    // Segundo alumno: nombre Laia, curso B, 21 años y nota media 9.
    ['nombre' => 'Laia',   'curso' => 'B', 'edat' => 21, 'nota_media' => 9],

    // Tercer alumno.
    ['nombre' => 'Joan',   'curso' => 'A', 'edat' => 22, 'nota_media' => 8],

    // Cuarto alumno.
    ['nombre' => 'Anna',   'curso' => 'C', 'edat' => 19, 'nota_media' => 7],

    // Quinto alumno.
    ['nombre' => 'Pablo',  'curso' => 'B', 'edat' => 23, 'nota_media' => 5],

    // Sexto alumno.
    ['nombre' => 'Marta',  'curso' => 'A', 'edat' => 21, 'nota_media' => 10],

    // Séptimo alumno.
    ['nombre' => 'Albert', 'curso' => 'C', 'edat' => 18, 'nota_media' => 6],

    // Octavo alumno.
    ['nombre' => 'Elena',  'curso' => 'B', 'edat' => 20, 'nota_media' => 7],

    // Noveno alumno.
    ['nombre' => 'Jordi',  'curso' => 'A', 'edat' => 22, 'nota_media' => 9],

    // Décimo alumno.
    ['nombre' => 'Sara',   'curso' => 'C', 'edat' => 25, 'nota_media' => 8],
];

// Cerramos PHP para escribir la estructura HTML de la página.
?>

<!DOCTYPE html>
<!-- Indica que el documento utiliza HTML5. -->
<html lang="es">
<!-- Define el idioma principal de la página: español. -->

<head>
    <!-- Permite mostrar correctamente tildes, ñ y otros caracteres. -->
    <meta charset="UTF-8">

    <!-- Adapta el ancho de la página a móviles y tabletas. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Título que aparece en la pestaña del navegador. -->
    <title>Tabla de Alumnos</title>
</head>

<body>
<!-- Aquí empieza el contenido visible de la página. -->

<?php

// =====================================================
// 1. COUNT(): CONTAR ELEMENTOS
// =====================================================

// count() devuelve el número de elementos que tiene un array.
// En este caso, $alumnes contiene 10 alumnos.
echo "Número de alumnos: " . count($alumnes);
// El punto (.) concatena el texto con el resultado de count().
// Resultado: Número de alumnos: 10.

// Este ejemplo original está comentado y no se ejecuta:
/*
$a[0] = 1;
$a[1] = 3;
$a[2] = 5;
var_dump(count($a)); // Mostraría que hay 3 elementos.

$b[0]  = 7;
$b[5]  = 9;
$b[10] = 11;
var_dump(count($b)); // También hay 3 elementos.
*/

// Inserta dos saltos de línea HTML para separar los resultados.
echo "<br><br>";

// =====================================================
// 2. IN_ARRAY(): COMPROBAR SI EXISTE UN VALOR
// =====================================================

// in_array() comprueba si un valor aparece dentro de un array.
// Devuelve true si lo encuentra y false si no lo encuentra.

/*
Ejemplo original comentado:

$os = array("Mac", "NT", "Irix", "Linux");

if (in_array("Irix", $os)) {
    echo "Got Irix";
}

if (in_array("mac", $os)) {
    echo "Got mac";
}

La primera condición se cumple porque "Irix" está en el array.
La segunda no se cumple porque "mac" no es igual a "Mac"
en una comparación sensible a mayúsculas y minúsculas.
*/

// array_column() extrae la columna 'curso' de todos los alumnos.
// El resultado es un array parecido a ['A', 'B', 'A', 'C', ...].
$cursos = array_column($alumnes, 'curso');

// Comprueba si existe el valor "B" dentro del array $cursos.
if (in_array("B", $cursos)) {

    // Si encuentra al menos una B, muestra este mensaje.
    echo "Hay al menos un alumno en el curso B";
}

// Inserta dos saltos de línea HTML.
echo "<br><br>";

// =====================================================
// 3. ARRAY_KEY_EXISTS(): COMPROBAR SI EXISTE UNA CLAVE
// =====================================================

// array_key_exists() comprueba si una clave existe en un array.

/*
Ejemplo original comentado:

$searchArray = ['first' => 1, 'second' => 4];
var_dump(array_key_exists('first', $searchArray));

El resultado sería true porque la clave 'first' existe.
*/

// $alumnes[0] representa el primer alumno del array.
// Comprobamos si ese alumno tiene la clave 'nota_media'.
if (array_key_exists('nota_media', $alumnes[0])) {

    // Si la clave existe, mostramos el mensaje.
    echo "El alumno tiene nota media registrada";
}

// Inserta dos saltos de línea HTML.
echo "<br><br>";

// =====================================================
// 4. SORT(): ORDENAR DE MENOR A MAYOR
// =====================================================

// sort() ordena los valores de un array en orden ascendente.
// Modifica el propio array y devuelve true si la operación funciona.

/*
Ejemplo original comentado:

$fruits = array("lemon", "orange", "banana", "apple");
sort($fruits);

foreach ($fruits as $key => $val) {
    echo "fruits[" . $key . "] = " . $val . "\n";
}

El array quedaría ordenado alfabéticamente.
*/

// array_column() extrae todas las notas medias de los alumnos.
// $notas contendrá [7, 9, 8, 7, 5, 10, 6, 7, 9, 8].
$notas = array_column($alumnes, 'nota_media');

// Ordena las notas de menor a mayor.
// Después de ordenar: 5, 6, 7, 7, 7, 8, 8, 9, 9, 10.
sort($notas);

// Recorre cada nota del array ya ordenado.
// En cada vuelta, $nota recibe una de las notas.
foreach ($notas as $nota) {

    // Muestra la nota actual y un salto de línea HTML.
    echo "Nota: $nota<br>";
}

// Añade un salto de línea para separar los resultados.
echo "<br>";

// =====================================================
// 5. RSORT(): ORDENAR DE MAYOR A MENOR
// =====================================================

// rsort() ordena los valores en orden descendente.

/*
Ejemplo original comentado:

$fruits = array("lemon", "orange", "banana", "apple");
rsort($fruits);

foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

El array quedaría ordenado alfabéticamente en orden inverso.
*/

// Extrae de nuevo todas las notas medias.
$notas = array_column($alumnes, 'nota_media');

// Ordena las notas de mayor a menor.
// Resultado: 10, 9, 9, 8, 8, 7, 7, 7, 6, 5.
rsort($notas);

// Recorre las notas en el orden descendente.
foreach ($notas as $nota) {

    // Muestra cada nota.
    echo "Nota: $nota<br>";
}

// Añade un salto de línea.
echo "<br>";

// =====================================================
// 6. KSORT(): ORDENAR POR LAS CLAVES
// =====================================================

// ksort() ordena un array asociativo según sus claves,
// en orden ascendente.

/*
Ejemplo original comentado:

$fruits = array(
    "d" => "lemon",
    "a" => "orange",
    "b" => "banana",
    "c" => "apple"
);

ksort($fruits);

foreach ($fruits as $key => $val) {
    echo "$key = $val\n";
}

Las claves quedarían ordenadas: a, b, c, d.
*/

// array_column() extrae las notas medias y utiliza los nombres
// de los alumnos como claves del nuevo array.
// Por ejemplo: ['Marc' => 7, 'Laia' => 9, ...].
$notas_por_nombre = array_column($alumnes, 'nota_media', 'nombre');

// Ordena el array por el nombre, que es la clave.
// No ordena directamente por la nota.
ksort($notas_por_nombre);

// Recorre el array asociativo.
// $nombre recibe la clave y $nota recibe el valor asociado.
foreach ($notas_por_nombre as $nombre => $nota) {

    // Muestra el nombre y su nota media.
    echo "$nombre tiene nota de $nota<br>";
}

// Añade un salto de línea.
echo "<br>";

// =====================================================
// 7. ARRAY_SUM(): SUMAR LOS VALORES DE UN ARRAY
// =====================================================

// array_sum() suma todos los valores numéricos de un array.

/*
Ejemplo original comentado:

$a = array(2, 4, 6, 8);
echo "sum(a) = " . array_sum($a);

La suma sería 20.
*/

// Extrae todas las notas medias.
$notas = array_column($alumnes, 'nota_media');

// Suma todas las notas y muestra el resultado.
// En este caso: 7 + 9 + 8 + 7 + 5 + 10 + 6 + 7 + 9 + 8 = 76.
echo "Suma de notas: " . array_sum($notas) . "<br>";

// Calcula la media de la clase.
// Divide la suma total entre el número de notas.
// 76 / 10 = 7.6.
echo "Media de la clase: " . (array_sum($notas) / count($notas)) . "<br>";

// Añade un salto de línea.
echo "<br>";

// =====================================================
// 8. MAX(): ENCONTRAR EL VALOR MÁXIMO
// =====================================================

// max() devuelve el valor más grande de los valores recibidos.

/*
Ejemplos originales comentados:

max(2, 3, 1, 6, 7)       // Devuelve 7.
max(array(2, 4, 5))      // Devuelve 5.

También puede comparar textos y arrays, pero en este ejercicio
solo necesitamos utilizarlo con números.
*/

// Extrae todas las notas medias.
$notas = array_column($alumnes, 'nota_media');

// Busca la nota más alta de la clase y la muestra.
// Resultado: Nota más alta: 10.
echo "Nota más alta: " . max($notas);

// Añade dos saltos de línea.
echo "<br><br>";

// =====================================================
// 9. MIN(): ENCONTRAR EL VALOR MÍNIMO
// =====================================================

// min() devuelve el valor más pequeño de los valores recibidos.

/*
Ejemplos originales comentados:

min(2, 3, 1, 6, 7)  // Devuelve 1.
min(array(2, 4, 5)) // Devuelve 2.
*/

// Extrae todas las notas medias.
$notas = array_column($alumnes, 'nota_media');

// Busca la nota más baja y la muestra.
// Resultado: Nota más baja: 5.
echo "Nota más baja: " . min($notas);

// Añade dos saltos de línea.
echo "<br><br>";

// =====================================================
// 10. ARRAY_COLUMN(): EXTRAER UNA COLUMNA
// =====================================================

// array_column() extrae los valores de una clave específica
// de los arrays que están dentro de otro array.

/*
Ejemplo original comentado:

$records = [
    ['id' => 2135, 'first_name' => 'John', 'last_name' => 'Doe'],
    ['id' => 3245, 'first_name' => 'Sally', 'last_name' => 'Smith'],
];

$first_names = array_column($records, 'first_name');

Esto crearía un array con los nombres John y Sally.
*/

// Extrae únicamente los nombres de los 10 alumnos.
$nombres = array_column($alumnes, 'nombre');

// <pre> muestra el contenido conservando los saltos de línea
// y la estructura que genera print_r().
echo "<pre>";

// print_r() muestra el array completo de nombres.
print_r($nombres);

// Cierra la etiqueta <pre>.
echo "</pre>";

// =====================================================
// 11. IMPLODE(): UNIR UN ARRAY EN UN TEXTO
// =====================================================

// implode() une los elementos de un array en una cadena de texto.

/*
Ejemplo original comentado:

$array = ['lastname', 'email', 'phone'];
var_dump(implode(",", $array));

Resultado: lastname,email,phone.
*/

// Extrae los nombres de los alumnos.
$nombres = array_column($alumnes, 'nombre');

// Une todos los nombres utilizando una coma y un espacio.
// Resultado: Marc, Laia, Joan, Anna, Pablo, Marta, Albert, Elena, Jordi, Sara.
echo implode(", ", $nombres);

// Añade dos saltos de línea.
echo "<br><br>";

?>

<!-- Abrimos una tabla HTML para mostrar los alumnos. -->
<table>

    <!-- Creamos la primera fila de la tabla, que contiene los encabezados. -->
    <tr>

        <!-- Encabezado de la columna del nombre. -->
        <th>Nombre</th>

        <!-- Encabezado de la columna del curso. -->
        <th>Curso</th>

        <!-- Encabezado de la columna de la edad. -->
        <th>Edad</th>

        <!-- Encabezado de la columna de la nota media. -->
        <th>Nota Media</th>

    <!-- Cerramos la fila de encabezados. -->
    </tr>

    <?php
    // Recorremos el array $alumnes.
    // En cada repetición, $alumne contiene los datos de un alumno.
    foreach ($alumnes as $alumne):
    ?>

        <!-- Creamos una nueva fila para el alumno actual. -->
        <tr>

            <!-- Mostramos el nombre del alumno actual. -->
            <td><?= $alumne['nombre'] ?></td>

            <!-- Mostramos el curso del alumno actual. -->
            <td><?= $alumne['curso'] ?></td>

            <!-- Mostramos la edad del alumno actual. -->
            <td><?= $alumne['edat'] ?></td>

            <!-- Mostramos la nota media del alumno actual. -->
            <td><?= $alumne['nota_media'] ?></td>

        <!-- Cerramos la fila del alumno. -->
        </tr>

    <?php
    // endforeach cierra el foreach iniciado con dos puntos.
    // PHP repite el bloque para los 10 alumnos.
    endforeach;
    ?>

<!-- Cerramos la tabla HTML. -->
</table>

<!-- Cerramos el cuerpo de la página. -->
</body>

<!-- Cerramos el documento HTML. -->
</html>

