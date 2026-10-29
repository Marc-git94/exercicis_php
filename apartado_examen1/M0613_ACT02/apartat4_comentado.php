<?php

/*
Exercici 1: Les quatre ordenacions
*/

// Creamos el array $concerts.
// Es un array multidimensional porque cada elemento contiene otro array.
// Cada concierto tiene cinco campos: nom, escenari, hora, assistents y preu.

$concerts = [
    [
        'nom' => 'Blaus',
        'escenari' => 'Gran',
        'hora' => '22:30',
        'assistents' => 4200,
        'preu' => 20.0
    ],
    [
        'nom' => 'Vermells',
        'escenari' => 'Petit',
        'hora' => '21:15',
        'assistents' => 1850,
        'preu' => 17.0
    ],
    [
        'nom' => 'Grocs',
        'escenari' => 'Gran',
        'hora' => '00:00',
        'assistents' => 6400,
        'preu' => 23.0
    ],
    [
        'nom' => 'Verts',
        'escenari' => 'Petit',
        'hora' => '20:15',
        'assistents' => 2100,
        'preu' => 22.0
    ],
    [
        'nom' => 'Roses',
        'escenari' => 'Gran',
        'hora' => '19:30',
        'assistents' => 5800,
        'preu' => 23.0
    ],
    [
        'nom' => 'Tronjes',
        'escenari' => 'Petit',
        'hora' => '13:45',
        'assistents' => 3500,
        'preu' => 15.0
    ],
];

// Mostramos todos los conciertos en una tabla HTML.
// La etiqueta <table> crea la tabla.
// border="1" añade un borde y cellpadding="5" deja espacio dentro de las celdas.
?>

<table border="1" cellpadding="5">

    <!-- Creamos la primera fila con los encabezados de la tabla. -->
    <tr>
        <th>Nom</th>
        <th>Escenari</th>
        <th>Hora</th>
        <th>Assistents</th>
        <th>Preu</th>
    </tr>

    <?php
    // foreach recorre todos los conciertos del array $concerts.
    // En cada vuelta, $c contiene el array de un concierto.
    ?>
    <?php foreach ($concerts as $c): ?>

        <!-- Creamos una fila nueva para cada concierto. -->
        <tr>

            <!-- Accedemos al nombre del concierto. -->
            <td><?= $c['nom'] ?></td>

            <!-- Accedemos al escenario donde actúa. -->
            <td><?= $c['escenari'] ?></td>

            <!-- Accedemos a la hora del concierto. -->
            <td><?= $c['hora'] ?></td>

            <!-- Accedemos al número de asistentes. -->
            <td><?= $c['assistents'] ?></td>

            <!--
            number_format() formatea el precio.
            2 indica que queremos dos decimales.
            ',' indica que la coma será el separador decimal.
            '.' indica que el punto será el separador de miles.
            -->
            <td><?= number_format($c['preu'], 2, ',', '.') ?> €</td>

        </tr>

    <!-- endforeach indica el final del foreach. -->
    <?php endforeach; ?>

</table>

<?php
// Mostramos el nombre del tercer concierto sin utilizar ningún bucle.

// Los arrays numéricos empiezan en el índice 0:
// primer concierto = índice 0
// segundo concierto = índice 1
// tercer concierto = índice 2

// Primero accedemos al concierto de la posición 2.
// Después accedemos a su campo 'nom'.
echo "<p>El tercer concert es: " . $concerts[2]['nom'] . "</p>";


/*
Exercici 2: Les quatre ordenacions
*/

// Creamos el array asociativo $escenaris.
// Cada clave principal es el nombre de un escenario.
// El valor de cada clave es otro array con sus características.

$escenaris = [

    // Datos del escenario Gran.
    'Gran' => [
        'capacitat' => 8000,
        'coberta'   => 'no',
        'ubicacio'  => 'Pista central',
    ],

    // Datos del escenario Petit.
    'Petit' => [
        'capacitat' => 4000,
        'coberta'   => 'si',
        'ubicacio'  => 'Pavello',
    ],
];

// Accedemos directamente a la capacidad del escenario Gran.
// Primero seleccionamos la clave 'Gran'.
// Después seleccionamos la clave 'capacitat' de su array interior.
echo "<p>La capacitat de l'escenari Gran es: "
    . $escenaris['Gran']['capacitat'] . "</p>";


// Recorremos el array principal $escenaris.
// $escenari contiene la clave principal: 'Gran' o 'Petit'.
// $dades contiene el array interior con los datos de ese escenario.
foreach ($escenaris as $escenari => $dades) {

    // Mostramos el nombre del escenario como encabezado HTML.
    echo "<h3>Escenari $escenari</h3>";

    // Abrimos una lista HTML para mostrar sus características.
    echo "<ul>";

    // Segundo foreach: recorremos el array interior $dades.
    // $camp contiene la clave: 'capacitat', 'coberta' o 'ubicacio'.
    // $valor contiene el dato correspondiente a esa clave.
    foreach ($dades as $camp => $valor) {

        // Mostramos cada característica como un elemento de la lista.
        echo "<li>$camp: $valor</li>";
    }

    // Cerramos la lista HTML del escenario actual.
    echo "</ul>";
}

?>