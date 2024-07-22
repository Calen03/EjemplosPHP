<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ejemplo de Estructuras de Control en PHP</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      line-height: 1.6;
      margin: 20px;
    }

    h1 {
      color: #333;
    }

    pre {
      background-color: #f4f4f4;
      border: 1px solid #ddd;
      padding: 10px;
      overflow-x: auto;
    }

    .output {
      border: 1px solid #ddd;
      padding: 10px;
      background-color: #f9f9f9;
      margin-top: 20px;
    }
  </style>
</head>

<body>
  <h1>Ejemplo de Estructuras de Control en PHP</h1>

  <div class="output">
    <?php
    // Estructura de Control if-else
    $edad = 18;

    if ($edad >= 18) {
      echo "Eres mayor de edad.<br>";
    } else {
      echo "Eres menor de edad.<br>";
    }

    // Estructura de Control if-elseif-else
    $nota = 85;

    if ($nota >= 90) {
      echo "Calificación: A<br>";
    } elseif ($nota >= 80) {
      echo "Calificación: B<br>";
    } elseif ($nota >= 70) {
      echo "Calificación: C<br>";
    } else {
      echo "Platica mucho en clase.<br>";
    }

    // Estructura de Control switch
    $dia = date('l');

    switch ($dia) {
      case "Monday":
        echo "Hoy es lunes.<br>";
        break;
      case "Tuesday":
        echo "Hoy es martes.<br>";
        break;
      case "Wednesday":
        echo "Hoy es miércoles.<br>";
        break;
      default:
        echo "No es un día de la semana.<br>";
        break;
    }

    // Estructura de Control for
    echo "Contando del 1 al 5:<br>";
    for ($i = 1; $i <= 5; $i++) {
      echo $i . "<br>";
    }

    // Estructura de Control foreach
    $frutas = array("Manzana", "Uva", "Cereza");

    echo "Frutas disponibles:<br>";
    foreach ($frutas as $fruta) {
      echo $fruta . "<br>";
    }

    // Estructura de Control while
    $contador = 0;

    echo "Contando con while:<br>";
    while ($contador < 3) {
      echo $contador . "<br>";
      $contador++;
    }

    // Estructura de Control do-while
    $contador = 0;

    echo "Contando con do-while:<br>";
    do {
      echo $contador . "<br>";
      $contador++;
    } while ($contador < 3);
    ?>
  </div>
</body>

</html>