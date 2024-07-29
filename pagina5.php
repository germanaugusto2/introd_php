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
$numero = 15;

// Instrucción condicional if
if ($numero < 10) {
    echo "$numero es menor que 10<br/>";
}

// Instrucción condicional if-else
if ($numero < 10) {
    echo "$numero es menor que 10<br/>";
} else {
    echo "$numero es mayor o igual a 10<br/>";
}

// Instrucción condicional elseif
if ($numero < 10) {
    echo "$numero es menor que 10<br/>";
} elseif ($numero == 15) {
    echo "$numero es igual a 15<br/>";
} else {
    echo "$numero es mayor que 10 y diferente de 15<br/>";
}
?>

</body>
</html>