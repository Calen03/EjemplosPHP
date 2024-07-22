<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>FizzBuzz</title>
    <style>
        .texto-azul {
            color:  #0bece8;
        }

        .texto-rojo {
            color: red;
        }
    </style>
</head>

<body class="bg-gray-100">
    <header class="bg-blue-500 text-white p-4">
        <div class="container mx-auto">
            <h1 class="text-3xl font-semibold">FizzBuzz</h1>
        </div>
    </header>
    <div class="container mx-auto p-4 mt-4">
        <!-- Output -->
        <?php for ($i = 1; $i <= 100; $i++) : ?>
            <li>
                <?php if (($i % 3) == 0 && ($i % 5) == 0) : ?>
                    <span class="texto-azul"><?php echo 'Fizz' ?></span>
                    <span class="texto-rojo"><?php echo 'Buzz' ?></span>
                <?php elseif (($i % 3) == 0) : ?>
                    <span class="texto-azul"><?php echo 'Fizz' ?></span>
                <?php elseif (($i % 5) == 0) : ?>
                    <span class="texto-rojo"><?php echo 'Buzz' ?></span>
                <?php else : ?>
                    <?php echo $i ?>
                <?php endif ?>
            </li>
        <?php endfor ?>
    </div>
</body>

</html>