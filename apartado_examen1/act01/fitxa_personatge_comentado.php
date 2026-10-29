<?php
// Abrimos el bloque de código PHP.

// --------------------------------------------------
// CONSTANTES: REGLAS DEL JUEGO
// --------------------------------------------------

// Definimos el nombre del juego.
// Las constantes no llevan el símbolo $ y no se pueden redefinir.
const JUEGO = "Dungeon Powers";

// Definimos la vida máxima que puede tener un personaje.
const VIDA_MAXIMA = 20000;

// Definimos los puntos de experiencia necesarios para subir de nivel.
const EXPERIENCIA_POR_NIVEL = 10000;

// Definimos la fuerza máxima del personaje.
const FUERZA_MAXIMA = 1000;

// Definimos el porcentaje de vida por debajo del cual
// consideraríamos que el personaje está herido.
// En este código solo está definida, pero no se utiliza.
const PORCENTAJE_HERIDO = 25;

// Definimos el nivel máximo permitido en el juego.
const NIVEL_MAXIMO = 100;


// --------------------------------------------------
// VARIABLES: DATOS DEL PERSONAJE
// --------------------------------------------------

// Guardamos el nombre del personaje.
$nombre = "Mark Ice";

// Guardamos la clase o especialidad del personaje.
$clase = "Espadachín de hielo";

// Guardamos el nivel actual del personaje.
$nivel = 94;

// Guardamos la vida actual del personaje.
$vidaActual = 3528;

// Guardamos la fuerza actual del personaje.
$fuerzaActual = 940;

// Guardamos la experiencia acumulada en el nivel actual.
$experiencia = 7851;

// Definimos el valor base del ataque.
$ataqueBase = 10;


// --------------------------------------------------
// CÁLCULOS
// --------------------------------------------------

// Calculamos el porcentaje de vida.
// Dividimos la vida actual entre la vida máxima y multiplicamos por 100.
// number_format() muestra el resultado con un decimal.
// Por ejemplo: 17.6.
$porcentajeVida = number_format($vidaActual / VIDA_MAXIMA * 100, 1);

// Calculamos el porcentaje de fuerza de la misma manera.
// 940 / 1000 * 100 = 94.0 %.
$porcentajeFuerza = number_format($fuerzaActual / FUERZA_MAXIMA * 100, 1);

// Calculamos cuánta experiencia falta para subir de nivel.
// Restamos la experiencia actual a los 10000 puntos necesarios.
// 10000 - 7851 = 2149.
$experienciaRestante = EXPERIENCIA_POR_NIVEL - $experiencia;

// Calculamos el poder de ataque multiplicando el ataque base por el nivel.
// 10 * 94 = 940.
$poderAtaque = $ataqueBase * $nivel;

// Cerramos PHP para empezar el documento HTML.
?>

<!DOCTYPE html>
<!-- Indicamos que utilizamos HTML5. -->

<html lang="es">
<!-- Indicamos que el idioma de la página es el español. -->

