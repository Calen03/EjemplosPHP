<?php



echo '</br>';
echo 'Hello world';
echo '<//br>';
$nombre = 'Luis';
$telefono = 555234;
$codigoPostal = '41231';
$booleano = true;


$precio = 100;
$cantidad = 5;
$total = $precio * $cantidad;
/* $total contiene 500 */
$aumento = 2;
$total = $total + $aumento;
/* $total ahora contiene 502 */
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variables</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            color: #333;
            padding: 20px;
        }

        h1,
        h2 {
            color: #0066cc;
        }

        pre {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 10px;
            overflow-x: auto;
        }
    </style>
</head>

<body>
    <h1>variables en PHP</h1>

    <h2>Variables </h2>
    <p>Contienen datos de todo tipo.</p>
    <?= "<pre>"; ?>
    <?php echo $nombre; ?>
    <?php echo $telefono; ?>
    <?php echo $booleano; ?>
    <?php echo $codigoPostal; ?>
    <?= '</pre>'; ?>

    <h2>Strings </h2>
    <p>Es posible mostrar variables en un string</p>
    <?= "<pre>"; ?>
    <?php
    // strings uso de comillas
    $comillasDobles = "Texto entre comillas dobles, puede contener 'comillas simples' dentro sin problemas";
    echo '</br>' . $comillasDobles;

    $comillasSimple = 'Texto entre comillas simples, puede contener "comillas dobles" ';
    echo '</br>' . $comillasSimple;

    $escapeDob = "Texto con \"comillas\" dobles escapadas";
    echo '</br>' . $escapeDob;

    $escapeSimp = 'Texto con \'comillas\' simples escapadas';
    echo '</br>' . $escapeSimp;

    $variablesDob = "Texto con variables como {$nombre} y {$telefono} que se reemplazarán por su valor";
    echo '</br>' . $variablesDob;

    $variablesSim = 'Texto con variables como $nom/bre y $apellido que no se reemplazarán por su valor';
    echo '</br>' . $variablesSim;

    ?>
    <?= '</pre>'; ?>


    <h2>Operaciones </h2>
    <p>Podemos realizar operaciones aritmeticas con las variables</p>
    <?= "<pre>"; ?>
    <?php
    // operaciones aritmeticas
    $a = 5;
    $b = 10.5;
    $c = 2;
    $texto = "Hola, ";
    $suma = $a + $b;
    echo '</br> suma ' . $suma;
    $resta = $a - $c;
    echo '</br> resta ' . $resta;
    $multiplicacion = $a * $b;
    echo '</br> multiplicacion ' . $multiplicacion;
    $division = $b / $c;
    echo '</br> division ' . $division;
    ?>
    <?= '</pre>'; ?>


</body>

</html>