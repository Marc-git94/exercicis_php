<!--
EJERCICIO 6:

Cambiar la extensión del archivo a .php y comprobar que sigue funcionando.

Poner los datos en un bloque PHP al principio del archivo.

Sustituir los valores fijos del HTML por variables y hacer que
el IVA y el total se calculen automáticamente.

Definir las constantes IVA, TIENDA, MONEDA y DESCUENTO_SOCIO.

Sustituir los valores fijos por constantes cuando corresponda.

Intentar cambiar el valor de una constante y observar el error.

Utilizar number_format() para modificar cómo se muestran los precios.
-->

<?php
// Abrimos el bloque PHP.

// --------------------------------------------------
// DEFINICIÓN DE CONSTANTES
// --------------------------------------------------

// Creamos una constante llamada IVA con el valor 0.21.
// Esto representa un IVA del 21 %.
// Una constante no se puede modificar después de definirla.
const IVA = 0.21;

// Creamos una constante con el nombre de la tienda.
const TIENDA = "Tienda online GUAY";

// Creamos una constante con el código de la moneda.
const MONEDA = "EUR";

// Creamos una constante con el descuento para los socios.
// 0.10 equivale a un descuento del 10 %.
const DESCUENTO_SOCIO = 0.10;


// --------------------------------------------------
// INTENTO DE CAMBIAR UNA CONSTANTE
// --------------------------------------------------

// Si intentamos definir otra vez la constante IVA,
// PHP dará un error porque ya existe una constante con ese nombre.
// No podemos cambiar una constante volviéndola a declarar.

// const IVA = 0.10;


// --------------------------------------------------
// DATOS DEL PRODUCTO
// --------------------------------------------------

// Guardamos el nombre del producto.
$nombreProducto = "Camiseta guay";

// Guardamos la descripción del producto.
$descripcion = "Camiseta chupi chupi guay";

// Guardamos el precio del producto antes de aplicar el IVA.
$precio = 99.99;

// Guardamos la cantidad de unidades disponibles.
$stock = 5;

// Guardamos la referencia del producto.
$ref = "CAM-1425376";


// --------------------------------------------------
// CÁLCULOS AUTOMÁTICOS
// --------------------------------------------------

// Calculamos el importe del IVA.
// Multiplicamos el precio por la constante IVA.
// 99.99 * 0.21 = 20.997, que se mostrará redondeado a 21,00 €.
$iva = $precio * IVA;

// Calculamos el precio total sumando el precio original y el IVA.
// El resultado numérico es 120.987.
$total = $precio + $iva;

// Calculamos el descuento de socio sobre el total con IVA.
// Multiplicamos el total por la constante DESCUENTO_SOCIO.
$descuento = $total * DESCUENTO_SOCIO;

// Calculamos el total con descuento restando el descuento al total.
$totalConDescuento = $total - $descuento;


// --------------------------------------------------
// FUNCIÓN PARA FORMATEAR LOS PRECIOS
// --------------------------------------------------

// Creamos una función llamada formatoPrecio().
// Recibe una cantidad como parámetro.
function formatoPrecio($cantidad) {

    // number_format() permite controlar cómo se muestra un número.
    // El primer parámetro es el número que queremos mostrar.
    // El segundo indica que queremos 2 decimales.
    // El tercero indica que usaremos la coma como separador decimal.
    // El cuarto indica que usaremos el punto para los miles.
    //
    // Después concatenamos un espacio y el código de moneda.
    // MONEDA es una constante global y se puede usar dentro de la función.
    //
    // Ejemplo: 1234.5 se mostrará como "1.234,50 EUR".
    return number_format($cantidad, 2, ',', '.') . ' ' . MONEDA;
}

// Cerramos el bloque PHP.
// A partir de aquí comienza el HTML.
?>

<!DOCTYPE html>
<!-- Indicamos que el documento utiliza HTML5. -->

<html lang="es">
<!-- Indicamos que el idioma de la página es el español. -->

<head>
    <!-- Configuración de la página. -->

    <meta charset="UTF-8">
    <!-- Permite mostrar correctamente tildes y caracteres especiales. -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Permite adaptar la página a móviles y otros dispositivos. -->

    <!-- Mostramos el nombre de la tienda como título de la pestaña. -->
    <!-- <?= TIENDA ?> equivale a <?php echo TIENDA; ?> -->
    <title><?= TIENDA ?></title>

</head>

<body>
    <!-- Aquí comienza el contenido visible de la página. -->

    <header>
        <!-- Cabecera de la página. -->

        <!-- Mostramos el nombre de la tienda utilizando la constante. -->
        <h1><?= TIENDA ?></h1>

        <!-- Mostramos una descripción de la tienda. -->
        <p>Esto es una tienda online guay</p>

    </header>

    <main>
        <!-- Contenido principal de la página. -->

        <article class="producto">
            <!-- Creamos un artículo que contiene los datos del producto. -->

            <!-- Mostramos el nombre del producto. -->
            <h2><?= $nombreProducto ?></h2>

            <!-- Mostramos la descripción del producto. -->
            <p class="descripcion"><?= $descripcion ?></p>

            <!-- Mostramos el precio sin IVA utilizando nuestra función. -->
            <p class="precio">
                Precio sin IVA: <?= formatoPrecio($precio) ?>
            </p>

            <!-- Mostramos el porcentaje de IVA y su importe calculado. -->
            <!-- IVA * 100 convierte 0.21 en 21. -->
            <p class="precio">
                IVA (<?= IVA * 100 ?>%): <?= formatoPrecio($iva) ?>
            </p>

            <!-- Mostramos el total con IVA incluido. -->
            <p class="total">
                Total: <?= formatoPrecio($total) ?>
            </p>

            <!-- Mostramos el total después de aplicar el descuento de socio. -->
            <!-- DESCUENTO_SOCIO * 100 convierte 0.10 en 10. -->
            <p class="total">
                Total con descuento de socio (-<?= DESCUENTO_SOCIO * 100 ?>%):
                <?= formatoPrecio($totalConDescuento) ?>
            </p>

            <!-- Mostramos las unidades que quedan disponibles. -->
            <p class="stock">Stock disponible: <?= $stock ?></p>

            <!-- Mostramos la referencia del producto. -->
            <p class="ref"><?= $ref ?></p>

        </article>

        <footer>
            <!-- Pie de página de la tienda. -->

            <!-- Mostramos el nombre de la tienda usando la constante. -->
            <p>Footer de <?= TIENDA ?> S.L</p>

        </footer>

    </main>

</body>
</html>
<!-- Cerramos el documento HTML. -->