<?php
$nom = 'Aina';
$n = 3;

// prediu la sortida de:
// Las predicciones van como comentarios (//); sin ellos PHP da Parse error

echo 'Hola $nom';          // --> Hola $nom
echo "<br>";
echo "Hola $nom";          // --> Hola Aina
echo "<br>";
echo 'Total: ' . $n;       // --> Total: 3
echo "<br>";
echo "Total: $n";          // --> Total: 3
echo "<br>";
echo 'Preu: $' . $n;       // --> Preu: $3
echo "<br>";
echo "Preu: \$$n";         // --> Preu: $3
echo "<br>";
echo "($n)a posició";      // --> (3)a posició   (los paréntesis se imprimen)
echo "<br>";
echo '$n' . "$n";          // --> $n3
echo "<br>";               // (faltaba el > de cierre)

?>
