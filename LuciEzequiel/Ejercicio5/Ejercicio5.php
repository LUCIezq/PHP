<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 5</title>
</head>
<body>

<?php
const vector = [1, 1, 1];

function sumatoria($vector)
{
    $suma = 0;

    for ($i = 0; $i < count($vector); $i++) {
        $suma += $vector[$i];
    }
    return $suma;
}

print(sumatoria(vector));
?>

</body>
</html>