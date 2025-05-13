<?php
    $year = date('Y');
    $menu = [
        "Misión" => "autos/mision.php",
        "Visión" => "autos/vision.php",
        "Valores" => "autos/valores.php"
    ];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dos Amigos Auto Sales - Venta de Autos</title>
    <link rel="stylesheet" href="autos/primerar.css">
    <script src="autos/primera.js" defer></script>
</head>
<body>
    <header>
        <div class="logo">
            🚗 <span>Dos Amigos Auto Sales</span>
        </div>
        <nav>
            <ul class="nav-primary">
                <?php foreach ($menu as $nombre => $link): ?>
                    <li><a href="<?= $link; ?>" class="nav-link"><?= $nombre; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </nav>
    </header>
    
    <main>
        <section class="hero">
            <h1>Encuentra el <span class="highlight">auto de tus sueños</span></h1>
            <p>Las mejores marcas y modelos a los mejores precios. <br> Calidad garantizada.</p>
      
           <div class="video-container">
    <video width="30%" controls autoplay muted loop>
        <source src="video/Presentacion.mp4" type="video/mp4">
        Tu navegador no soporta la reproducción de video.
    </video>
     <br>
    <a href="autos/catalogo.php" class="btn futuristic-btn catalogo-btn">Ver Catálogo 🚘</a>
</div>



</section>

        <section id="info" class="info-section hidden">
            <h2 id="info-title"></h2>
            <p id="info-content"></p>
        </section>

        <section class="contact-location-section">
            <h2>¡Contáctanos!</h2>
            <div class="btn-group">
                <a href="autos/contacto.php" class="contact-location-btn futuristic-btn">📞 Contacto</a>
            </div>
        </section>
    </main>
<a href="ver_autos.php" class="btn futuristic-btn">Base de Datos 📊</a>

    <footer>
        <p>&copy; <?= $year; ?> <span>Dos Amigos Auto Sales</span>
    </footer>
</body>
</html>
