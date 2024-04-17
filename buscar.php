<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultados de la búsqueda</title>
</head>
<body>
    <h2>Resultados de la búsqueda:</h2>

    <?php
    // Obtener la consulta de búsqueda del parámetro 'q' en la URL
    $consulta = $_GET['q'];

    // Aquí deberías implementar la lógica para buscar productos en tu base de datos
    // y mostrar los resultados. Este es solo un ejemplo básico:
    echo "Mostrando resultados para: " . $consulta;
    ?>

    <!-- Aquí puedes mostrar los resultados de la búsqueda -->
</body>
</html>
