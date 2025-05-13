<?php
    $modelo = "Honda Accord";
    $descripcion = "El Honda Accord es una berlina de lujo que combina elegancia, tecnología avanzada y un rendimiento excepcional. Con un diseño refinado, motor eficiente y un interior de alta gama, es la opción ideal para quienes buscan un vehículo equilibrado entre confort y potencia.";
    $precio = "Precio: $28,000 - $38,000 USD";
    $imagen = "accord.avif";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $modelo; ?></title>
    <link rel="stylesheet" href="accord.css">
    <script defer src="accord.js"></script>
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
