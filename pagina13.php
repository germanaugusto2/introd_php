<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funciones para manipular cadenas</title>
</head>
<body>
    <h1>Funciones para manipular cadenas</h1>
    <?php
        // substr: devuelve una parte de una cadena
        $cadena = "Hola Mundo";
        $subcadena = substr($cadena, 5, 5); // "Mundo"
        echo "substr: $subcadena<br>";

        // ord: devuelve el valor ASCII del primer carácter de una cadena
        $caracter = "A";
        $valorASCII = ord($caracter); // 65
        echo "ord: $valorASCII<br>";

        // printf: muestra una cadena formateada
        $numero = 5;
        $texto = "manzanas";
        printf("printf: Tengo %d %s<br>", $numero, $texto);

        // sprintf: devuelve una cadena formateada
        $cadenaFormateada = sprintf("sprintf: Tengo %d %s", $numero, $texto);
        echo "$cadenaFormateada<br>";

        // strtolower: convierte una cadena a minúsculas
        $cadenaMayus = "HOLA MUNDO";
        $cadenaMinus = strtolower($cadenaMayus); // "hola mundo"
        echo "strtolower: $cadenaMinus<br>";

        // strtoupper: convierte una cadena a mayúsculas
        $cadenaMinus = "hola mundo";
        $cadenaMayus = strtoupper($cadenaMinus); // "HOLA MUNDO"
        echo "strtoupper: $cadenaMayus<br>";

        // ereg: expresión regular para buscar coincidencias en una cadena (obsoleta en PHP 7.0.0)
        // En su lugar se usa preg_match
        $patron = "mundo";
        if (preg_match("/$patron/i", $cadena)) {
            echo "preg_match: Se encontró '$patron' en '$cadena'<br>";
        } else {
            echo "preg_match: No se encontró '$patron' en '$cadena'<br>";
        }

        // eregi: expresión regular para buscar coincidencias en una cadena sin importar mayúsculas/minúsculas (obsoleta en PHP 7.0.0)
        // En su lugar se usa preg_match con el modificador 'i'
        if (preg_match("/$patron/i", $cadena)) {
            echo "preg_match (insensible a mayúsculas/minúsculas): Se encontró '$patron' en '$cadena'<br>";
        } else {
            echo "preg_match (insensible a mayúsculas/minúsculas): No se encontró '$patron' en '$cadena'<br>";
        }
    ?>    
</body>
</html>
