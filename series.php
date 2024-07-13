<?php
$serie = $_GET['serie'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($serie); ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($serie); ?></h1>
    </header>
    <main>
        <div class="episodes-list">
            <h2>Episodios</h2>
            <ul>
                <li><a href="video.php?serie=<?php echo urlencode($serie); ?>&episodio=episodio1">Episodio 1</a></li>
                <li><a href="video.php?serie=<?php echo urlencode($serie); ?>&episodio=episodio2">Episodio 2</a></li>
                <li><a href="video.php?serie=<?php echo urlencode($serie); ?>&episodio=episodio3">Episodio 3</a></li>
            </ul>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Series de TV. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
