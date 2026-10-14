<?php

/**
 * PAS 3 - Una sola pagina
 * Fins ara teniem dos fitxers, el formulari i el resultat
 * Mira com es fa la petició i així fara una cosa o altre
 * La primera visita es amb GET i quan es prem el boto
 * d'enviar es amb POST
 */

$nom = '';
$correu = '';
$dia = '';

//variable de control
$enviat = false;

// Array predefinido $_SERVER nos da informacion del
// servidor
echo "<pre>";
print_r($_SERVER);
echo "</pre>";
?>