<?php
$modelos = [
    "Mustang" => "FORDmustang.php",
    "F-150" => "FORDraptor.php",
    "Explorer" => "FORDexplorer.php",
    "Bronco" => "FORDbronco.php",
    "Focus" => "FORDfocus.php"
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ford</title>
    <link rel="stylesheet" href="ford.css">
    <script defer src="ford.js"></script>
</head>
<body>
    <header>
        <h1 class="futuristic-title">Bienvenido a Ford</h1>
        <button class="back-button" onclick="window.location.href='catalogo.php'">Volver al Catálogo</button>
    </header>

    <section id="descripcion" class="futuristic-box">
        <p class="animated-text">Ford, una de las marcas automotrices más icónicas de la historia, ha liderado la industria con tecnología innovadora y modelos potentes desde su fundación en 1903.</p>
    </section>

    <section id="modelos">
        <h2 class="futuristic-subtitle">Modelos Disponibles</h2>
        <div class="car-grid">
            <?php foreach ($modelos as $modelo => $pagina): ?>
                <div class="car-box futuristic-box" onclick="window.location.href='<?php echo $pagina; ?>'">
                    <p><?php echo $modelo; ?></p>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>
