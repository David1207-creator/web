<?php
    $modelo = "Ford Focus 2024";
    $descripcion = "El Ford Focus 2024 es un sedán compacto con un diseño elegante y tecnología avanzada. Ofrece un rendimiento eficiente y una experiencia de conducción cómoda y segura.";
    $precio = "Precio: $22,000 - $27,000 USD";
    $imagen = "focus.png";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $modelo; ?></title>
    <link rel="stylesheet" href="focus.css">
    <script defer src="focus.js"></script>
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
