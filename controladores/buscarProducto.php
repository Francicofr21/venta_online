<?php
// Incluir el archivo de conexión
include 'conexion.php';


$searchTerm = $_POST['searchTerm'];

// Realizar la búsqueda de productos en la base de datos
$sql = "SELECT nombre, precio, imagen, id FROM productos WHERE nombre LIKE '%$searchTerm%'";
$result = $conn->query($sql);

// Verificar si hay resultados y construir el arreglo de resultados
$resultados = array();
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $resultados[] = $row;
    }
}


// Devolver los resultados como JSON
echo json_encode($resultados);
$conn->close();
?>