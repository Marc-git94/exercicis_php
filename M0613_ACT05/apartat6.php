<?php
// Variable global
$botiga = 'BitBazar';

function mostraIncorrecte(): string
{
    // Genera un Warning
    return 'Som a ' . $botiga;
}

function mostraBe(string $nom): string
{
    return "Som a $nom";
}

function comptaLocal(): int
{
    $n = 0;
    $n++;
    return $n;
}

function comptaStatic(): int
{
    static $n = 0;
    $n++;
    return $n;
}
?>

<!DOCTYPE html>
<html lang="ca">
<head>
    <meta charset="UTF-8">
    <title>Apartat 6 - Àmbit de Variables</title>
    <link rel="stylesheet" href="estils.css">
</head>
<body>

    <h1>Exercicis Àmbit de Variables (Apartat 6)</h1>

    <h2>Exercici 1: Variables globals i paràmetres</h2>
    <div class="resum-caixa">
        <?php
        // echo mostraIncorrecte();
        echo mostraBe($botiga); 
        ?>
    </div>

    <!--
     ERROR LOG / WARNING EXACTE (PHP 8):
     Warning: Undefined variable $botiga in C:\xampp\htdocs\apartat6.php on line 8
    -->

    <h2>Exercici 2: Variable Local vs Static</h2>
    
    <h3>Crides a comptaLocal() (Variable Normal):</h3>
    <div class="resum-caixa">
        <?php
        echo comptaLocal() . "<br>";
        echo comptaLocal() . "<br>";
        echo comptaLocal() . "<br>";
        ?>
    </div>

    <h3>Crides a comptaStatic() (Variable Static):</h3>
    <div class="resum-caixa">
        <?php
        echo comptaStatic() . "<br>";
        echo comptaStatic() . "<br>";
        echo comptaStatic() . "<br>";
        ?>
    </div>

    <!--
     EXPLICACIÓ DE LA DIFERÈNCIA:
     
     A la funció `comptaLocal()`, la variable `$n` és una variable local comuna. Cada vegada que 
     la funció finalitza, la variable "mor" i s'allibera de la memòria. Quan es torna a cridar, 
     es torna a crear des de zero ($n = 0), per la qual cosa el resultat sempre serà 1.
     
     En canvi, a la funció `comptaStatic()`, la variable `$n` està declarada com a `static`. Això 
     fa que PHP només la inicialitzi la primera vegada que es crida la funció. En les següents crides, 
     la variable "recorda" el valor que tenia al final de la crida anterior, permetent que el 
     comptador s'acumuli correctament (1, 2, 3).
    -->

</body>
</html>