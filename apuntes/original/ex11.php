<?php

// funciones con cadenas de texto (strings)

$cadena = "Hola";

$cadena[0] = "C";

echo "ahora cadena es: " . $cadena . "<br>"; // Saldra Cola (H por C)

// funciones preestablecidas de PHP

// strlen --> medir la longitud de la cadena
$cadena = "Aquesta cadena té moltes lletres";
$num_caracters = strlen($cadena);

echo "El total de caracters es: " . $num_caracters . "<br>";

// strpos --> retorna la casella on troba la subcadena dins la cadena pasada
// sempre retorna la primera ocurrencia

$email = "hola@jviladoms.cat";
echo "Posicio @: " . strpos($email, "@") . "<br>";

// strcmp --> string compare, compara dos cadenas
// si retorna 0 es igual
// strcmp($cad1, $cad2);
// si retorna <0 la primera cadena és más pequeña
// si retorna >0 la primera cadena es mas grande

$cad1 = "AAA";
$cad2 = "AAAAA";
echo "Utilizamos strcmp: " . strcmp($cad1, $cad2) . "<br>";

// substr: retorna una subcadena de caracters d'una
// cadena a partir d'una posicio especifica fins
// al final o del tamany especificat
// La cadena original no pateix cap modificacio

$cadena = "PHP es un llenguatge facil";
echo "El substr de 0 a 3 es: " . substr($cadena, 0, 3); . "<br>"; // saldra PHP
echo "El substr de 21" . substr($cadena, 21) . "<br>";

// trim: eliminar espacios en blanco y saltos de linea
// que hay al principio y al final de una cadena

echo "Ejemplo con trim: " . trim("      hola que tal       ") . "<br>";

// ltrim: elimina los espacios que hay en blanco al
// principio de la cadena
echo "Ejemplo de ltrim: " . ltrim("         hola que tal          ") . "<br>";

// str_replace($antiga, $nova, $cadena): substitueix la cadena $antiga per 
// la cadena de $nova dins de $cadena

$cadena = "PHP es facil";
$antiga = "es facil";
$nova = "no es dificil";

echo "Ejemplo de str_replace: " . str_replace($antiga, $nova, $cadena) . "<br>";

// ereg_replace / eregi_replace()

// strtolower($cadena): passa la cadena a minuscules

// strtoupper($cadena): passa la cadena a majuscules

// explode: permet dividir una cadena segons un caracter o patro

// Exercici 1: busca en php.net la funcio: str_word_count() y pon un ejemplo

// str_word_count — Cuenta el número de palabras utilizadas en un string
echo "<h3>Ejercicio 1: str_word_count()</h3>";
$frase = "Hola mundo, esto es PHP";
echo "Numero de palabras: " . str_word_count($frase);

echo "Formato 1 (array de palabras): ";
echo(str_word_count($frase,1));
echo "<br>";

echo "Formato 2 (posicion => palabras): ";
echo(str_word_count($frase,2));
echo "<br>";

// Exercici 2: busca en php.net la funcio
// levenshtein() y pon un ejemplo

// levenshtein — Calcula la distancia Levenshtein entre dos strings
$string1 = "Hola";
$string2 = "Holaalon";
$lev = levenshtein($string1, $string2);
echo $lev;

// Exercici 3: busca que es el operador ternario y pon un ejemplo

// El operador ternario (? :) es un operador condicional que funciona 
// como una versión simplificada de la estructura if-else

$edad = 18;
$resultado = $edad >= 18 ? "Es mayor de edad" : "Es menor de edad";

echo $resultado;

// Exercici 4: Explicar que hace esta funcion
// function funcionMultipleReturns($v1, $v2, $v3){
//     $v1 = "variable1";
//     $v2 = "variable2";
//     $v3 = "variable3";
//     return array($v1, $v2, $v3);
//}

// Sirve para devolver múltiples valores a la vez empaquetándolos dentro de un array

$resultado = funcionMultipleReturns('a', 'b', 'c');

echo $resultado[0];

// Exercici 5: Crea una funcion comprova_email(...)
// que reciba una cadena de caracteres como parametro
// que contiene un email y hace las siguientes comprobaciones:

// - convertir a minuscules
// - eliminar todos los espacios en blanco
// - comprobar si tienes el caracter @
// - contar el numero de caracteres

// FALTAAAA!

?>