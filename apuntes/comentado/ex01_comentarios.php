<?php

// Variables que faltaban en el código original para poder utilizarlas después.
$x = 'Hola, bon dia'; // Crea la variable $x y guarda el texto 'Hola, bon dia'.
$dades = 'Dades ';    // Crea la variable $dades y guarda el texto 'Dades '.
$base = 2;            // Crea la variable $base y guarda el número 2.

// ECHO Y PRINT: sirven para mostrar información en pantalla.

echo "Hola"; // Muestra el texto Hola en pantalla.

echo "Hola", " ", "món"; // Muestra varios textos seguidos: Hola món.
// Las comas permiten pasar varios textos a echo.

echo "<p>Text</p>"; // Muestra un párrafo HTML con la palabra Text.
// El navegador interpreta las etiquetas HTML y muestra un párrafo.

print "Hola"; // Muestra el texto Hola en pantalla.
// print es parecido a echo, pero solo acepta un argumento.

var_dump($x); // Muestra información sobre $x: su tipo de dato, su longitud y su valor.

print_r($dades); // Muestra el contenido de $dades de forma legible.
// Es especialmente útil para mostrar arrays y estructuras de datos.

// VARIABLES Y TIPOS DE DATOS.

$nom = "Aina"; // Guarda el texto Aina en la variable $nom.
$edat = 19;    // Guarda el número entero 19 en la variable $edat.
$actiu = true; // Guarda el valor booleano true (verdadero) en $actiu.

$nom = "Bernat"; // Cambia el valor de $nom: ahora contiene Bernat.
$total = $edat + 1; // Suma 1 a la edad (19 + 1) y guarda el resultado 20 en $total.

echo $nom; // Muestra Bernat, porque es el último valor guardado en $nom.

$x = 5;      // Guarda el número 5 en la variable $x.
$x = "cinc"; // Sustituye el 5 por el texto cinc.
// PHP permite que una variable cambie de tipo de dato.

// OPERADORES: SUMA Y CONCATENACIÓN.

$a = "10" + 5; // El operador + realiza una suma numérica.
// PHP convierte el texto numérico "10" en el número 10.
// Resultado: 15.

$b = "10" . 5; // El operador . une dos valores formando un texto.
// Resultado: "105", porque une "10" y "5" sin sumarlos.

var_dump($a, $b); // Muestra el tipo y el valor de ambas variables.
// $a contiene el entero 15 y $b contiene el texto "105".

// COMILLAS SIMPLES Y COMILLAS DOBLES.

$nom = 'Aina'; // Guarda el texto Aina en la variable $nom.

echo 'Hola $nom'; // Muestra literalmente Hola $nom.
// Las comillas simples no sustituyen la variable por su valor.

$nom = "Aina"; // Vuelve a guardar Aina en la variable $nom.

echo "Hola $nom"; // Muestra Hola Aina.
// Las comillas dobles permiten sustituir las variables por su valor.

// CONCATENAR TEXTOS Y VARIABLES.

$nom = "Aina"; // Guarda el nombre Aina.
$punts = 8;     // Guarda el número 8 en la variable $punts.

echo 'Hola ' . $nom . ', tens ' . $punts . ' punts';
// El punto (.) une los textos y las variables.
// Muestra: Hola Aina, tens 8 punts.

echo "Hola $nom, tens $punts punts";
// Con comillas dobles, PHP sustituye las variables por sus valores.
// Muestra: Hola Aina, tens 8 punts.

echo "Hola {$nom}, tens {$punts} punts";
// Las llaves {} delimitan las variables dentro del texto.
// Es útil cuando queremos distinguir claramente dónde empieza y acaba una variable.
// El resultado es el mismo: Hola Aina, tens 8 punts.

// CONSTANTES: valores que no deben cambiar durante la ejecución.

define('IVA', 0.21); // Define la constante IVA con el valor 0.21 (21 %).
// define() permite crear una constante mediante una función.

const BOTIGA = 'A la Web'; // Crea la constante BOTIGA con el texto A la Web.
// const también permite crear constantes.

echo BOTIGA; // Muestra A la Web.
// Las constantes se utilizan sin el símbolo $.

$total = $base * (1 + IVA); // Calcula el precio con IVA.
// $base vale 2 e IVA vale 0.21.
// Operación: 2 * (1 + 0.21) = 2.42.
// El resultado 2.42 se guarda en $total.

// FUNCIONES: bloques de código que podemos ejecutar cuando los llamamos.

$missatge = "Hola"; // Crea una variable fuera de la función llamada $missatge.

function saluda() { // Declara una función llamada saluda.
// El código dentro de la función se ejecuta cuando llamamos a saluda().

  // La variable $missatge de fuera no está disponible automáticamente
  // dentro de esta función, porque tiene un ámbito diferente.

  $missatge = "Hola"; // Crea una variable local dentro de la función.
  // Esta variable solo existe dentro de saluda().

  echo $missatge; // Muestra Hola en pantalla.

  $intern = "Adeu"; // Crea una variable local con el texto Adeu.
  // Solo se puede utilizar dentro de esta función.
} // Cierra la función saluda().

saluda(); // Llama a la función y ejecuta sus instrucciones.
// Como contiene echo $missatge, muestra Hola.

 // echo $intern; // No funcionaría fuera de la función.
// $intern es una variable local y no existe en este ámbito.

?>