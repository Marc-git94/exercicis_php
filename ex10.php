<?php

// Definicion de una funcion
// function nomFuncion($arg1, $arg2){
        // codigo de la funcion
        // return valor o no;
//}

function funcionTest(){
    $var = 10;
    return $var;
}

// como la funcion funcionTest() tiene un return, tengo que igualarla a una variable 
// para recoger el valor del return

$var_fun = funcionTest();
echo "La variable igualada a la funcion vale: " . $var_fun . "<br>";

// Funcion sin return
function funcionTestSin(){
    // esta variable es local de la funcion
    $var = 20;
    echo "La variable dentro de la funcion vale: " . $var . "<br>";
}

// error en var porque es local
// echo "La variable var da error" . $var;

// llamada a la funcion
funcionTestSin();

// como podemos utilizar dentro
// de las funciones variables globales

$var2 = 30;

function funcionConGlobal(){

    // para poder utilizar una variable de fuera del ambito
    // de la funcion se utiliza la palabra reservada global

    global $var2;

    echo "La variable var2 de fuera de la funcion vale: " . $var2 . "<br>";

}

funcionConGlobal();

// recursividad --> una funcion se puede llamar a si misma
// factorial de 5 es 5*4*3*2*1
function factorial($numero){
    if($numero == 1){
        return $numero;
    }else{
        return $numero * factorial($numero - 1);
    }
}
echo "El factorial de 7 es: " . factorial(7) . "<br>";

?>