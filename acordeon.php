<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pestañas Acordeón</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .accordion {
            border: 1px solid #ddd;
            margin-bottom: 10px;
            border-radius: 5px;
            overflow: hidden;
            background-color: #fff;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .accordion-header {
            background-color: #f1f1f1;
            color: #333;
            padding: 15px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }
        .accordion-header:hover {
            background-color: #e0e0e0;
        }
        .accordion-content {
            padding: 15px;
            display: none;
        }
        .accordion.active .accordion-content {
            display: block;
        }
    </style>
</head>
<body>

<div class="accordion">
    <div class="accordion-header" onclick="toggleAccordion(1)">Pestaña 1</div>
    <div class="accordion-content">
        <p>Contenido de la Pestaña 1. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </div>
</div>

<div class="accordion">
    <div class="accordion-header" onclick="toggleAccordion(2)">Pestaña 2</div>
    <div class="accordion-content">
        <p>Contenido de la Pestaña 2. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>
</div>

<script>
    function toggleAccordion(id) {
        var accordion = document.getElementsByClassName('accordion')[id - 1];
        accordion.classList.toggle('active');
    }
</script>

</body>
</html>
