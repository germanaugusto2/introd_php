<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!-- Icono de la página -->
    <link rel="icon" type="image/png" href="./img/logo.png">
    <!-- Hojas de estilo de la página -->
    <link rel="stylesheet" type="text/css" href="estilos.css">
</head>
<body>
<h1>Sistemas</h1>
<h2>¿Cuánto es?</h2>
<?php
    $a = 10;
    $b = 15;
    echo "La suma de 10 y 15 es: " . ($a + $b) . "<br/>";
    echo "El residuo de 15 y 10: " . ($b % $a) . "<br/>";
    echo "La variable \$a con incremento: " . (++$a) . "<br/>";
?>
</body>
</html>
