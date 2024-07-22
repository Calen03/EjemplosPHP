<?php

// $factor = 5;

// $suma = function ($a, $b) {
//   return $a + $b;
// };
// echo $suma(3, 4); // Salida: 7

// $multiplicacion = fn ($a, $b) => $a * $b;
// Llamar a la función flecha a través de la variable
// echo $multiplicacion(3, 4); // Salida: 12

//El operador (...) recupera varios valores y los almacena en un array
// function addAll(...$numbers){
//   $total=0;
//   foreach($numbers as $number){
//     $total+=$number;
//   }
//   return $total;
// }
// echo addAll(1,2,3,4,5);

$listings = [
  [
    'id' => 1,
    'title' => 'Software Engineer',
    'description' => 'We are seeking a skilled software engineer to develop high-quality software solutions.',
    'salary' => 80000,
    'location' => 'San Francisco',
    'tags' => ['Software Development', 'Java', 'Python']
  ],
  [
    'id' => 2,
    'title' => 'Marketing Specialist',
    'description' => 'We are looking for a marketing specialist to develop and implement effective marketing strategies.',
    'salary' => 60000,
    'location' => 'New York',
    'tags' => ['Digital Marketing', 'Social Media', 'SEO']
  ],
  [
    'id' => 3,
    'title' => 'Accountant',
    'description' => 'We are hiring an experienced accountant to handle financial transactions and ensure compliance.',
    'salary' => 55000,
    'location' => 'Chicago',
    'tags' => ['Accounting', 'Bookkeeping', 'Financial Reporting']
  ],
  [
    'id' => 4,
    'title' => 'UX Designer',
    'description' => 'We are seeking a talented UX designer to create intuitive and visually appealing user interfaces.',
    'salary' => 70000,
    'location' => 'Seattle',
    'tags' => ['User Experience', 'Wireframing', 'Prototyping']
  ],
  [
    'id' => 5,
    'title' => 'Customer Service Representative',
    'description' => 'We are looking for a friendly customer service representative to assist customers and resolve issues.',
    'salary' => 50000,
    'location' => 'New York',
    'tags' => []
  ],
];

$formato = fn ($salario) => '$' . number_format($salario);

function resaltar($tags, $busqueda)
{
  $tag = implode(",", $tags);
  return str_replace(
    $busqueda,
    "<span class = 'bg-purple-600'>{$busqueda}</span>",
    $tag
  );
}

function avgSalario($list, $formato)
{
  $salario = 0;
  $suma = 0;
  foreach ($list as $job) {
    $suma += $job['salary'];
  }
  $salario = count($list) > 0 ? $suma / (count($list)) : 0;
  $salario = $formato($salario);
  return $salario;
}

function filterListingLocation($listings, $location)
{
  return array_filter($listings, function ($job) use ($location) {
    return strcasecmp($job['location'], $location) === 0;
  });
}

if (isset($_GET['location'])) {
  $location = $_GET['location'];

  $filteredListings = filterListingLocation($listings, $location);
} else {
  $filteredListings = $listings;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Job Listings</title>
</head>

<body class="bg-gray-100">
  <header class="bg-blue-500 text-white p-4">
    <div class="container mx-auto">
      <h1 class="text-3xl font-semibold">Job Listings</h1>
    </div>
  </header>
  <div class="container mx-auto p-4 mt-4">
    <!-- Output -->
    <div class="bg-green-100 rounded-lg shadow-md p-6 my-6">
      <h2 class="text-2xl font-semibold mb-4">Average Salary: <?php echo avgSalario($listings, $formato)  ?></h2>
    </div>
    <?php foreach ($filteredListings as $index => $job) : ?>
      <div class="md my-4">
        <div class="rounded-lg shadow-md <?= $index % 2 === 0 ? 'bg-blue-200' : 'bg-pink-400'; ?>">
          <div class="p-4">
            <h2 class="text-xl font-semibold"><?= $job['title'] ?></h2>
            <p class="text-gray-700 text-lg mt-2"><?= $job['description'] ?></p>
            <ul class="mt-4">
              <li class="mb-2">
                <strong>Salary:</strong> <?= $formato($job['salary']) ?>
              </li>
              <li class="mb-2">
                <strong>Location:</strong> <?= $job['location'] ?>
                <?php echo $job['location'] == 'New York' ? '<span class="text-xs text-white bg-green-500 
                rounded-full px-2 py-1 ml-2">Local</span>' : '<span class="text-xs text-white bg-red-500 rounded-full
                px-2 py-1 ml-2">Remote</span>' ?>
              </li>
              <?php if (!empty($job['tags'])) : ?>
                <li class="mb-2">
                  <strong>Tags:</strong>
                  <?php echo resaltar($job['tags'], 'Accounting') ?>
                </li>
              <?php endif; ?>
            </ul>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</body>

</html>