<?php
// Abrimos el bloque de código PHP.

// --------------------------------------------------
// DEFINICIÓN DE UNA FUNCIÓN
// --------------------------------------------------

// Estructura básica de una función:
// function nomFuncion($arg1, $arg2) {
//     Código que ejecuta la función.
//     return valor; // Opcional: devuelve un valor.
// }

// Creamos una función llamada funcionTest.
// No necesita parámetros porque no recibe ningún dato.
function funcionTest(){

    // Creamos una variable local llamada $var y le damos el valor 10.
    // Es local porque se ha creado dentro de esta función.
    $var = 10;

    // Devolvemos el valor de $var al lugar desde donde se llama la función.
    return $var;
}

// Llamamos a la función funcionTest().
// Como tiene return, podemos recoger el valor que devuelve.
// Guardamos el valor devuelto (10) en la variable $var_fun.
$var_fun = funcionTest();

// Mostramos un mensaje y concatenamos el valor de $var_fun.
// El punto (.) sirve para unir cadenas de texto y valores.
echo "La variable igualada a la funcion vale: " . $var_fun . "<br>";
// Resultado: La variable igualada a la funcion vale: 10


// --------------------------------------------------
// FUNCIÓN SIN RETURN
// --------------------------------------------------

// Creamos una función llamada funcionTestSin.
// Esta función no devuelve ningún valor mediante return.
function funcionTestSin(){

    // Creamos una variable local llamada $var con el valor 20.
    // Solo podemos utilizar esta variable dentro de la función.
    $var = 20;

    // Mostramos directamente el valor de $var en la página.
    // No necesitamos return porque queremos mostrar el dato directamente.
    echo "La variable dentro de la funcion vale: " . $var . "<br>";
}

// Si intentáramos ejecutar este código:
// echo "La variable var da error" . $var;
//
// Daría un aviso porque esta $var no existe en el ámbito global.
// La variable $var creada dentro de funcionTestSin() es local.
// Aunque ambas se llamen $var, son variables de ámbitos diferentes.

// Llamamos a la función para que ejecute su código.
// Al ejecutarla, muestra el mensaje con el valor 20.
funcionTestSin();


// --------------------------------------------------
// UTILIZAR VARIABLES GLOBALES DENTRO DE FUNCIONES
// --------------------------------------------------

// Creamos una variable fuera de cualquier función.
// Por eso, $var2 es una variable global.
$var2 = 30;

// Creamos una función llamada funcionConGlobal.
function funcionConGlobal(){

    // La palabra reservada global permite acceder a la variable
    // $var2 que hemos creado fuera de esta función.
    global $var2;

    // Mostramos el valor de la variable global $var2.
    echo "La variable var2 de fuera de la funcion vale: " . $var2 . "<br>";
    // Resultado: La variable var2 de fuera de la funcion vale: 30.
}

// Llamamos a la función.
// Gracias a global, la función puede acceder a $var2.
funcionConGlobal();


// --------------------------------------------------
// RECURSIVIDAD: UNA FUNCIÓN QUE SE LLAMA A SÍ MISMA
// --------------------------------------------------

// El factorial de un número consiste en multiplicarlo
// por todos los números enteros positivos anteriores hasta llegar a 1.
// Por ejemplo: 5! = 5 * 4 * 3 * 2 * 1.

// Creamos una función llamada factorial.
// Recibe un parámetro llamado $numero.
function factorial($numero){

    // Comprobamos si el número es 1.
    if($numero == 1){

        // Caso base: si llegamos a 1, devolvemos 1.
        // Así la recursividad puede terminar.
        return $numero;

    }else{

        // Si el número no es 1, lo multiplicamos por el resultado
        // de volver a llamar a factorial() con el número anterior.
        // Por ejemplo, factorial(7) llama a factorial(6),
        // que llama a factorial(5), y así sucesivamente.
        return $numero * factorial($numero - 1);
    }
}

// Llamamos a la función factorial pasando el número 7.
// La función calcula 7 * 6 * 5 * 4 * 3 * 2 * 1 = 5040.
// Concatenamos el resultado con el mensaje y lo mostramos.
echo "El factorial de 7 es: " . factorial(7) . "<br>";
// Resultado: El factorial de 7 es: 5040.

// Cerramos el bloque PHP.
?>