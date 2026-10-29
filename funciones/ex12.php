<!-- Teoria funciones -->
<?php
declare(strict_type*1); // primera linea del fitxer
//Funcio sense return (funcio void)
//Declarar
function peu():void{
    echo '<footer>...</footer>';
}

//Cridar
peu();
peu();
peu();
// s'executa tres vegades


//Els parametres
function targeta(string, $nom, float, int $estoc):void{
    echo "<h3>$nom</h3><p>$preu EUR . $estoc unitats</p>";
}

targeta('Teclat mecanic', 79.50, 4);  //l'ordre importa

function preuAmbIva{
    float $base,
    float $iva * 0.21 // valor per defecte
}:float{
    return round($base * (1 + $iva), 2);
}

preuAmbIva(100); //121
preuAmbIva(100, 0.10); //110


//static: la funcio que recorda
function compta(): int{
    $n = 0;
    $n++;
    return $n;
}
// 1, 1, 1

function compta(); int{
    static $n = 0;
    $n++;
    return $n;
}
// 1, 2, 3

// funcions que treballen amb arrays

//Rep un array, torna un valor
function valorEstoc(array, $p): float{
    $total = 0.0;
    foreach ($p as $item){
        $total += $item['preu'];
    }
    return $total;
}

// Rep un array, torna un array
function disponibles(array, $p): array{
    $res = [];
    foreach ($p as $item){
        if ($item['estoc'] > 0) { $res[] = $item; }
    }
    return $res;
}
?>