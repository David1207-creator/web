<?php
    $modelo = "Suzuki Ciaz";
    $descripcion = "El Suzuki Ciaz es un sedán elegante y eficiente, diseñado para ofrecer comodidad y tecnología avanzada. Con un amplio interior y un diseño aerodinámico, es una excelente opción para quienes buscan un auto confiable y sofisticado.";
    $precio = "Precio: $17,000 - $22,000 USD";
    $imagen = "Ciaz.png";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $modelo; ?></title>
    <link rel="stylesheet" href="ciaz.css">
    <script defer src="ciaz.js"></script>
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
