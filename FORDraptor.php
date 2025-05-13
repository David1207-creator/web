<?php
    $modelo = "Ford F-150 Raptor";
    $descripcion = "La Ford F-150 Raptor es una camioneta todoterreno de alto rendimiento con una combinación perfecta de potencia, tecnología y diseño agresivo. Ideal para aventuras extremas y conducción en cualquier tipo de terreno.";
    $precio = "Precio: $76,000 - $85,000 USD";
    $imagen = "Raptor.png";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $modelo; ?></title>
    <link rel="stylesheet" href="Raptor.css">
    <script defer src="Raptor.js"></script>
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
