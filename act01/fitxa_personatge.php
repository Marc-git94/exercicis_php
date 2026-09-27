<?php

// CONSTANTES: reglas del juego

const JUEGO = "Dungeon Powers";
const VIDA_MAXIMA = 20000;
const EXPERIENCIA_POR_NIVEL = 10000;
const FUERZA_MAXIMA = 1000;
const PORCENTAJE_HERIDO = 25; // % de vida por debajo del cual el personaje está herido, no utilizada
const NIVEL_MAXIMO = 100; // añadido extra por mí

// VARIABLES: datos del personaje

$nombre = "Mark Ice";
$clase = "Espadachín de hielo";
$nivel = 94;
$vidaActual = 3528;
$fuerzaActual = 940;
$experiencia = 7851;
$ataqueBase = 10;

// CALCULOS

// Porcentajes de vida y fuerza, redondeados a 1 decimal con number_format
$porcentajeVida = number_format($vidaActual / VIDA_MAXIMA * 100, 1);
$porcentajeFuerza = number_format($fuerzaActual / FUERZA_MAXIMA * 100, 1);

// Experiencia que falta para subir de nivel
$experienciaRestante = EXPERIENCIA_POR_NIVEL - $experiencia;

// Poder de ataque: crece con el nivel del personaje
$poderAtaque = $ataqueBase * $nivel;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= JUEGO ?> - Ficha de personaje</title>
    <style>
        * { box-sizing: border-box; }

        body {
            margin: 0;
            min-height: 100vh;
            background: radial-gradient(circle at top, #0962ef, #0c1117);
            font-family: 'Trebuchet MS', 'Segoe UI', sans-serif;
            color: #e7ecef;
            padding: 2.5rem 1rem;
        }

        .encabezado {
            max-width: 480px;
            margin: 0 auto 1.5rem;
        }

        .encabezado h1 {
            margin: 0;
            font-size: 1.6rem;
            letter-spacing: 1px;
            text-transform: uppercase;
            color: #f4b942;
        }

        .encabezado p {
            margin: 0.2rem 0 0;
            color: #7d90a3;
            font-size: 0.9rem;
        }

        .ficha {
            max-width: 480px;
            margin: 0 auto;
            background: #f6f3ee;
            color: #2f5286;
            border-radius: 18px;
            padding: 1.8rem 2rem 2.2rem;
            box-shadow: 0 18px 40px rgba(0,0,0,0.35);
        }

        .ficha h2 {
            margin: 0 0 0.1rem;
            font-size: 1.5rem;
        }

        .subtitulo {
            margin: 0 0 1.3rem;
            color: #6b7280;
            font-size: 0.85rem;
            letter-spacing: 0.5px;
            text-transform: uppercase;
        }

        .barra-nombre {
            display: flex;
            justify-content: space-between;
            font-size: 0.9rem;
            margin-bottom: 0.35rem;
        }

        .barra {
            background: #e2e4e0;
            border-radius: 99px;
            height: 12px;
            overflow: hidden;
            margin-bottom: 1.1rem;
        }

        .barra span { display: block; height: 100%; border-radius: 99px; }

        .barra .vida   { background: linear-gradient(90deg, #d1495b, #f4a259); }
        .barra .fuerza { background: linear-gradient(90deg, #2b9348, #55a630); }

        .datos {
            margin-top: 1.4rem;
            border-top: 1px dashed #c9c6bd;
            padding-top: 0.9rem;
        }

        .dato {
            display: flex;
            justify-content: space-between;
            padding: 0.35rem 0;
            font-size: 0.95rem;
        }
    </style>
</head>
<body>

    <div class="encabezado">
        <h1><?= JUEGO ?></h1>
        <p>Ficha de personaje</p>
    </div>

    <div class="ficha">
        <h2><?= $nombre ?></h2>
        <p class="subtitulo"><?= $clase ?> · Nivel <?= $nivel ?> / <?= NIVEL_MAXIMO ?></p>

        <div class="barra-nombre">
            <span>Vida</span>
            <span><?= number_format($vidaActual, 0, ',', '.') ?> / 
            <?= number_format(VIDA_MAXIMA, 0, ',', '.') ?> (<?= $porcentajeVida ?>%)</span>
        </div>

        <div class="barra">
            <span class="vida" style="width: <?= $porcentajeVida ?>%"></span>
        </div>

        <div class="barra-nombre">
            <span>Fuerza</span>
            <span><?= number_format($fuerzaActual, 0, ',', '.') ?> / 
            <?= number_format(FUERZA_MAXIMA, 0, ',', '.') ?> (<?= $porcentajeFuerza ?>%)</span>
        </div>
        
        <div class="barra">
            <span class="fuerza" style="width: <?= $porcentajeFuerza ?>%"></span>
        </div>

        <div class="datos">
            <div class="dato">
                <span>Poder de ataque</span>
                <span><?= number_format($poderAtaque, 0, ',', '.') ?></span>
            </div>
            <div class="dato">
                <span>Experiencia</span>
                <span><?= number_format($experiencia, 0, ',', '.') ?> / 
                <?= number_format(EXPERIENCIA_POR_NIVEL, 0, ',', '.') ?></span>
            </div>
            <div class="dato">
                <span>Faltan</span>
                <span><?= number_format($experienciaRestante, 0, ',', '.') ?> puntos para 
                subir de nivel</span>
            </div>
        </div>

        <?php
        // Echo con comillas dobles
        echo "<p style='margin-top:0.9rem; font-size:0.85rem; color:#6b7280;'>Aventurero conocido 
        como $nombre</p>";

        // Echo con comillas simples, concatenar con .
        echo 'Jugador ' . $nombre . ' listo para combatir!';
        ?>
    </div>

</body>
</html>
