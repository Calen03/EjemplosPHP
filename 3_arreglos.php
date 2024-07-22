<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arreglos en PHP</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f0f0;
            color: #333;
            padding: 20px;
        }
        h1, h2 {
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
    <h1>Arreglos en PHP</h1>

    <h2>Arreglo Simple</h2>
    <p>Un arreglo simple es una colección de elementos ordenados que pueden ser accedidos mediante su índice.</p>
    <?php
    // Definir un arreglo simple
    $frutas = ["Manzana", "Naranja", "Plátano", "Fresa"];

    // Imprimir el arreglo
    echo "<pre>";
    // print_r($frutas);
    var_dump($frutas);
    echo "</pre>";

    // Acceder a un elemento del arreglo
    echo "<p>La primera fruta es: " . $frutas[0] . "</p>";
    ?>

    <h2>Arreglo Compuesto</h2>
    <p>Un arreglo puede contener otros arreglos dentro.</p>
    <?php
    // Definir un arreglo compuesto
    $personas = [
        ["nombre" => "Juan", "edad" => 30, "estado" => "Puebla"],
        ["nombre" => "Ana", "edad" => 25, "estado" => "Jalisco"],
        ["nombre" => "Luis", "edad" => 35, "estado" => "Mexico"]
    ];

    // Imprimir el arreglo
    echo "<pre>";
    print_r($personas);
    echo "</pre>";

    // Acceder a un elemento del arreglo compuesto
    echo "<p>La persona en la segunda posición es: " . $personas[1]['nombre'] . ", Edad: " . $personas[1]['edad'] . ", estado: " . $personas[1]['estado'] . "</p>";
    ?>

</body>
</html>
