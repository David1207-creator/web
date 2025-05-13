<?php
    $modelo = "Ford Mustang";
    $descripcion = "El Ford Mustang es un ícono del rendimiento y la potencia, combinando un diseño agresivo con tecnología de vanguardia. Equipado con motores potentes y una aerodinámica mejorada, redefine la experiencia de conducción deportiva.";
    $precio = "Precio: $30,000 - $60,000 USD";
    $imagen = "ford.avif";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $modelo; ?></title>
    <link rel="stylesheet" href="mustang.css">
    <script defer src="mustang.js"></script>
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
