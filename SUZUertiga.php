<?php
    $modelo = "Suzuki Ertiga";
    $descripcion = "El Suzuki Ertiga es un monovolumen espacioso y versátil, diseñado para familias y viajes largos. Con un diseño elegante y eficiente, ofrece comodidad y rendimiento en cada viaje.";
    $precio = "Precio: $18,000 - $23,000 USD";
    $imagen = "Ertiga.png";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $modelo; ?></title>
    <link rel="stylesheet" href="ertiga.css">
    <script defer src="ertiga.js"></script>
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
