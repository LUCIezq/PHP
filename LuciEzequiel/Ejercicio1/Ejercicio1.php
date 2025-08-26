<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Ejercicio 1</title>
</head>
<body>
<?php

function semaforo()
{
    $color = "";
    $colorParam = isset($_GET['color']) ? $_GET['color'] : null;

    if (is_null($colorParam)) {
        return $color = "Valor desconocido";
    }

    switch ($colorParam) {
        case 'rojo':
            $color = "Frene";
            break;
        case 'amarillo':
            $color = "Precaucion";
            break;
        case 'verde':
            $color = "Avance";
            break;
        default:
            $color = "Desconocido";
            break;
    }
    return $color;
}

print("<h2>El semaforo esta en el estado de: " . semaforo() . "</h2>")
?>
</body>
</html>
