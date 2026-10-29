<!DOCTYPE html>
<!-- Indica que el documento utiliza HTML5. -->

<html lang="es">
<!-- Indica que el idioma principal de la página es el español. -->

<head>
    <!-- Contiene la configuración de la página. -->

    <meta charset="UTF-8">
    <!-- Permite mostrar correctamente tildes, ñ y otros caracteres especiales. -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Hace que la página se adapte al ancho de móviles y otros dispositivos. -->

    <title>Tablas de Multiplicar</title>
    <!-- Define el título que aparece en la pestaña del navegador. -->

</head>

<body>
<!-- Aquí comienza el contenido visible de la página. -->

<?php
// Abre el bloque de código PHP.

// Funciones preestablecidas de PHP.
// Son funciones que ya vienen incluidas en el lenguaje.

// isset() permite comprobar si una variable existe y no vale null.
// Devuelve true si la variable está definida y no es null.

// unset() elimina una variable.

// Creamos una variable llamada $var y le asignamos el texto "10".
$var = "10";

// Comprobamos si $var existe y no vale null.
if (isset($var)) {
    // Si la condición es verdadera, mostramos este mensaje.
    echo "La variable existe <br>";
    // echo muestra texto en la página.
    // <br> hace un salto de línea en HTML.
}

// Eliminamos la variable $var.
unset($var);

// Volvemos a comprobar si $var existe.
if (isset($var)) {
    // Este bloque no se ejecuta porque hemos eliminado $var.
    echo "La variable existe <br>";
} else {
    // Como $var ya no existe, se ejecuta este bloque.
    // La barra invertida evita que PHP interprete el símbolo $ como una variable.
    echo "La variable \$var no existe <br>";
}

// gettype() devuelve el tipo de dato de una variable.
// Por ejemplo: string, integer, double, boolean o array.

// settype() permite cambiar el tipo de dato de una variable.

// empty() comprueba si una variable está vacía o tiene un valor considerado vacío.
// Por ejemplo: "", "0", 0, false, null o un array vacío.
// También devuelve true si la variable no existe.

// is_integer(), is_double(), is_array() e is_string()
// permiten comprobar si una variable es de tipo entero, decimal, array o texto.

// --------------------------------------------------
// EJERCICIO 1: tabla de multiplicar del 5.
// --------------------------------------------------

// Creamos la variable $num y le asignamos el número 5.
$num = 5;

// Comprobamos que la variable $num existe y no vale null.
if (isset($num)) {

    // Creamos un bucle que comienza en 1 y termina en 10.
    // $i empieza valiendo 1.
    // $i <= 10 indica que el bucle continúa mientras $i sea menor o igual que 10.
    // $i++ aumenta $i en 1 después de cada repetición.
    for ($i = 1; $i <= 10; $i++) {

        // Mostramos la multiplicación y su resultado.
        // Por ejemplo, cuando $i vale 1, muestra: 5 x 1 = 5.
        // El punto (.) une las cadenas de texto con el resultado de la operación.
        echo "$num x $i = " . $num * $i;

        // Añadimos un salto de línea HTML después de cada multiplicación.
        echo "<br>";
    }

} else {
    // Este mensaje aparecería si $num no estuviera definida o valiera null.
    echo "La variable num no existe";
}

// --------------------------------------------------
// EJERCICIO 2: mostrar los números pares del 1 al 1000.
// --------------------------------------------------

// Mostramos un título de nivel 3 en HTML.
echo "<h3>Números pares del 1 al 1000:</h3>";

// Creamos un bucle que recorre los números del 1 al 1000.
for ($i = 1; $i <= 1000; $i++) {

    // El operador % calcula el resto de una división.
    // Si un número dividido entre 2 tiene resto 0, es par.
    if ($i % 2 == 0) {

        // Mostramos el número par seguido de un espacio.
        echo "$i ";
    }
}

// Cerramos el bloque PHP.
?>

<!-- --------------------------------------------------
     EJERCICIO 3: crear una tabla HTML con las tablas
     de multiplicar del 1 al 10.
--------------------------------------------------- -->

<!-- Mostramos el título del ejercicio. -->
<h3>Tablas de multiplicar del 1 al 10</h3>

<!-- Creamos una tabla HTML. -->
<table>

    <!-- Bucle exterior: crea las 10 filas de la tabla. -->
    <!-- $fila empieza en 1 y va aumentando hasta 10. -->
    <?php for ($fila = 1; $fila <= 10; $fila++): ?>

        <!-- Abrimos una nueva fila de la tabla. -->
        <tr>

            <!-- Bucle interior: crea las 10 celdas de cada fila. -->
            <!-- $columna empieza en 1 y va aumentando hasta 10. -->
            <?php for ($columna = 1; $columna <= 10; $columna++): ?>

                <!-- Creamos una celda con la multiplicación y su resultado. -->
                <!-- <-?= es una forma abreviada de escribir <-?php echo. -->
                <!-- Por ejemplo: 2 x 3 = 6. -->
                <td><?= "$fila x $columna = " . $fila * $columna ?></td>

            <!-- Finalizamos el bucle interior. -->
            <?php endfor; ?>

        <!-- Cerramos la fila actual. -->
        </tr>

    <!-- Finalizamos el bucle exterior. -->
    <?php endfor; ?>

<!-- Cerramos la tabla HTML. -->
</table>

</body>
<!-- Cerramos el cuerpo de la página. -->

<!-- Cerramos el documento HTML. -->
</html>