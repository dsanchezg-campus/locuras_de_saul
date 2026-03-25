<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ruleta</title>
</head>
<body>
<?php
    $opcion1 = array('nombre' => 1, 'porcentaje' => 1);
    $opcion2 = array('nombre' => 3, 'porcentaje' => 11);
    $opcion3 = array('nombre' => 7, 'porcentaje' => 50);
    $opcion4 = array('nombre' => 14, 'porcentaje' => 89);
    $opcion5 = array('nombre' => 50, 'porcentaje' => 99);
    $opcion6 = array('nombre' => 100, 'porcentaje' => 100);
    $opciones = array($opcion1, $opcion2, $opcion3, $opcion4, $opcion5, $opcion6);
    $probabilidad = rand(1, 100);
    foreach ($opciones as $opcion) {
        if ($probabilidad <= $opcion['porcentaje']) {
            echo "<h1>" . $opcion['nombre'] . " minutos</h1>";
            break;
        }
    }

?>
</body>
</html>
