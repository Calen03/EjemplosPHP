<?php
$num = [1, 2, 3, 4, 5];
$suma = 0;
$suma2 = 0;
count($num);
for ($i = 0; $i < count($num); $i++) {
    $suma += $num[$i];
}
foreach ($num as $valor) {
    $suma2 += $valor;
    echo $valor . ' ';
}

$edades = array("Juan" => 25, "Ana" => 30, "Luis" => 35);

// Usar foreach para iterar sobre un array asociativo
foreach ($edades as $nombre => $edad) {
    echo "Nombre: $nombre, Edad: $edad\n";
}

$colors = ['red', 'blue', 'green', 'yellow'];
$reversa = array_reverse($colors);
$colors = array_merge($colors, ['purple', 'orange']);


$colors_pink = array_splice($colors, 1, 2, 'pink');
array_pop($colors_pink);


$listings = [
    [
        'id' => 1,
        'job_title' => ['PHP Developer', 'master'],
        'company' => 'ABC Company',
        'contact_email' => 'john@email.com',
        'contact_phone' => '123-456-7890',
        'skills' => ['PHP', 'MySQL', 'JavaScript', 'HTML', 'CSS']
    ],
    [
        'id' => 2,
        'job_title' => 'Web Designer',
        'company' => 'XYZ Company',
        'contact_email' => 'steph@email.com',
        'contact_phone' => '123-456-7890',
        'skills' => ['Photoshop', 'Illustrator', 'HTML', 'CSS']
    ],
    [
        'id' => 3,
        'job_title' => 'Web Developer',
        'company' => '123 Company',
        'contact_email' => 'peter@email.com',
        'contact_phone' => '123-456-7890',
        'skills' => ['Python', 'PostgreSQL', 'JavaScript', 'HTML', 'CSS']
    ]
];

array_push(
    $listings,
    [
        'id' => 4,
        'job_title' => 'python Developer',
        'company' => 'ABC Company',
        'contact_email' => 'jack@email.com',
        'contact_phone' => '123-456-7890',
        'skills' => ['PHP', 'MySQL', 'JavaScript', 'python', 'CSS']
    ]
)
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ejemplos </title>
    <style>
        /* Estilos globales */
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f9;
        }

        header {
            background-color: #333;
            color: #fff;
            padding: 1rem;
            text-align: center;
        }

        nav {
            background-color: #444;
            padding: 0.5rem;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin: 0 1rem;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        main {
            padding: 2rem;
            max-width: 1200px;
            margin: auto;
        }

        h1 {
            color: #333;
        }

        p {
            line-height: 1.6;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        /* Estilos para tarjetas */
        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin: 1rem;
            padding: 1rem;
            transition: transform 0.2s;
        }

        .card:hover {
            transform: translateY(-10px);
        }

        .card img {
            max-width: 100%;
            border-radius: 8px 8px 0 0;
        }

        .card h2 {
            margin-top: 0;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }
    </style>
</head>

<body>
    <header>
        <h1>Bienvenido a Mi Página Web</h1>
    </header>

    <main>
        <div class="container">
            <div class="card">
                <img src="https://via.placeholder.com/400x200" alt="Imagen de Ejemplo">
                <p>Esta es una descripcin para la tarjeta 1. Contiene información relevante sobre este tema.</p>
                <p><?php
                    //echo  print_r($colors).'original' ;
                    //echo '<br>';
                    //echo 'reversa' . print_r(array_reverse($colors));
                    //echo '<br>';
                    //echo 'agregando ' . print_r($colors_pink);
                    //echo '<br>';
                    //echo 'pop' . print_r($colors_pink);
                    ?></p>
                <p><?php
                   //echo print_r($listings); 
                   echo '<br>';
                   echo $listings[0]['job_title'][1].' '.'skills'[0];
                   echo '<br>';
                   echo $listings[2]['skills'][2];
                ?>
                <?php for ($i=0; $i < 10 ; $i++):?>
                    <li>Number: <?= $i?> </li>
                <?php endfor; ?>

                </p>
            </div>
        </div>
    </main>

    <footer>
        <p>&copy; 2024 Mi Página Web. Todos los derechos reservados.</p>
    </footer>
</body>

</html>