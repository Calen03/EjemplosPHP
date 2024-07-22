<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejemplo de Funciones de Cadenas en PHP</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            margin: 0;
            padding: 20px;
        }

        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color: #0056b3;
        }

        pre {
            background-color: #f4f4f4;
            padding: 10px;
            border-radius: 4px;
            overflow-x: auto;
        }
    </style>
</head>

<body>
    <div class="container">
        <h1>Ejemplo de Funciones de Cadenas en PHP</h1>
        <h2>Resultados:</h2>
        <pre>
            <?php
            // Cadena original
            $texto = "    Hola Mundo PHP    ";

            // 1. Eliminar espacios en blanco al inicio y al final
            $texto_trimmed = trim($texto);
            echo "\nTexto sin espacios: '$texto_trimmed'\n";

            // 2. Convertir a mayúsculas
            $texto_upper = strtoupper($texto_trimmed);
            echo "Texto en mayúsculas: '$texto_upper'\n";

            // 3. Convertir a minúsculas
            $texto_lower = strtolower($texto_upper);
            echo "Texto en minúsculas: '$texto_lower'\n";

            // 4. Encontrar la posición de una subcadena
            $pos = strpos($texto_trimmed, "Mundo");
            echo "Posición de 'Mundo': $pos\n";

            // 5. Reemplazar una subcadena
            $texto_replaced = str_replace("PHP", "Programación", $texto_trimmed);
            echo "Texto con reemplazo: '$texto_replaced'\n";

            // 6. Dividir la cadena en un array
            $array_texto = explode(" ", $texto_trimmed);
            print_r($array_texto);

            // 7. Unir el array en una cadena con un delimitador
            $texto_joined = implode(" ", $array_texto);
            echo "Texto unido: '$texto_joined'\n";

            // 8. Obtener una subcadena
            $subcadena = substr($texto_trimmed, 0, 5);
            echo "Subcadena: '$subcadena'\n";
            ?>
        </pre>
    </div>
</body>

</html>
