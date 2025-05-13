<?php
    $modelo = "Ford Explorer Limited";
    $descripcion = "La Ford Explorer Limited 2024 es una SUV versátil y sofisticada, equipada con tecnología avanzada, un interior lujoso y un potente motor para un rendimiento excepcional en todo tipo de terrenos.";
    $precio = "Precio: $47,000 - $55,000 USD";
    $imagen = "explorer.png";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $modelo; ?></title>
    <link rel="stylesheet" href="explorer.css">
    <script defer src="explorer.js"></script>
</head>
<body>
    <header>
        <h1 class="futuristic-title"><?php echo $modelo; ?></h1>
        <button class="back-button" onclick="window.location.href='ford.php'">Volver a Ford</button>
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
