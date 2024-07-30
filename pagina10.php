<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Incluir archivos php en una página</title>
</head>
<body>
    <h1>Incluir archivos php en una página</h1>
    <?php
        include('variables.php');
        echo "<br>";
        echo "<br>";
        print("$x"."$z"."$y");
    ?>
</body>
</html>
