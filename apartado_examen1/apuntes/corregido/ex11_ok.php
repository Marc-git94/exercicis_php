<?php

// funciones con cadenas de texto (strings)

$cadena = "Hola";

$cadena[0] = "C";

echo "ahora cadena es: " . $cadena . "<br>"; // Saldra Cola (H por C)

// funciones preestablecidas de PHP

// strlen --> medir la longitud de la cadena
// (cuenta BYTES: la é de "té" ocupa 2 en UTF-8, por eso da 33 y no 32.
//  Para contar caracteres reales existe mb_strlen)
$cadena = "Aquesta cadena té moltes lletres";
$num_caracters = strlen($cadena);

echo "El total de caracters es: " . $num_caracters . "<br>";

// strpos --> retorna la casella on troba la subcadena dins la cadena pasada
// sempre retorna la primera ocurrencia
// (si no la encuentra devuelve false)

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
// Error corregido: sobraba un ; antes del . "<br>" (Parse error)
echo "El substr de 0 a 3 es: " . substr($cadena, 0, 3) . "<br>"; // saldra PHP
echo "El substr de 21 es: " . substr($cadena, 21) . "<br>";      // saldra facil

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
// (OBSOLETAS: se eliminaron en PHP 7. Hoy se usa preg_replace)

// strtolower($cadena): passa la cadena a minuscules

// strtoupper($cadena): passa la cadena a majuscules

// explode: permet dividir una cadena segons un caracter o patro

// Exercici 1: busca en php.net la funcio: str_word_count() y pon un ejemplo

// str_word_count — Cuenta el número de palabras utilizadas en un string
echo "<h3>Ejercicio 1: str_word_count()</h3>";
$frase = "Hola mundo, esto es PHP";
echo "Numero de palabras: " . str_word_count($frase) . "<br>";

// Con formato 1 y 2 devuelve un ARRAY, y echo no puede imprimir arrays
// (saldría "Array" + Warning). Se usa print_r (con <pre> para verlo bien).
echo "Formato 1 (array de palabras): ";
echo "<pre>";
print_r(str_word_count($frase, 1));
echo "</pre>";

echo "Formato 2 (posicion => palabras): ";
echo "<pre>";
print_r(str_word_count($frase, 2));
echo "</pre>";

// Exercici 2: busca en php.net la funcio
// levenshtein() y pon un ejemplo

// levenshtein — Calcula la distancia Levenshtein entre dos strings
// (número mínimo de inserciones, borrados o sustituciones para pasar de una a otra)
$string1 = "Hola";
$string2 = "Holaalon";
$lev = levenshtein($string1, $string2);
echo "Distancia Levenshtein: " . $lev . "<br>"; // 4 (hay que insertar "alon")

// Exercici 3: busca que es el operador ternario y pon un ejemplo

// El operador ternario (? :) es un operador condicional que funciona 
// como una versión simplificada de la estructura if-else

$edad = 18;
$resultado = $edad >= 18 ? "Es mayor de edad" : "Es menor de edad";

echo $resultado . "<br>";

// Exercici 4: Explicar que hace esta funcion
// Error corregido: la función estaba comentada pero se llamaba más abajo
// (Fatal error: Call to undefined function), así que hay que descomentarla.
function funcionMultipleReturns($v1, $v2, $v3){
    $v1 = "variable1";
    $v2 = "variable2";
    $v3 = "variable3";
    return array($v1, $v2, $v3);
}

// Sirve para devolver múltiples valores a la vez empaquetándolos dentro de un array

$resultado = funcionMultipleReturns('a', 'b', 'c');

echo $resultado[0] . "<br>"; // variable1

// Exercici 5: Crea una funcion comprova_email(...)
// que reciba una cadena de caracteres como parametro
// que contiene un email y hace las siguientes comprobaciones:

// - convertir a minuscules
// - eliminar todos los espacios en blanco
// - comprobar si tienes el caracter @
// - contar el numero de caracteres

// (Propuesta: el enunciado no dice qué devolver, así que devuelve un array)
function comprova_email($email){
    $email = strtolower($email);            // convertir a minusculas
    $email = str_replace(" ", "", $email);  // eliminar todos los espacios

    return array(
        'email'     => $email,
        'te_arroba' => strpos($email, "@") !== false,  // !== false porque la posicion podria ser 0
        'longitud'  => strlen($email)
    );
}

$res = comprova_email("  Hola @JViladoms.CAT ");
echo "Email limpio: " . $res['email'] . "<br>";
echo "Tiene @: " . ($res['te_arroba'] ? "Si" : "No") . "<br>";
echo "Numero de caracteres: " . $res['longitud'] . "<br>";

?>
