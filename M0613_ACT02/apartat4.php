<?php

/*
Exercici 1: Les quatre ordenacions
________________________________________
*/

// -	Copia l'array $concerts al teu fitxer.

$concerts = [
    ['nom' => 'Blaus',  'escenari' => 'Gran',  'hora' => '22:30', 'assistents' => 4200, 'preu' => 20.0],
    ['nom' => 'Vermells', 'escenari' => 'Petit', 'hora' => '21:15', 'assistents' => 1850, 'preu' => 17.0],
    ['nom' => 'Grocs', 'escenari' => 'Gran',  'hora' => '00:00', 'assistents' => 6400, 'preu' => 23.0],
    ['nom' => 'Verts', 'escenari' => 'Petit', 'hora' => '20:15', 'assistents' => 2100, 'preu' => 22.0],
    ['nom' => 'Roses', 'escenari' => 'Gran',  'hora' => '19:30', 'assistents' => 5800, 'preu' => 23.0],
    ['nom' => 'Tronjes', 'escenari' => 'Petit', 'hora' => '13:45', 'assistents' => 3500,  'preu' => 15.0],
];

// -	Mostra'l tot en una taula HTML amb les cinc columnes, fent servir foreach 
//      i la sintaxi alternativa.

// -	Formata el preu amb number_format().
//      (ho faig a la mateixa taula: 2 decimals, coma decimal i punt de milers)
?>

<table border="1" cellpadding="5">
    <tr>
        <th>Nom</th>
        <th>Escenari</th>
        <th>Hora</th>
        <th>Assistents</th>
        <th>Preu</th>
    </tr>
    <?php foreach ($concerts as $c): ?>
        <tr>
            <td><?= $c['nom'] ?></td>
            <td><?= $c['escenari'] ?></td>
            <td><?= $c['hora'] ?></td>
            <td><?= $c['assistents'] ?></td>
            <td><?= number_format($c['preu'], 2, ',', '.') ?> €</td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
// -	Mostra a part el nom del tercer concert accedint-hi directament, sense bucle.

// El tercer concert es la posició 2 (es comença a comptar des de 0):
// primer la posició i després el camp
echo "<p>El tercer concert es: " . $concerts[2]['nom'] . "</p>";


/*
Exercici 2: Les quatre ordenacions
________________________________________
*/

// -	Copia l'array $escenaris: es associatiu als dos nivells.

$escenaris = [
    'Gran' => [
        'capacitat' => 8000,
        'coberta'   => 'no',
        'ubicacio'  => 'Pista central',
    ],
    'Petit' => [
        'capacitat' => 4000,
        'coberta'   => 'si',
        'ubicacio'  => 'Pavello',
    ],
];

// -	Mostra la capacitat de l'escenari Gran accedint-hi directament.

echo "<p>La capacitat de l'escenari Gran es: " . $escenaris['Gran']['capacitat'] . "</p>";

// -	Recorre'l amb dos foreach niats: el de fora per als escenaris i el de dins 
//      per als camps de cadascun.

foreach ($escenaris as $escenari => $dades) {
    echo "<h3>Escenari $escenari</h3>";
    echo "<ul>";

    // $dades es un array sencer, per aixo cal un segon foreach per obrir-lo
    foreach ($dades as $camp => $valor) {
        echo "<li>$camp: $valor</li>";
    }

    echo "</ul>";
}

?>
