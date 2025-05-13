<?php
    $modelo = "Suzuki Jimny";
    $descripcion = "El Suzuki Jimny es un todoterreno compacto con un diseño robusto y capacidades off-road excepcionales. Ideal para aventuras y terrenos difíciles, combina durabilidad y estilo en un solo vehículo.";
    $precio = "Precio: $22,000 - $27,000 USD";
    $imagen = "Jimny.png";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $modelo; ?></title>
    <link rel="stylesheet" href="jimny.css">
    <script defer src="jimny.js"></script>
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
