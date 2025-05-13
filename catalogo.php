<?php
$marcas = [
    "Suzuki" => "suzuki.php",
    "Toyota" => "toyota.php",
    "Ford" => "ford.php",
    "Honda" => "honda.php"
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Autos</title>
    <link rel="stylesheet" href="catalogo.css">
    <script defer src="catalogo.js"></script>
</head>
<body>
    <header class="futuristic-header">
        <h1>🚗 Catálogo de Autos</h1>
        <button class="futuristic-button" onclick="window.location.href='../primera.php'">🏠 Volver a Página Principal</button>
    </header>

    <section id="menuMarcas" class="futuristic-menu">
        <h2>Elige tu Marca</h2>
        <ul>
            <?php foreach ($marcas as $marca => $pagina): ?>
                <li><a href="<?php echo $pagina; ?>" class="futuristic-link"><?php echo $marca; ?></a></li>
            <?php endforeach; ?>
        </ul>
    </section>
</body>
</html>
