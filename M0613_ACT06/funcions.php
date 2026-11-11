<?php

/**
 * Recull un camp de text del formulari ja net d'espais.
 *
 * @param string $camp    Nom del camp (l'atribut name del formulari)
 * @param string $defecte Valor si el camp no ha arribat
 * @return string         El valor net
 */
function camp(string $camp, string $defecte = ''): string
{
    return trim($_POST[$camp] ?? $defecte);
}

/**
 * Converteix la clau de l'array en una etiqueta llegible.
 *
 * @param string $clau Clau de l'array ('cp', 'naixement'...)
 * @return string      Etiqueta per mostrar a la taula
 */
function etiqueta(string $clau): string
{
    $noms = [
        'nom'       => 'Nom',
        'cognoms'   => 'Cognoms',
        'usuari'    => 'Nom d\'usuari',
        'clau'      => 'Contrasenya',
        'correu'    => 'Correu electrònic',
        'naixement' => 'Data de naixement',
        'cp'        => 'Codi postal',
        'adreca'    => 'Adreça',
        'origen'    => 'Origen',
        'newsletter'=> 'Butlletí',
        'condicions'=> 'Condicions',
    ];
    return $noms[$clau] ?? ucfirst($clau);
}
