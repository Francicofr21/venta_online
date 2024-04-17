<?php
session_start();
// Verificar si se han enviado datos del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aquí debes incluir la lógica para validar los datos del formulario y realizar el inicio de sesión

    // Suponiendo que tienes una conexión a la base de datos en $conn
    include 'conexion.php'; // Asegúrate de incluir tu archivo de conexión

    // Obtener los datos del formulario
    $correo = $_POST['correo'];
    $contrasenia = $_POST['contrasenia'];

    // Buscar el usuario en la base de datos
    $sql = "SELECT * FROM users WHERE correo = '$correo'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // Usuario encontrado, verificar la contraseña
        $row = $result->fetch_assoc();
        $hashed_contrasenia = $row['contrasenia'];
        
        if (password_verify($contrasenia, $hashed_contrasenia)) {
            // Inicio de sesión exitoso, redirigir a otra página
            $_SESSION['user_id'] = $row['id']; 
            header("Location: ../home.php");
            exit(); // Es importante salir del script después de la redirección
        } else {
            // Contraseña incorrecta, enviar alerta en JavaScript
            echo "<script>alert('Inicio de sesión fallido. Por favor, verifica tus credenciales.');</script>";
        }
    } else {
        // Usuario no encontrado, enviar alerta en JavaScript
        echo "<script>alert('Usuario no encontrado. Por favor, verifica tus credenciales.');</script>";
    }

    // Cerrar la conexión
    $conn->close();
}
?>