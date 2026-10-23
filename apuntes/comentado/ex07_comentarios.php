<?php

// =====================================================
// 1. CONDICIONALES: IF / ELSEIF / ELSE
// =====================================================

// Guardamos la nota del alumno en una variable.
$nota = 7.8;

// Comprobamos si la nota es mayor o igual que 9.
if ($nota >= 9) {
    // Si se cumple la condición, guardamos 'Excelent' en $qualif.
    $qualif = 'Excelent';

// Si la primera condición es falsa, comprobamos si la nota es >= 7.
} elseif ($nota >= 7) {
    // Como 7.8 es mayor o igual que 7, se ejecuta este bloque.
    $qualif = 'Notable';

// Si las condiciones anteriores son falsas, comprobamos si la nota es >= 5.
} elseif ($nota >= 5) {
    // Guarda 'Aprobat' si la nota está entre 5 y menos de 7.
    $qualif = 'Aprobat';

// Si ninguna condición anterior se cumple, se ejecuta el else.
} else {
    // Guarda 'Suspès' si la nota es inferior a 5.
    $qualif = 'Suspès';
}

// En este ejemplo, $qualif contiene 'Notable'.
// Todavía no se muestra en pantalla porque no hemos utilizado echo.

?>

<?php
// =====================================================
// 2. CONDICIONAL IF / ELSE MEZCLADO CON HTML
// =====================================================

// Guardamos 0 en la variable $estoc.
// Representa las unidades disponibles de un producto.
$estoc = 0;

// Comprobamos si hay más de cero unidades disponibles.
if ($estoc > 0) { ?>

    <!-- Si hay existencias, mostramos este párrafo HTML. -->
    <p>En estoc</p>

<?php
// Si la condición es falsa, ejecutamos el bloque else.
} else { ?>

    <!-- Como $estoc vale 0, se muestra este párrafo. -->
    <p>Esgotat</p>

<?php
// Cerramos el bloque PHP y el condicional.
} ?>

<!-- ================================================== -->
<!-- 3. CONDICIONAL IF / ELSE CON LA SINTAXIS ALTERNATIVA -->
<!-- ================================================== -->

<!-- Esta forma utiliza dos puntos en vez de llaves. -->

<?php
// Comprobamos de nuevo si hay unidades disponibles.
if ($estoc > 0):
?>

    <!-- Si hay existencias, muestra En estoc. -->
    <p>En estoc</p>

<?php
// Si no hay existencias, se ejecuta el else.
else:
?>

    <!-- Como $estoc vale 0, muestra Esgotat. -->
    <p>Esgotat</p>

<?php
// endif cierra el condicional iniciado con if (...):.
endif;
?>

<!--
La sintaxis alternativa es útil cuando mezclamos PHP y HTML.

En lugar de:
if (condicion) {
    ...
} else {
    ...
}

Podemos escribir:
if (condicion):
    ...
else:
    ...
endif;
-->

<!-- ================================================== -->
<!-- 4. SWITCH: ELEGIR ENTRE VARIAS OPCIONES -->
<!-- ================================================== -->

<!--
Este ejemplo está dentro de un comentario HTML.
Por tanto, NO se ejecuta.

<?php
// Suponemos que $zona contiene el tipo de zona de envío.
switch ($zona) {

    // Si $zona es exactamente 'local', el envío cuesta 0.
    case 'local':
        $enviament = 0;
        break; // Sale del switch para no ejecutar los siguientes casos.

    // Si $zona es 'peninsula', el envío cuesta 4.99.
    case 'peninsula':
        $enviament = 4.99;
        break; // Termina este caso.

    // Si no coincide con ningún caso anterior, se aplica este precio.
    default:
        $enviament = 9.99;
}
?>
-->

<!-- switch permite elegir un bloque según el valor de una variable. -->
<!-- break evita continuar ejecutando los siguientes casos. -->
<!-- default se ejecuta cuando ningún case coincide. -->


<!-- ================================================== -->
<!-- 5. MATCH: ALTERNATIVA A SWITCH EN PHP 8 O SUPERIOR -->
<!-- ================================================== -->

<!--
Este ejemplo también está comentado y no se ejecuta.

<?php
// Compara $zona con varias opciones y devuelve el valor correspondiente.
$enviament = match ($zona) {

    // Si la zona es 'local', devuelve 0.
    'local'     => 0,

    // Si la zona es 'peninsula', devuelve 4.99.
    'peninsula' => 4.99,

    // Si ninguna opción coincide, devuelve 9.99.
    default     => 9.99,
};
?>
-->

<!-- match devuelve directamente un valor y no necesita break. -->
<!-- A diferencia de switch, match compara los valores de forma estricta. -->


<!-- ================================================== -->
<!-- 6. BUCLE FOR: REPETIR UN BLOQUE UN NÚMERO DE VECES -->
<!-- ================================================== -->

