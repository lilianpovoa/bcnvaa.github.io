<?php
$dir = __DIR__; // carpeta actual
$files = array_diff(scandir($dir), array('.', '..')); // lista todos los archivos, excluye '.' y '..'
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Documentos - Barcelona VAA</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 40px;
            background-color: #f9f9f9;
        }
        h1 {
            color: #2c3e50;
        }
        ul {
            list-style-type: none;
            padding: 0;
        }
        li {
            margin: 10px 0;
        }
        a {
            text-decoration: none;
            color: #2980b9;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <h1>Documentos disponibles</h1>
    <p>Haz clic para abrir o descargar:</p>
    <ul>
        <?php
        foreach ($files as $file) {
            // Solo mostrar archivos (ignorar carpetas)
            if (is_file($file)) {
                echo '<li><a href="' . htmlspecialchars($file) . '" target="_blank">' . htmlspecialchars($file) . '</a></li>';
            }
        }
        ?>
    </ul>
</body>
</html>
