<?php
    $modelo = "Suzuki Swift";
    $descripcion = "El Suzuki Swift es un hatchback compacto y deportivo, reconocido por su eficiencia, diseño moderno y gran desempeño. Es una excelente opción para quienes buscan un auto ágil y económico.";
    $precio = "Precio: $15,000 - $20,000 USD";
    $imagen = "Swifrt.jpg";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $modelo; ?></title>
    <link rel="stylesheet" href="swift.css">
    <script defer src="swift.js"></script>
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
