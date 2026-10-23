<?php

// Crea una variable llamada $nom y guarda el texto "Pepito".
$nom = "Pepito";

// Cerramos PHP para empezar a escribir HTML.
?>

<!-- Indica que el documento utiliza HTML5. -->
<!DOCTYPE html>

<!-- Abre el documento HTML y establece el idioma en español. -->
<html lang="es">

<!-- Abre la sección de configuración de la página. -->
<head>

    <!-- Permite mostrar correctamente caracteres especiales, como ñ y tildes. -->
    <meta charset="UTF-8">

    <!-- Hace que la página se adapte al ancho de la pantalla de móviles y tabletas. -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Establece el título que aparece en la pestaña del navegador. -->
    <title>Tres formas</title>

<!-- Cierra la sección head. -->
</head>

<!-- Abre la sección donde va el contenido visible de la página. -->
<body>

    <!-- Muestra un encabezado principal de nivel 1. -->
    <h1>Tres formas y el mismo resultado</h1>

    <!-- Forma 1: PHP escribe toda la etiqueta HTML <p>. -->
    <?php echo "<p>Hola $nom</p>"; ?>
    <!-- echo muestra el texto generado por PHP. -->
    <!-- Como usamos comillas dobles, PHP sustituye $nom por "Pepito". -->
    <!-- El navegador recibe: <p>Hola Pepito</p> y lo muestra como un párrafo. -->

    <!-- Forma 2: la etiqueta HTML está fuera de PHP y PHP solo muestra el valor. -->
    <p>Hola <?= $nom ?></p>
    <!-- <p> y </p> son HTML y crean un párrafo. -->
    <!-- <?= $nom ?> es una forma abreviada de escribir <?php echo $nom; ?>. -->
    <!-- El resultado visible es: Hola Pepito. -->

    <!-- Forma 3: escribimos directamente el texto en HTML, sin utilizar PHP. -->
    <p>Hola Pepito</p>
    <!-- El nombre está escrito manualmente, no se obtiene de ninguna variable. -->
    <!-- El resultado visible también es: Hola Pepito. -->

<!-- Cierra la sección del contenido visible. -->
</body>

<!-- Cierra el documento HTML. -->
</html>