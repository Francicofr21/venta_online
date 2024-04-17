<?php
// Incluir el archivo de conexión a la base de datos
require_once("conexion.php");

// Obtener los datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasenia = $_POST['contrasenia'];
    $hashed_contrasenia = password_hash($contrasenia, PASSWORD_DEFAULT); // Cifrar la contraseña
}

// Preparar la consulta SQL para insertar los datos en la tabla users
$sql = "INSERT INTO users (nombre, correo, contrasenia) VALUES ('$nombre', '$correo', '$hashed_contrasenia')";

if ($conn->query($sql) === TRUE) {
    header("Location: /pagina/index.php");
    exit();
} else {
    echo "<script>alert('Error en el registro');</script>";
}

// Cerrar la conexión
$conn->close();
?>