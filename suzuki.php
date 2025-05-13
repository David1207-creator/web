<?php
$modelos = [
    "Swift" => "SUZUswift.php",
    "Vitara" => "SUZUvitara.php",
    "Jimny" => "SUZUjimny.php",
    "Ertiga" => "SUZUertiga.php",
    "Ciaz" => "SUZUciaz.php"
];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toyota</title>
    <link rel="stylesheet" href="suzuki.css">
    <script defer src="suzuki.js"></script>
</head>
<body>
    <header>
        <h1 class="futuristic-title">Bienvenido a suzuki</h1>
        <button class="back-button" onclick="window.location.href='catalogo.php'">Volver al Catálogo</button>
    </header>

    <section id="descripcion" class="futuristic-box">
        <p class="animated-text">Suzuki es una de las compañías automotrices más importantes del mundo, conocida por su enfoque en la innovación y confiabilidad. Fundada en 1909, Suzuki ha desarrollado vehículos eficientes y versátiles que han conquistado el mercado global.</p>
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
