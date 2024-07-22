<?php
$dayOfWeek = date('l');
//$dayOfWeek = 'Friday';
const FACTOR_CONVERSION = 32;

switch ($dayOfWeek) {
    case 'Monday':
        $message = 'Monday BLues';
        $color = 'blue';
        break;
    case 'Tuesday':
        $message = 'At least it\'s not monday';
        $color = 'orange';
        break;
    case 'Wednesday':
        $message = 'What a week, huh!';
        $color = 'red';
        break;
    case 'Thursday':
        $message = 'Monday BLues';
        $color = 'brown';
        break;
    case 'Friday':
        $message = 'Gracias a dios es viernes';
        $color = 'green';
        break;
    case 'Saturday':
        $message = 'Monday BLues';
        $color = 'pink';
        break;
    case 'Sunday':
        $message = 'Monday BLues';
        $color = 'magenta';
        break;
}

$Celsius = fn ($Fahrenheit) => ($Fahrenheit - FACTOR_CONVERSION) * (5 / 9);

function Mayuscula($lista)
{
    foreach ($lista as $name) {
        $nameMayus = strtoupper($name);
        echo $nameMayus . '</br>';
    }
}

$lista = ['Mariela', 'Montse', 'Jorge', 'Luis'];

$palabra = function ($frase) {
    $palabras = explode(' ', $frase);
    $opcion = $palabras[0];
    $index = 0;
    for ($i = 1; $i < count($palabras); $i++) {
        $opcion = strlen($palabras[$i]) > strlen($palabras[$index]) ? $palabras[$i] : $palabras[$index];
        $index = ($opcion == $palabras[$index]) ? $index : $i;
    }
    return $opcion;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>What Day</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: <?php echo $color ?>;
            color: black;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
    </style>
</head>

<body>
    <h1>
        <?php $temperatura = 50;
        echo  $temperatura . 'F°=' . $Celsius($temperatura) . 'C°' ?>
    </h1>
    <?php echo Mayuscula($lista) ?>
    <p><?php $Frase = 'Buenisiefasdfefmasym tardesefasfsefssss amisdfgosssfasdjkfhasjdas masdfasefawiops';
        echo 'Palabra más larga ' . $palabra($Frase) ?></p>
</body>

</html>