<!--
Este ejemplo está comentado y no se ejecuta.

<?php
// $i = 1: el contador empieza en 1.
// $i <= 10: el bucle continúa mientras $i sea menor o igual que 10.
// $i++: aumenta el contador en 1 después de cada repetición.
for ($i = 1; $i <= 10; $i++) {

    // Muestra el valor actual del contador.
    echo $i;
}
?>
-->

<!-- Si se ejecutara, mostraría los números del 1 al 10. -->


<!-- ================================================== -->
<!-- 7. BUCLE WHILE: REPETIR MIENTRAS SE CUMPLA UNA CONDICIÓN -->
<!-- ================================================== -->

<!--
Este ejemplo está comentado y no se ejecuta.

<?php
// Mientras el saldo sea inferior al objetivo, repetimos el bloque.
while ($saldo < $objectiu) {

    // Añade 1.03 al saldo en cada repetición.
    // Es equivalente a escribir $saldo = $saldo + 1.03.
    $saldo += 1.03;

    // Aumenta en 1 el contador de años.
    $anys++;
}
?>
-->

<!-- while comprueba la condición ANTES de ejecutar el bloque. -->
<!-- Las variables $saldo, $objectiu y $anys deberían estar inicializadas. -->


<!-- ================================================== -->
<!-- 8. BUCLE DO WHILE: EJECUTAR AL MENOS UNA VEZ -->
<!-- ================================================== -->

<!--
Este ejemplo está comentado y no se ejecuta.

<?php
// Ejecuta primero las instrucciones del bloque.
do {

    // Genera un número aleatorio entre 1 y 6, como un dado.
    $n = rand(1, 6);

// Repite el bloque mientras el número generado no sea 6.
} while ($n !== 6);
?>
-->

<!-- rand(1, 6) genera un número entero entre 1 y 6. -->
<!-- !== significa que el valor no es idéntico al otro valor. -->
<!-- do while ejecuta el bloque al menos una vez. -->


<!-- ================================================== -->
<!-- 9. FOR: GENERAR UNA TABLA DE MULTIPLICAR -->
<!-- ================================================== -->

<!-- Abre una tabla HTML para organizar los resultados. -->
<table>

    <?php
    // El contador empieza en 1, llega hasta 10 y aumenta de uno en uno.
    for ($i = 1; $i <= 10; $i++):
    ?>

    <!-- Cada repetición crea una fila nueva de la tabla. -->
    <tr>

        <!-- Primera celda: muestra la operación de multiplicación. -->
        <td><?= $i ?> x 7</td>

        <!-- Segunda celda: muestra el resultado de la multiplicación. -->
        <td><?= $i * 7 ?></td>

    <!-- Cierra la fila actual. -->
    </tr>

    <?php
    // endfor cierra el bucle for iniciado con dos puntos.
    endfor;
    ?>

<!-- Cierra la tabla HTML. -->
</table>

<!-- La tabla muestra las operaciones del 1 x 7 al 10 x 7. -->
<!-- Por ejemplo, la última fila muestra 10 x 7 y 70. -->


<!-- ================================================== -->
<!-- 10. ARRAYS INDEXADOS: LISTAS DE VALORES -->
<!-- ================================================== -->

<?php
// Creamos un array con tres colores.
// Cada elemento tiene una posición numérica que empieza en 0.
$colors = ['vermell', 'verd', 'blau'];

// Accedemos al primer elemento del array mediante el índice 0.
// Muestra: vermell.
echo $colors[0];

// count() cuenta cuántos elementos contiene el array.
// Muestra: 3.
echo count($colors);

// Añade un nuevo elemento al final del array.
// Como no indicamos un índice, PHP lo añade automáticamente.
$colors[] = 'groc';

// Ahora el array contiene cuatro colores:
// vermell, verd, blau y groc.

// Abre una etiqueta <pre> para mostrar el contenido con formato.
echo '<pre>';

// print_r() muestra el contenido completo del array de forma legible.
print_r($colors);

// Cierra la etiqueta <pre>.
echo '</pre>';
?>

<!-- ================================================== -->
<!-- 11. ARRAYS ASOCIATIVOS: ELEMENTOS CON CLAVES -->
<!-- ================================================== -->

<?php
// Creamos un array asociativo para guardar los datos de un producto.
// Cada elemento tiene una clave y un valor.
$producte = [

    // La clave 'nom' guarda el nombre del producto.
    'nom'   => 'Teclat mecanic',

    // La clave 'preu' guarda el precio decimal.
    // Se utiliza un punto para los decimales: 79.90.
    'preu'  => 79.90,

    // La clave 'estoc' guarda las unidades disponibles.
    'estoc' => 4,
];

// Accedemos al nombre utilizando su clave.
// Muestra: Teclat mecanic.
echo $producte['nom'];

