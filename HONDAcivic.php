<?php
    $modelo = "Honda Civic";
    $descripcion = "El Honda Civic es un sedán compacto con un diseño deportivo y una experiencia de conducción dinámica. Ofrece una gran eficiencia de combustible, tecnología avanzada y un interior cómodo. Ideal para aquellos que buscan un vehículo accesible y de alto rendimiento.";
    $precio = "Precio: $22,000 - $28,000 USD";
    $imagen = "civic.avif";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $modelo; ?></title>
    <link rel="stylesheet" href="civic.css">
    <script defer src="civic.js"></script>
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
