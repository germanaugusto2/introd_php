<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// Operadores de comparación
$a = 5;
$b = 10;
echo "¿$a es igual a $b? " . var_export($a == $b, true) . "<br/>";
echo "¿$a es diferente de $b? " . var_export($a != $b, true) . "<br/>";

// Operadores lógicos
$verdadero = true;
$falso = false;
echo "verdadero AND falso: " . var_export($verdadero && $falso, true) . "<br/>";
echo "verdadero OR falso: " . var_export($verdadero || $falso, true) . "<br/>";

// Unión de cadenas
$cadena1 = "Hola";
$cadena2 = "Mundo";
echo "Unión de cadenas: " . $cadena1 . " " . $cadena2 . "<br/>";
?>

</body>
</html>