// Cambiamos el precio del producto a 69.99.
// La clave 'preu' conserva su nombre, pero su valor cambia.
$producte['preu'] = 69.99;
?>

<!-- Un array asociativo permite acceder a los datos mediante nombres. -->
<!-- Por ejemplo, $producte['preu'] obtiene el precio. -->


<!-- ================================================== -->
<!-- 12. FOREACH: RECORRER UN ARRAY -->
<!-- ================================================== -->

<!-- Abrimos una lista HTML con viñetas. -->
<ul>

<?php
// Recorre todos los elementos del array $colors.
// En cada repetición, guarda el elemento actual en $color.
foreach ($colors as $color) {

    // Muestra el color actual dentro de una etiqueta <li>.
    // Las comillas dobles permiten sustituir $color por su valor.
    echo "<li>$color</li>";
}
?>

<!-- Cerramos la lista HTML. -->
</ul>

<!-- La lista mostrará los cuatro colores del array. -->


<!-- ================================================== -->
<!-- 13. FOREACH CON ARRAYS ASOCIATIVOS -->
<!-- ================================================== -->

<!-- <dl> crea una lista de términos y sus descripciones. -->
<dl>

<?php
// Recorre todos los elementos del array asociativo $producte.
// $clau recibe la clave y $valor recibe el valor correspondiente.
foreach ($producte as $clau => $valor) {

    // <dt> muestra la clave del elemento.
    // Por ejemplo: nom, preu o estoc.
    echo "<dt>$clau</dt>";

    // <dd> muestra el valor correspondiente a esa clave.
    // Por ejemplo: Teclat mecanic, 69.99 o 4.
    echo "<dd>$valor</dd>";
}
?>

<!-- Cierra la lista de términos y descripciones. -->
</dl>

<!-- ================================================== -->
<!-- 14. ARRAYS DENTRO DE ARRAYS: LISTA DE PRODUCTOS -->
<!-- ================================================== -->

<?php
// Creamos un array llamado $productes.
// Cada elemento contiene otro array asociativo con los datos de un producto.
$productes = [

    // Primer producto: nombre Teclat y precio 79.9.
    ['nom' => 'Teclat',  'preu' => 79.9],

    // Segundo producto: nombre Ratoli y precio 24.5.
    ['nom' => 'Ratoli',  'preu' => 24.5],

    // Tercer producto: nombre Monitor y precio 189.
    ['nom' => 'Monitor', 'preu' => 189],
];
?>

<!-- Creamos una tabla HTML para mostrar todos los productos. -->
<table>

<?php
// Recorre el array $productes.
// En cada repetición, $p contiene el array de un producto.
foreach ($productes as $p) :
?>

    <!-- Crea una fila para el producto actual. -->
    <tr>

        <!-- Muestra el nombre del producto actual. -->
        <td><?= $p['nom'] ?></td>

        <!-- Muestra su precio seguido de la moneda EUR. -->
        <td><?= $p['preu'] ?> EUR</td>

    <!-- Cierra la fila del producto. -->
    </tr>

<?php
// endforeach cierra el bucle foreach iniciado con dos puntos.
endforeach;
?>

<!-- Cierra la tabla HTML. -->
</table>

<!-- La tabla mostrará tres filas: Teclat, Ratoli y Monitor. -->


<!-- ================================================== -->
<!-- 15. FUNCIONES ÚTILES PARA TRABAJAR CON ARRAYS -->
<!-- ================================================== -->

<!--
Los siguientes ejemplos son comentarios HTML.
No se ejecutan mientras permanezcan comentados.

count($a)
    // Cuenta cuántos elementos tiene el array $a.

in_array($x, $a, true)
    // Comprueba si el valor de $x existe dentro del array $a.
    // El tercer argumento true exige una comparación estricta
    // del valor y del tipo de dato.

array_key_exists('k', $a)
    // Comprueba si existe la clave 'k' en el array $a.

sort($a)
    // Ordena los elementos del array por valor, de menor a mayor.
    // Reordena los índices numéricos.

rsort($a)
    // Ordena los elementos por valor, de mayor a menor.
    // Reordena los índices numéricos.

ksort($a)
    // Ordena un array asociativo por sus claves, en orden ascendente.

array_sum($a)
    // Suma los valores numéricos de un array.

max($a)
    // Obtiene el valor máximo de los elementos.

min($a)
    // Obtiene el valor mínimo de los elementos.

array_column($a, 'preu')
    // Extrae la columna 'preu' de un array que contiene otros arrays.
    // Es útil para obtener los precios de una lista de productos.

implode(', ', $a)
    // Une los elementos de un array en un solo texto,
    // separándolos mediante una coma y un espacio.

explode(', ', $text)
    // Divide un texto en un array usando ', ' como separador.

Aplicar en ex08 y buscar en el buscador de php.net.
-->