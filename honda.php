<?php
$modelos = [
    "Civic" => "HONDAcivic.php",
    "Accord" => "HONDAaccord.php",
    "CR-V" => "HONDAcrv.php",
    "HR-V" => "HONDAhrv.php",
    "Pilot" => "HONDApilot.php"
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Honda</title>
    <link rel="stylesheet" href="honda.css">
    <script defer src="honda.js"></script>
</head>
<body>
    <header>
        <h1 class="futuristic-title">Bienvenido a Honda</h1>
        <button class="back-button" onclick="window.location.href='catalogo.php'">Volver al Catálogo</button>
    </header>

    <section id="descripcion" class="futuristic-box">
        <p class="animated-text">Honda es una empresa japonesa líder en la fabricación de automóviles y motocicletas, reconocida por su innovación, eficiencia y tecnología avanzada. Fundada en 1948, ha revolucionado el sector automotriz con modelos confiables y de alto rendimiento.</p>
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