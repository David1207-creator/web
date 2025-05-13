<?php
    $modelo = "Honda CR-V";
    $descripcion = "La Honda CR-V es una SUV de lujo que combina un diseño moderno con un rendimiento sobresaliente. Equipado con un motor eficiente, interiores espaciosos y tecnología avanzada, es ideal para quienes buscan comodidad, estilo y fiabilidad en cada viaje.";
    $precio = "Precio: $32,000 - $40,000 USD";
    $imagen = "crv.png";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $modelo; ?></title>
    <link rel="stylesheet" href="crv.css">
    <script defer src="crv.js"></script>
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
