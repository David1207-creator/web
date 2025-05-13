<?php
include 'conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Catálogo de Autos</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #000000;
            text-align: center;
            color: #333;
        }

        header {
            background: linear-gradient(135deg, #ff0000, #cc0000);
            color: white;
            padding: 20px 0;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
        }

        .logo {
            font-size: 1.5em;
            font-weight: bold;
        }

        nav ul {
            list-style: none;
            padding: 0;
            display: flex;
            gap: 20px;
        }

        nav ul li {
            display: inline;
        }

        nav ul li a {
            text-decoration: none;
            color: white;
            font-size: 1.2em;
            transition: color 0.3s;
            padding: 10px 15px;
            border-radius: 5px;
        }

        nav ul li a:hover {
            color: #ffd700;
            background-color: rgba(255, 255, 255, 0.2);
        }

        .hero {
            padding: 80px 20px;
            color: white;
        }

        .hero h1 {
            font-size: 2.5em;
            text-transform: uppercase;
            background: linear-gradient(90deg, #ff0000, #cc0000, #ffcc00);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            animation: glow 1.5s infinite alternate;
        }

        @keyframes glow {
            from { text-shadow: 0 0 5px #ff0000; }
            to { text-shadow: 0 0 20px #ffcc00; }
        }

        .catalogo {
            padding: 40px;
            color: white;
        }

        table {
            width: 90%;
            margin: 0 auto;
            border-collapse: collapse;
            background-color: #111;
            color: #fff;
            box-shadow: 0 0 15px rgba(255, 0, 0, 0.5);
            border-radius: 10px;
            overflow: hidden;
        }

        th, td {
            padding: 15px;
            border-bottom: 1px solid #333;
            text-align: center;
        }

        th {
            background-color: #cc0000;
            color: white;
        }

        tr:nth-child(even) {
            background-color: #1a1a1a;
        }

        tr:hover {
            background-color: #ff0000;
            color: white;
        }

        footer {
            margin-top: 40px;
            padding: 15px;
            background: #252525;
            color: white;
            font-size: 1em;
            text-align: center;
        }
    </style>
</head>
<body>

<header>
    <div class="logo">AutoFutur</div>
    <nav>
        <ul class="nav-primary">
            <li><a class="nav-link" href="primera.php">Inicio</a></li>
            <li><a class="nav-link" href="autos/catalogo.php">Catálogo</a></li>
            <li><a class="nav-link" href="autos/contacto.php">Contacto</a></li>
        </ul>
    </nav>
</header>

<section class="hero">
    <h1>Base de datos de los autos</h1>
</section>

<section class="catalogo">
    <table>
        <tr>
            <th>ID</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Precio</th>
        </tr>

        <?php
        $sql = "SELECT * FROM descripcion";
        $result = $conn->query($sql);

        while($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['marca']."</td>";
            echo "<td>".$row['modelo']."</td>";
            echo "<td>".$row['precio']."</td>";
            echo "</tr>";
        }

        $conn->close();
        ?>
    </table>
</section>

<footer>
    &copy; 2025 Dos Amigos Auto Sales. Todos los derechos reservados.
</footer>

</body>
</html>
