<?php

// Crea la variable $nom y guarda el texto 'Aina'.
$nom = 'Aina';

// Crea la variable $n y guarda el número 3.
$n = 3;

// Este ejercicio sirve para predecir qué mostrará cada instrucción.
// Las predicciones se escriben como comentarios para que PHP no las ejecute.

// EJEMPLO 1: COMILLAS SIMPLES.

echo 'Hola $nom';
// Muestra: Hola $nom
// Con comillas simples, PHP NO sustituye $nom por su valor.
// Imprime literalmente el texto $nom.

echo "<br>"; // Inserta un salto de línea HTML para separar los resultados.

// EJEMPLO 2: COMILLAS DOBLES.

echo "Hola $nom";
// Muestra: Hola Aina
// Con comillas dobles, PHP sustituye $nom por su valor: Aina.

echo "<br>"; // Inserta un salto de línea HTML.

// EJEMPLO 3: CONCATENACIÓN CON EL OPERADOR PUNTO (.).

echo 'Total: ' . $n;
// Muestra: Total: 3
// El punto (.) une el texto 'Total: ' con el valor de $n.
// Las comillas simples no interpretan variables, pero la variable
// $n está fuera del texto y se concatena por separado.

echo "<br>"; // Inserta un salto de línea HTML.

// EJEMPLO 4: VARIABLE DENTRO DE COMILLAS DOBLES.

echo "Total: $n";
// Muestra: Total: 3
// PHP sustituye $n por su valor porque utilizamos comillas dobles.
// Es otra forma de obtener el mismo resultado del ejemplo anterior.

echo "<br>"; // Inserta un salto de línea HTML.

// EJEMPLO 5: MOSTRAR EL SÍMBOLO $ COMO TEXTO.

echo 'Preu: $' . $n;
// Muestra: Preu: $3
// Con comillas simples, el símbolo $ se muestra literalmente.
// Después, el punto une ese texto con el valor de $n.

echo "<br>"; // Inserta un salto de línea HTML.

// EJEMPLO 6: ESCAPAR EL SÍMBOLO $ EN COMILLAS DOBLES.

echo "Preu: \$$n";
// Muestra: Preu: $3
// La barra invertida (\) delante del primer $ permite mostrarlo
// como un símbolo literal en vez de interpretarlo como una variable.
// El segundo $ inicia la variable $n, que se sustituye por 3.

echo "<br>"; // Inserta un salto de línea HTML.

// EJEMPLO 7: PARÉNTESIS ALREDEDOR DE UNA VARIABLE.

echo "($n)a posició";
// Muestra: (3)a posició
// PHP sustituye $n por 3.
// Los paréntesis no tienen ningún significado especial aquí:
// simplemente forman parte del texto que se muestra.

echo "<br>"; // Inserta un salto de línea HTML.

// EJEMPLO 8: COMBINAR COMILLAS SIMPLES Y DOBLES.

echo '$n' . "$n";
// Muestra: $n3
// La primera parte, '$n', utiliza comillas simples y muestra $n literalmente.
// La segunda parte, "$n", utiliza comillas dobles y muestra el valor 3.
// El punto (.) une ambas partes sin añadir espacios.

echo "<br>"; // Inserta un salto de línea HTML.
// <br> crea un salto de línea en el navegador.
// La etiqueta está correctamente cerrada con >.

?>