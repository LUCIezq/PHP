<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 2</title>
</head>
<body>
<?php
function binomioCuadradoPerfecto($a, $b)
{
    return pow($a + $b, 2);
}

function binomioCuadradoPerfecto2($a, $b)
{
    return pow($a, 2) + 2 * $a * $b + pow($b, 2);
}
print(binomioCuadradoPerfecto(2, 3));
print("<br>");
print(binomioCuadradoPerfecto2(2, 3));
?>

</body>
</html>
