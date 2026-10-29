<?php
// Abrimos el bloque de código PHP.

// --------------------------------------------------
// MODIFICAR CARACTERES DE UNA CADENA
// --------------------------------------------------

// Creamos una variable de tipo string con el texto "Hola".
$cadena = "Hola";

// Cambiamos el carácter que está en la posición 0 por una C.
// En PHP, las posiciones empiezan por 0:
// H = posición 0, o = posición 1, l = posición 2, a = posición 3.
$cadena[0] = "C";

// Mostramos la cadena modificada.
// El resultado es "Cola" porque hemos sustituido la H por la C.
echo "ahora cadena es: " . $cadena . "<br>";


// --------------------------------------------------
// FUNCIONES PREESTABLECIDAS DE PHP
// --------------------------------------------------

// strlen() devuelve la longitud de una cadena en BYTES.
// Con caracteres especiales, como algunas letras acentuadas,
// el número de bytes puede ser diferente al número de caracteres.

// Creamos una cadena de texto.
$cadena = "Aquesta cadena té moltes lletres";

// Guardamos en $num_caracters la longitud de la cadena en bytes.
$num_caracters = strlen($cadena);

// Mostramos la longitud calculada.
echo "El total de caracters es: " . $num_caracters . "<br>";


// --------------------------------------------------
// strpos(): BUSCAR UNA SUBCADENA
// --------------------------------------------------

// strpos() busca un texto dentro de una cadena.
// Devuelve la posición de la primera coincidencia.
// Si no encuentra el texto, devuelve false.

// Guardamos una dirección de correo electrónico.
$email = "hola@jviladoms.cat";

// Buscamos el carácter @ y mostramos su posición.
// La posición empieza en 0, por lo que @ está en la posición 4.
echo "Posicio @: " . strpos($email, "@") . "<br>";


// --------------------------------------------------
// strcmp(): COMPARAR DOS CADENAS
// --------------------------------------------------

// strcmp() compara dos cadenas de texto.
// Devuelve 0 si son iguales.
// Devuelve un valor negativo si la primera cadena es menor.
// Devuelve un valor positivo si la primera cadena es mayor.

// Creamos la primera cadena.
$cad1 = "AAA";

// Creamos la segunda cadena.
$cad2 = "AAAAA";

// Comparamos ambas cadenas y mostramos el resultado.
// Como "AAA" es un prefijo de "AAAAA" y es más corta,
// el resultado es un valor negativo (habitualmente -2).
echo "Utilizamos strcmp: " . strcmp($cad1, $cad2) . "<br>";


// --------------------------------------------------
// substr(): EXTRAER UNA PARTE DE UNA CADENA
// --------------------------------------------------

// substr() devuelve una parte de una cadena.
// Recibe la cadena, la posición inicial y, opcionalmente,
// el número de caracteres o bytes que queremos obtener.
// No modifica la cadena original.

// Creamos una cadena de texto.
$cadena = "PHP es un llenguatge facil";

// Extraemos 3 caracteres empezando en la posición 0.
// El resultado es "PHP".
echo "El substr de 0 a 3 es: " . substr($cadena, 0, 3) . "<br>";

// Extraemos el texto desde la posición 21 hasta el final.
// En esta cadena, el resultado es "facil".
echo "El substr de 21 es: " . substr($cadena, 21) . "<br>";


// --------------------------------------------------
// trim(): ELIMINAR ESPACIOS AL PRINCIPIO Y AL FINAL
// --------------------------------------------------

// trim() elimina los espacios en blanco del principio y del final.
// No elimina los espacios que hay entre las palabras.

// Mostramos la cadena sin los espacios exteriores.
echo "Ejemplo con trim: " . trim("      hola que tal       ") . "<br>";


// --------------------------------------------------
// ltrim(): ELIMINAR ESPACIOS DEL PRINCIPIO
// --------------------------------------------------

// ltrim() elimina los espacios en blanco del principio,
// pero mantiene los espacios que hay al final.

// Mostramos la cadena sin los espacios iniciales.
echo "Ejemplo de ltrim: " . ltrim("         hola que tal          ") . "<br>";


// --------------------------------------------------
// str_replace(): SUSTITUIR TEXTO
// --------------------------------------------------

// str_replace() busca un texto y lo sustituye por otro.
// Recibe el texto que buscamos, el texto nuevo y la cadena original.

// Guardamos el texto original.
$cadena = "PHP es facil";

// Guardamos el fragmento que queremos sustituir.
$antiga = "es facil";

// Guardamos el nuevo texto que queremos poner.
$nova = "no es dificil";

// Sustituimos "es facil" por "no es dificil" y mostramos el resultado.
// Resultado: PHP no es dificil.
echo "Ejemplo de str_replace: " . str_replace($antiga, $nova, $cadena) . "<br>";


// --------------------------------------------------
// OTRAS FUNCIONES DE STRINGS
// --------------------------------------------------

// ereg_replace() y eregi_replace() son funciones obsoletas
// que se eliminaron en PHP 7. Actualmente se puede usar preg_replace()
// para realizar sustituciones mediante expresiones regulares.

// strtolower($cadena) convierte las letras a minúsculas.

// strtoupper($cadena) convierte las letras a mayúsculas.

// explode() divide una cadena en un array utilizando un separador.
// Por ejemplo: explode(",", "rojo,azul,verde")
// devuelve un array con "rojo", "azul" y "verde".


// --------------------------------------------------
// EJERCICIO 1: str_word_count()
// --------------------------------------------------

