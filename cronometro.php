<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ruleta</title>
    <style>
        body {
            text-align: center;
            height: 100%;
            width: 100%;
            overflow: hidden;
            background-image: url("reloj.webp");
            background-size: cover;
        }
        #tiempo{
            margin: 10% 35% 0 35%;
            color: peru;
            background-color: black;
            border-radius: 15px 15px 0 0;
        }
        #cuenta{
            margin: 0 35% 0 35%;
            padding: 1%;
            color: aquamarine;
            background-color: black;
            border-radius: 0 0 15px 15px;
        }
        img, #mensaje{
            position: fixed;
        }
        #mensaje{
            top: 60%;
            left: 30%;
            width: 25%;
            height: 15%;
            background-color: white;
            border-radius: 60%;
        }
        img{
            top: 63%;
            left: 55%;
            height: 30%;
        }
    </style>
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
            echo "<h2 id='tiempo'>" . $opcion['nombre'] . " minutos: </h2>";
            break;
        }
    }
?>
    <h1 id="cuenta"></h1>
<script> //sacado de W3Schools
    // Set the date we're counting down to
    var minutos = "<?php echo $opcion['nombre']; ?>";
    var countDown = minutos * 60 * 1000;
    var contar = 0;

    // Update the count down every 1 second
    var x = setInterval(function() {

        // Find the distance between now and the count down date
        var distance = countDown - contar;

        // Time calculations for days, hours, minutes and seconds
        var days = Math.floor(distance / (1000 * 60 * 60 * 24));
        var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((distance % (1000 * 60)) / 1000);

        // Display the result in the element with id="demo"
        document.getElementById("cuenta").innerHTML = days + "d " + hours + "h "
            + minutes + "m " + seconds + "s ";

        // Get today's date and time
        contar = contar + 1000;
        // If the count down is finished, write some text
        if (distance < 0) {
            clearInterval(x);
            document.getElementById("cuenta").innerHTML = "0d 0h 0m 0s";
        }
    }, 1000);
</script>
    <h1 id="mensaje">¡Aguanta, ya falta pocoo!!!</h1>
    <img src="bano.png" alt="baño">
</body>
</html>
