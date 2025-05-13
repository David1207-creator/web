<?php
    $modelo = "Honda HR-V 2025";
    $descripcion = "La Honda HR-V 2025 es una SUV compacta que combina versatilidad, eficiencia y un diseño moderno. Equipada con tecnología avanzada y un interior espacioso, es perfecta para la vida urbana y las aventuras en carretera.";
    $precio = "Precio: $25,000 - $30,000 USD";
    $imagen = "hrv.png";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $modelo; ?></title>
    <link rel="stylesheet" href="hrv.css">
    <script defer src="hrv.js"></script>
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
