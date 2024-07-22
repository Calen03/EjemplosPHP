<?php
$names = ['Alex', 'Beth', 'Caroline', 'Dave', 'Elanor', 'Anna', 'Freddie', 'Adam'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Challenge nombres</title>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">Desafio</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <!-- Output -->
        <ul>
            <?php foreach ($names as $name) : ?>
                <?php if (strtolower($name[0]) === 'a'): ?>
                    <?php continue; ?>
                <?php endif; ?>
                <li><?php echo strtolower(strrev($name)) ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</body>

</html>