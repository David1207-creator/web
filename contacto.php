<?php
    $emails = [
        "DosAmigosAutosSales@gmail.com",
        "Moisesinoa89@gmail.com",
        "David721@gmail.com"
    ];
    
    $telefonos = [
        "809-221-3990" => "Negocio",
        "829-333-4021" => "Propietario",
        "849-351-4260" => "Propietario"
    ];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - Dos Amigos Auto Sales</title>
    <link rel="stylesheet" href="contacto.css">
    <script src="contacto.js" defer></script>

</head>
<body>
    <header>
        <h1>Contacto</h1>
        <button onclick="window.location.href='../primera.php'">Volver a Inicio</button>
    </header>
    
    <section class="contacto-container">
        <h2>Información de Contacto</h2>
        <div class="contacto-box">
            <h3>Email</h3>
            <?php foreach ($emails as $email): ?>
                <p>📧 <?php echo $email; ?></p>
            <?php endforeach; ?>
        </div>
        
        <div class="contacto-box">
            <h3>Números de Teléfono</h3>
            <?php foreach ($telefonos as $numero => $tipo): ?>
                <p>📞 <?php echo $numero; ?> (<?php echo $tipo; ?>)</p>
            <?php endforeach; ?>
        </div>
    </section>
</body>
</html>
