<?php
    $modelo = "Honda Pilot";
    $descripcion = "La Honda Pilot es una SUV de tres filas con gran capacidad, potencia y tecnología avanzada. Diseñada para la aventura y la familia, ofrece un interior espacioso, seguridad de última generación y un motor eficiente para cualquier tipo de viaje.";
    $precio = "Precio: $38,000 - $50,000 USD";
    $imagen = "pilot.png";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $modelo; ?></title>
    <link rel="stylesheet" href="pilot.css">
    <script defer src="pilot.js"></script>
</head>
<body>
    <header>
        <h1 class="futuristic-title"><?php echo $modelo; ?></h1>
        <button class="back-button" onclick="window.location.href='honda.php'">Volver a Honda</button>
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