<head>
    <!-- Configuración de la página. -->

    <meta charset="UTF-8">
    <!-- Permite mostrar correctamente caracteres especiales. -->

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Adapta el ancho de la página a móviles y otros dispositivos. -->

    <!-- El título de la pestaña contiene el nombre del juego. -->
    <!-- <?= JUEGO ?> muestra el valor de la constante JUEGO. -->
    <title><?= JUEGO ?> - Ficha de personaje</title>

    <style>
        /* El asterisco selecciona todos los elementos HTML. */
        * {
            /* Hace que el ancho incluya el contenido, el padding y el borde. */
            box-sizing: border-box;
        }

        /* Estilos generales de la página. */
        body {
            /* Eliminamos el margen exterior predeterminado del navegador. */
            margin: 0;

            /* La página ocupará como mínimo toda la altura de la ventana. */
            min-height: 100vh;

            /* Creamos un fondo degradado radial. */
            background: radial-gradient(circle at top, #0962ef, #0c1117);

            /* Definimos las fuentes del texto. */
            font-family: 'Trebuchet MS', 'Segoe UI', sans-serif;

            /* Definimos el color general del texto. */
            color: #e7ecef;

            /* Añadimos espacio interior arriba y a los lados. */
            padding: 2.5rem 1rem;
        }

        /* Estilos del encabezado que aparece encima de la ficha. */
        .encabezado {
            /* Limitamos su ancho máximo a 480 píxeles. */
            max-width: 480px;

            /* Lo centramos horizontalmente y dejamos espacio inferior. */
            margin: 0 auto 1.5rem;
        }

        /* Estilos del título principal del encabezado. */
        .encabezado h1 {
            /* Eliminamos los márgenes predeterminados. */
            margin: 0;

            /* Definimos el tamaño del texto. */
            font-size: 1.6rem;

            /* Añadimos separación entre las letras. */
            letter-spacing: 1px;

            /* Convertimos el texto a mayúsculas visualmente. */
            text-transform: uppercase;

            /* Aplicamos un color dorado. */
            color: #f4b942;
        }

        /* Estilos del texto secundario del encabezado. */
        .encabezado p {
            /* Ajustamos los márgenes. */
            margin: 0.2rem 0 0;

            /* Aplicamos un color gris azulado. */
            color: #7d90a3;

            /* Definimos el tamaño del texto. */
            font-size: 0.9rem;
        }

        /* Estilos de la tarjeta que contiene la ficha. */
        .ficha {
            /* Limitamos el ancho máximo de la tarjeta. */
            max-width: 480px;

            /* Centramos la tarjeta horizontalmente. */
            margin: 0 auto;

            /* Aplicamos un fondo claro. */
            background: #f6f3ee;

            /* Definimos el color del texto de la tarjeta. */
            color: #2f5286;

            /* Redondeamos las esquinas. */
            border-radius: 18px;

            /* Añadimos espacio entre el borde y el contenido. */
            padding: 1.8rem 2rem 2.2rem;

            /* Añadimos una sombra alrededor de la tarjeta. */
            box-shadow: 0 18px 40px rgba(0,0,0,0.35);
        }

        /* Estilos del nombre del personaje dentro de la ficha. */
        .ficha h2 {
            /* Ajustamos los márgenes. */
            margin: 0 0 0.1rem;

            /* Definimos el tamaño del nombre. */
            font-size: 1.5rem;
        }

        /* Estilos de la clase y el nivel del personaje. */
        .subtitulo {
            /* Ajustamos los márgenes. */
            margin: 0 0 1.3rem;

            /* Aplicamos un color gris. */
            color: #6b7280;

            /* Definimos el tamaño del texto. */
            font-size: 0.85rem;

            /* Separamos ligeramente las letras. */
            letter-spacing: 0.5px;

            /* Mostramos el texto en mayúsculas visualmente. */
            text-transform: uppercase;
        }

        /* Contenedor que muestra el nombre de una estadística y su valor. */
        .barra-nombre {
            /* Colocamos los elementos en una fila flexible. */
            display: flex;

            /* Separamos el nombre y el valor hacia los extremos. */
            justify-content: space-between;

            /* Definimos el tamaño del texto. */
            font-size: 0.9rem;

            /* Dejamos un pequeño espacio debajo. */
            margin-bottom: 0.35rem;
        }

        /* Fondo de las barras de estadísticas. */
        .barra {
            /* Aplicamos un fondo gris claro. */
            background: #e2e4e0;

            /* Redondeamos los extremos de la barra. */
            border-radius: 99px;

            /* Definimos la altura de la barra. */
            height: 12px;

            /* Ocultamos cualquier contenido que sobresalga. */
            overflow: hidden;

            /* Separamos la barra del siguiente elemento. */
            margin-bottom: 1.1rem;
        }

        /* Estilos del elemento span que representa el relleno de la barra. */
        .barra span {
            /* Hacemos que el span se comporte como un bloque. */
            display: block;

            /* Ocupa toda la altura de la barra. */
            height: 100%;

            /* Redondeamos sus extremos. */
            border-radius: 99px;
        }

        /* Degradado de color de la barra de vida. */
        .barra .vida {
            background: linear-gradient(90deg, #d1495b, #f4a259);
        }

        /* Degradado de color de la barra de fuerza. */
        .barra .fuerza {
            background: linear-gradient(90deg, #2b9348, #55a630);
        }

        /* Contenedor de los datos inferiores de la ficha. */
        .datos {
            /* Separamos este bloque de las barras anteriores. */
            margin-top: 1.4rem;

            /* Añadimos una línea superior discontinua. */
            border-top: 1px dashed #c9c6bd;

            /* Añadimos espacio encima de los datos. */
            padding-top: 0.9rem;
        }

        /* Cada fila de información, como el ataque o la experiencia. */
        .dato {
            /* Colocamos el nombre y el valor en una fila. */
            display: flex;

            /* Separamos ambos elementos hacia los extremos. */
            justify-content: space-between;

            /* Añadimos espacio vertical a cada fila. */
            padding: 0.35rem 0;

            /* Definimos el tamaño del texto. */
            font-size: 0.95rem;
        }
    </style>
    <!-- Cerramos los estilos CSS. -->

</head>

<body>
    <!-- Comienza el contenido visible de la página. -->

    <div class="encabezado">
        <!-- Encabezado de la ficha. -->

        <!-- Mostramos el nombre del juego desde la constante. -->
        <h1><?= JUEGO ?></h1>

        <!-- Mostramos el subtítulo del encabezado. -->
        <p>Ficha de personaje</p>
    </div>

    <div class="ficha">
        <!-- Tarjeta principal del personaje. -->

        <!-- Mostramos el nombre del personaje. -->
        <h2><?= $nombre ?></h2>

        <!-- Mostramos la clase, el nivel actual y el nivel máximo. -->
        <p class="subtitulo">
            <?= $clase ?> · Nivel <?= $nivel ?> / <?= NIVEL_MAXIMO ?>
        </p>

        <!-- Nombre y valor numérico de la vida. -->
        <div class="barra-nombre">
            <span>Vida</span>

            <span>
                <!-- Mostramos la vida actual sin decimales y con separador de miles. -->
                <?= number_format($vidaActual, 0, ',', '.') ?> /

                <!-- Mostramos la vida máxima con el mismo formato. -->
                <?= number_format(VIDA_MAXIMA, 0, ',', '.') ?>

                <!-- Mostramos el porcentaje de vida calculado anteriormente. -->
                (<?= $porcentajeVida ?>%)
            </span>
        </div>

        <!-- Fondo de la barra de vida. -->
        <div class="barra">

            <!--
            El ancho del relleno depende del porcentaje de vida.
            Si tiene un 17.6 % de vida, el relleno ocupará aproximadamente
            el 17.6 % del ancho disponible.
            -->
            <span class="vida" style="width: <?= $porcentajeVida ?>%"></span>

        </div>

        <!-- Nombre y valor numérico de la fuerza. -->
        <div class="barra-nombre">
            <span>Fuerza</span>

            <span>
                <!-- Mostramos la fuerza actual sin decimales. -->
                <?= number_format($fuerzaActual, 0, ',', '.') ?> /

                <!-- Mostramos la fuerza máxima. -->
                <?= number_format(FUERZA_MAXIMA, 0, ',', '.') ?>

                <!-- Mostramos el porcentaje de fuerza. -->
                (<?= $porcentajeFuerza ?>%)
            </span>
        </div>

        <!-- Fondo de la barra de fuerza. -->
        <div class="barra">

            <!-- El ancho del relleno depende del porcentaje de fuerza. -->
            <span class="fuerza" style="width: <?= $porcentajeFuerza ?>%"></span>

        </div>

        <!-- Contenedor de los datos adicionales del personaje. -->
        <div class="datos">

            <!-- Primera fila: poder de ataque. -->
            <div class="dato">
                <span>Poder de ataque</span>

                <!-- Mostramos el poder de ataque calculado. -->
                <?= number_format($poderAtaque, 0, ',', '.') ?>
            </div>

            <!-- Segunda fila: experiencia acumulada y necesaria. -->
            <div class="dato">
                <span>Experiencia</span>

                <span>
                    <!-- Mostramos la experiencia actual. -->
                    <?= number_format($experiencia, 0, ',', '.') ?> /

                    <!-- Mostramos la experiencia necesaria para subir de nivel. -->
                    <?= number_format(EXPERIENCIA_POR_NIVEL, 0, ',', '.') ?>
                </span>
            </div>

            <!-- Tercera fila: experiencia que falta para subir de nivel. -->
            <div class="dato">
                <span>Faltan</span>

                <span>
                    <!-- Mostramos los puntos que faltan para subir de nivel. -->
                    <?= number_format($experienciaRestante, 0, ',', '.') ?>
                    puntos para subir de nivel
                </span>
            </div>

        </div>

        <?php
        // Volvemos a abrir PHP para ejecutar instrucciones dentro del HTML.

        // --------------------------------------------------
        // ECHO CON COMILLAS DOBLES
        // --------------------------------------------------

        // Con comillas dobles, PHP interpreta las variables que aparecen
        // dentro de la cadena de texto.
        // Por eso, $nombre se sustituye por "Mark Ice".
        echo "<p style='margin-top:0.9rem; font-size:0.85rem; color:#6b7280;'>Aventurero conocido
        como $nombre</p>";

        // --------------------------------------------------
        // ECHO CON COMILLAS SIMPLES Y CONCATENACIÓN
        // --------------------------------------------------

        // Con comillas simples, PHP no sustituye automáticamente
        // las variables escritas dentro del texto.
        // Por eso concatenamos las cadenas y la variable utilizando puntos.
        echo 'Jugador ' . $nombre . ' listo para combatir!';

        // Cerramos el bloque PHP.
        ?>

    </div>
    <!-- Cerramos la tarjeta del personaje. -->

</body>
<!-- Cerramos el cuerpo de la página. -->

</html>
<!-- Cerramos el documento HTML. -->