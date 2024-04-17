<?php
$servername = "localhost";
$username = "root"; // reemplaza esto con tu nombre de usuario de la base de datos
$password = ""; // reemplaza esto con tu contraseña de la base de datos
$dbname = "pagina";

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Recibir los datos del producto desde la petición POST
$nombre = $_POST['nombre'];
$imagen = $_POST['imagen'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];

// Preparar la consulta SQL para insertar el producto en la base de datos
$sql = "INSERT INTO carrito (nombre, imagen, precio, cantidad) VALUES ('$nombre', '$imagen', '$precio', '$cantidad')";

// Ejecutar la consulta SQL
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Cerrar la conexión
$conn->close();
?>
