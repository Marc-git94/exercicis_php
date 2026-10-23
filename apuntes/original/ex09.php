<?php

// Funciones preestablecidas de php

// isset() --> permite saber si una variable existe en nuestro programa

// unset() --> para liberar espacio en memoria (destruir) de una variable

$var = "10";

if(isset($var)){
    echo "La variable existe";
}

unset($var);
if(isset($var)){
    echo "La variable $var existe <br>";
}else{
    echo "La variable $var no existe <br>";
}

// gettype() --> nos retorna el tipo de variable que pasamos por parametro

// settype() --> asignamos un tipo de dato a la variable que pasamos por parametro

// empty() --> funcion que mira si una variable esta vacia, no existe o su valor es 0

// is_integer(var), is_double(var), is_array(var), is_string(var) --> para saber si una
// variable es integer, double, array, string, etc

// Ex1: for para la tabla de multiplicar del 5
// var existe?

$num = 5;

if(isset($num)){
    for ($i = 1; $i <= 10; $i++){
        echo "$num x $i = " . $num * $i;
        echo "<br>";
    }
}else{
    echo "La variable num no existe";
}

// Ex2: mostrar los numeros pares del 1 al 1000

echo "<h3>Números pares del 1 al 1000:</h3>";

for ($i = 1; $i <= 1000; $i++) {
    if ($i % 2 == 0) {
        echo "$i ";
    }
}
?>

<!-- Ex3: dibuja una tabla de html donde salgan las tablas de multiplicar del 1 al 10 -->

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tablas de Multiplicar</title>
</head>
<body>

    <h3>Tablas de multiplicar del 1 al 10</h3>

    <table>
        <!-- Bucle para las filas del 1 al 10 -->
        <?php 
        for ($fila = 1; $fila <= 10; $fila++): 
        ?>
            <tr>
                <!-- Bucle para las celdas del 1 al 10 -->
                <?php 
                for ($columna = 1; $columna <= 10; $columna++):
                ?>
                    <td>
                        <?php 
                        echo "$fila x $columna = " . $fila * $columna;
                        ?>
                    </td>
                <?php
                    endfor;
                ?>
            </tr>
        <?php 
            endfor; 
        ?>
    </table>

</body>
</html>