// str_word_count() permite contar las palabras de una cadena.

// Mostramos el título del ejercicio.
echo "<h3>Ejercicio 1: str_word_count()</h3>";

// Creamos una frase.
$frase = "Hola mundo, esto es PHP";

// Contamos las palabras de la frase.
// En este ejemplo, el resultado es 5.
echo "Numero de palabras: " . str_word_count($frase) . "<br>";

// El segundo parámetro permite indicar qué información queremos obtener.
// Con el valor 1, devuelve un array con las palabras encontradas.
// print_r() permite mostrar el contenido de un array.
echo "Formato 1 (array de palabras): ";

// Abrimos la etiqueta <pre> para mostrar el array con formato.
echo "<pre>";

// Mostramos el array devuelto por str_word_count($frase, 1).
print_r(str_word_count($frase, 1));

// Cerramos la etiqueta <pre>.
echo "</pre>";

// Con el valor 2, devuelve un array asociativo con las posiciones
// donde empieza cada palabra y el texto de esa palabra.
echo "Formato 2 (posicion => palabras): ";

// Abrimos otra etiqueta <pre>.
echo "<pre>";

// Mostramos el array devuelto por str_word_count($frase, 2).
print_r(str_word_count($frase, 2));

// Cerramos la etiqueta <pre>.
echo "</pre>";


// --------------------------------------------------
// EJERCICIO 2: levenshtein()
// --------------------------------------------------

// levenshtein() calcula la distancia entre dos cadenas.
// Cuenta el mínimo de inserciones, eliminaciones o sustituciones
// necesarias para transformar una cadena en la otra.

// Guardamos la primera cadena.
$string1 = "Hola";

// Guardamos la segunda cadena.
$string2 = "Holaalon";

// Calculamos la distancia entre ambas cadenas.
$lev = levenshtein($string1, $string2);

// Mostramos el resultado.
// En este caso, hay que insertar las letras "alon": resultado 4.
echo "Distancia Levenshtein: " . $lev . "<br>";


// --------------------------------------------------
// EJERCICIO 3: OPERADOR TERNARIO
// --------------------------------------------------

// El operador ternario es una forma abreviada de escribir un if-else.
// Su estructura es:
// condicion ? valor_si_verdadero : valor_si_falso;

// Guardamos la edad.
$edad = 18;

// Si $edad es mayor o igual que 18, guardamos el primer mensaje.
// Si no, guardamos el segundo mensaje.
$resultado = $edad >= 18 ? "Es mayor de edad" : "Es menor de edad";

// Mostramos el mensaje guardado en $resultado.
echo $resultado . "<br>";


// --------------------------------------------------
// EJERCICIO 4: DEVOLVER VARIOS VALORES
// --------------------------------------------------

// Creamos una función que recibe tres parámetros.
function funcionMultipleReturns($v1, $v2, $v3){

    // Sustituimos el valor del primer parámetro.
    $v1 = "variable1";

    // Sustituimos el valor del segundo parámetro.
    $v2 = "variable2";

    // Sustituimos el valor del tercer parámetro.
    $v3 = "variable3";

    // Devolvemos los tres valores dentro de un array.
    // En PHP, return devuelve un único valor, pero ese valor
    // puede ser un array que contenga varios datos.
    return array($v1, $v2, $v3);
}

// Llamamos a la función pasando tres argumentos.
// Aunque enviamos 'a', 'b' y 'c', la función los sustituye
// por "variable1", "variable2" y "variable3".
$resultado = funcionMultipleReturns('a', 'b', 'c');

// Mostramos el primer elemento del array.
// Los índices de un array empiezan por 0.
// Por eso, $resultado[0] contiene "variable1".
echo $resultado[0] . "<br>";


// --------------------------------------------------
// EJERCICIO 5: COMPROBAR Y LIMPIAR UN EMAIL
// --------------------------------------------------

// Creamos una función que recibe una cadena con un email.
// La función lo convierte a minúsculas, elimina espacios,
// comprueba si contiene @ y calcula su longitud.

function comprova_email($email){

    // Convertimos el email a minúsculas.
    // Por ejemplo: "Hola@EXAMPLE.COM" pasa a "hola@example.com".
    $email = strtolower($email);

    // Eliminamos todos los espacios normales de la cadena.
    // Por ejemplo: "hola @ ejemplo.com" pasa a "hola@ejemplo.com".
    $email = str_replace(" ", "", $email);

    // Devolvemos un array asociativo con tres resultados.
    return array(

        // Guardamos el email después de limpiarlo.
        'email' => $email,

        // Comprobamos si existe el carácter @.
        // strpos() devuelve false si no lo encuentra.
        // Usamos !== false porque la posición podría ser 0.
        'te_arroba' => strpos($email, "@") !== false,

        // Calculamos la longitud de la cadena en bytes.
        'longitud' => strlen($email)
    );
}

// Llamamos a la función con una cadena que contiene espacios
// y letras mayúsculas.
$res = comprova_email("  Hola @JViladoms.CAT ");

// Mostramos el email limpio.
// Resultado: hola@jviladoms.cat.
echo "Email limpio: " . $res['email'] . "<br>";

// Mostramos "Si" si contiene @ y "No" si no lo contiene.
// El operador ternario elige el mensaje según el resultado booleano.
echo "Tiene @: " . ($res['te_arroba'] ? "Si" : "No") . "<br>";

// Mostramos la longitud del email limpio.
echo "Numero de caracteres: " . $res['longitud'] . "<br>";

// Cerramos el bloque PHP.
?>