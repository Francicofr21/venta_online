<?php
// Datos de conexión a la base de datos
$servername = "localhost"; // Cambia esto si tu servidor de base de datos no está en localhost
$username = "root"; // Nombre de usuario de la base de datos (por defecto en XAMPP es "root")
$password = ""; // Contraseña de la base de datos (por defecto en XAMPP está vacía)
$database = "pagina"; // Nombre de la base de datos que quieres conectar

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Opcionalmente, puedes cerrar la conexión cuando hayas terminado con ella
// $conn->close();
?>