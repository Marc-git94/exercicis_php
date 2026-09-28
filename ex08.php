<!-- Crear array asociativo con:
 - nombre
 - curso
 - edat
 - nota_media

 10 alumnes

 Mostrarlos en una tabla html
-->

<?php

$alumnes = [
    ['nombre' => 'Marc', 'curso' => 'A', 'edat' => 20, 'nota_media' => 7],
    ['nombre' => 'Laia', 'curso' => 'B', 'edat' => 21, 'nota_media' => 9],
    ['nombre' => 'Joan', 'curso' => 'A', 'edat' => 22, 'nota_media' => 8],
    ['nombre' => 'Anna', 'curso' => 'C', 'edat' => 19, 'nota_media' => 7],
    ['nombre' => 'Pau', 'curso' => 'B', 'edat' => 23, 'nota_media' => 5],
    ['nombre' => 'Marta', 'curso' => 'A', 'edat' => 21, 'nota_media' => 10],
    ['nombre' => 'Albert', 'curso' => 'C', 'edat' => 18, 'nota_media' => 6],
    ['nombre' => 'Elena', 'curso' => 'B', 'edat' => 20, 'nota_media' => 7],
    ['nombre' => 'Jordi', 'curso' => 'A', 'edat' => 22, 'nota_media' => 9],
    ['nombre' => 'Sara', 'curso' => 'C', 'edat' =>25, 'nota_media' => 8],
];


// count — Cuenta todos los elementos de un array o en un objeto Countable

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de Alumnos</title>
</head>
<body>

    <table>
            <tr>
                <th>Nombre</th>
                <th>Curso</th>
                <th>Edad</th>
                <th>Nota Media</th>
            </tr>

            <?php foreach ($alumnes as $alumne): ?>
                <tr>
                    <td><?=$alumne['nombre']?></td>
                    <td><?=$alumne['curso']?></td>
                    <td><?=$alumne['edat']?></td>
                    <td><?=$alumne['nota_media']?></td>
                </tr>
            <?php endforeach; ?>            
    </table>

</body>
</html>
