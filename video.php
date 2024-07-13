<?php
$serie = $_GET['serie'];
$episodio = $_GET['episodio'];
$videoPath = "videos/{$serie}/{$episodio}.mp4";
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo htmlspecialchars($episodio); ?></title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1><?php echo htmlspecialchars($episodio); ?></h1>
    </header>
    <main>
        <div class="video-container">
            <video controls>
                <source src="<?php echo htmlspecialchars($videoPath); ?>" type="video/mp4">
                Tu navegador no soporta la reproducción de videos.
            </video>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Series de TV. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
