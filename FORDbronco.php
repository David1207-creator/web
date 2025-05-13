<?php
    $modelo = "Ford Bronco ";
    $descripcion = "La Ford Bronco es un SUV todoterreno icónico, diseñado para la aventura y el rendimiento en cualquier tipo de terreno. Con su diseño robusto y tecnología avanzada, es la opción perfecta para los amantes de la exploración.";
    $precio = "Precio: $34,000 - $50,000 USD";
    $imagen = "bronco.png";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $modelo; ?></title>
    <link rel="stylesheet" href="bronco.css">
    <script defer src="bronco.js"></script>
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
