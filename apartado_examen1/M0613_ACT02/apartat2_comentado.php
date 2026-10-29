<?php
/*
Exercici 1: Foreach bàsic
*/

// Utilizamos el array $grups creado en el ejercicio anterior.
// foreach recorre todos los elementos existentes del array.
// En cada vuelta, guarda el elemento actual en la variable $grup.
?>

<ul>
    <?php foreach ($grups as $grup): ?>
        <!-- Mostramos cada grupo dentro de un elemento de lista HTML. -->
        <li><?= $grup ?></li>
    <?php endforeach; ?>
</ul>

<?php
// Creamos una segunda lista que también muestra la posición de cada grupo.
// $posicio contiene la clave del elemento y $grup contiene su valor.
?>

<ul>
    <?php foreach ($grups as $posicio => $grup): ?>
        <!-- Mostramos el índice y el nombre del grupo. -->
        <li>Posicio <?= $posicio ?>: <?= $grup ?></li>
    <?php endforeach; ?>
</ul>

<?php
// Los índices que se muestran son 0, 1, 2, 8 y 9.
// foreach no necesita que los índices sean consecutivos.
// Solo recorre los elementos que realmente existen en el array.



/*
Exercici 2: Foreach sobre un associatiu
*/

// Creamos una variable de texto que contendrá la tabla HTML.
// El operador .= añade texto al final de una cadena que ya existe.
$taula1 = "<table border='1' cellpadding='5'>";

// Añadimos la primera fila, que contiene los encabezados de la tabla.
$taula1 .= "<tr><th>Grup</th><th>Estil</th></tr>";

// Recorremos el array asociativo $estils.
// $grup recibe la clave y $estil recibe el valor asociado a esa clave.
foreach ($estils as $grup => $estil) {

    // Añadimos una fila a la tabla con el nombre del grupo y su estilo.
    $taula1 .= "<tr><td>$grup</td><td>$estil</td></tr>";
}

// Añadimos una última fila con el número total de grupos.
// count() cuenta los elementos que contiene el array.
$taula1 .= "<tr><td><strong>Total de grups</strong></td><td><strong>" . count($estils) . "</strong></td></tr>";

// Cerramos la tabla HTML.
$taula1 .= "</table>";

// Mostramos toda la tabla que hemos construido.
echo $taula1;



/*
Exercici 3: El mateix sense foreach
*/

// Creamos una segunda tabla para comparar su resultado con la primera.
$taula2 = "<table border='1' cellpadding='5'>";

// Añadimos los encabezados de las dos columnas.
$taula2 .= "<tr><th>Grup</th><th>Estil</th></tr>";

// reset() coloca el puntero interno del array en el primer elemento.
// El puntero indica qué elemento se está consultando actualmente.
reset($estils);

// do-while ejecuta el bloque al menos una vez.
// Esto permite leer el primer elemento antes de comprobar si hay otro.
do {

    // key() devuelve la clave del elemento señalado por el puntero.
    $grup = key($estils);

    // current() devuelve el valor del elemento señalado por el puntero.
    $estil = current($estils);

    // Añadimos una fila con la clave y su valor.
    $taula2 .= "<tr><td>$grup</td><td>$estil</td></tr>";

// next() mueve el puntero al siguiente elemento.
// Si existe un siguiente elemento, devuelve su valor.
// Cuando se alcanza el final, devuelve false y termina el bucle.
} while (next($estils));

// Añadimos una fila con el número total de grupos.
$taula2 .= "<tr><td><strong>Total de grups</strong></td><td><strong>" . count($estils) . "</strong></td></tr>";

// Cerramos la tabla.
$taula2 .= "</table>";

// Mostramos la segunda tabla.
echo $taula2;


// Comparamos las dos cadenas de texto completas.
// === comprueba que tienen el mismo valor y el mismo tipo.
// Como ambas cadenas contienen el mismo HTML, deberían ser idénticas.
if ($taula1 === $taula2) {

    // Este mensaje aparece si las dos tablas son exactamente iguales.
    echo "<p>Comprovacio: la taula es identica a la de l'exercici 2</p>";

} else {

    // Este mensaje aparece si hay alguna diferencia entre las cadenas.
    echo "<p>Comprovacio: les dues taules son diferents</p>";
}

/*
La forma que me parece más clara es foreach porque es más sencilla de leer.
Recorre directamente los elementos sin tener que gestionar el puntero.
Con do-while hay que recordar utilizar reset(), key(), current() y next().
Además, next() puede devolver false al llegar al final del array.
*/


/*
Exercici 4: A l'inreves, dins d'una funcio
*/

// Creamos una función que recibe un array como parámetro.
// El tipo array indica que el argumento debe ser un array.
function recorrerInvers(array $llista)
{
    // empty() comprueba si el array está vacío.
    // Si lo está, return termina la función sin mostrar nada.
    if (empty($llista)) {
        return;
    }

    // end() mueve el puntero interno hasta el último elemento.
    end($llista);

    // Empezamos a recorrer el array desde el final.
    do {

        // Obtenemos la clave del elemento actual.
        $clau = key($llista);

        // Obtenemos el valor del elemento actual.
        $valor = current($llista);

        // Mostramos la clave y el valor, separados por dos puntos.
        echo "$clau: $valor<br>";

    // prev() mueve el puntero al elemento anterior.
    // Cuando ya no hay un elemento anterior, devuelve false.
    } while (prev($llista));
}


// Colocamos el puntero de $estils en el primer elemento.
reset($estils);

// Mostramos la clave en la que está situado el puntero antes de llamar
// a la función. Normalmente será la primera clave del array.
echo "<p>Abans de cridar la funcio, el punter es a: " . key($estils) . "</p>";

// Mostramos un encabezado para el recorrido inverso.
echo "<h3>Recorregut invers</h3>";

// Llamamos a la función y le pasamos el array asociativo $estils.
// La función mostrará los elementos desde el último hasta el primero.
recorrerInvers($estils);

// Comprobamos la posición del puntero del array original después
// de ejecutar la función.
echo "<p>Despres de cridar la funcio, el punter es a: " . key($estils) . "</p>";


// Recorremos el array original utilizando foreach.
// Esto permite comprobar que sus elementos siguen en el orden habitual.
echo "<h3>Array original amb foreach</h3>";

foreach ($estils as $grup => $estil) {

    // Mostramos cada clave y su valor.
    echo "$grup: $estil<br>";
}

/*
La función recibe el array por valor, es decir, trabaja con una copia.
Por eso, los movimientos del puntero realizados dentro de la función
no cambian el puntero del array original que tenemos fuera.

El foreach posterior sigue mostrando los elementos en su orden habitual.
*/
?>