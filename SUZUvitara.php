<?php
    $modelo = "Suzuki Vitara";
    $descripcion = "El Suzuki Vitara es un SUV compacto con un diseño moderno y un excelente desempeño. Ofrece tecnología avanzada, eficiencia en el consumo de combustible y una conducción cómoda en cualquier terreno.";
    $precio = "Precio: $20,000 - $25,000 USD";
    $imagen = "Vitara.png";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $modelo; ?></title>
    <link rel="stylesheet" href="vitara.css">
    <script defer src="vitara.js"></script>
</head>
<body>
    <header>
        <h1 class="futuristic-title"><?php echo $modelo; ?></h1>
        <button class="back-button" onclick="window.location.href='suzuki.php'">Volver a Suzuki</button>
    </header>

    <section id="descripcion" class="futuristic-box">
        <p class="animated-text"><?php echo $descripcion; ?></p>
        <p class="price"><?php echo $precio; ?></p>
    </section>

    <section id="imagen">
        <h2 class="futuristic-subtitle">Imagen del Modelo</h2>
        <img src="<?php echo $imagen; ?>" alt="<?php echo $modelo; ?>" class="car-image">
    </section>
</body>
</html>
