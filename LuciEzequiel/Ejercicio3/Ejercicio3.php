<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 3</title>
</head>
<body>

<?php

function getParam($name)
{
    return isset($_GET[$name]) ? $_GET[$name] : null;
}

function concatenar()
{
    $texto1 = getParam("texto1");
    $texto2 = getParam("texto2");

    return (is_null($texto1) || is_null($texto2) ? "Faltan parametros" : ($texto1 . " " . $texto2));
}

print(
concatenar()
);

?>

</body>
</html>