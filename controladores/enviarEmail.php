<?php
session_start();

// Incluir el archivo de conexión
include 'conexion.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si el usuario está autenticado
    if(isset($_SESSION['user_id'])) {
        // Obtener los datos del carrito del formulario
        $tablaHTML = $_POST['tablaHTML'];
        $total = $_POST['total'];

        // Obtener el correo electrónico del usuario desde la base de datos utilizando el $_SESSION['USUARIO_ID']
        $usuario_id = $_SESSION['user_id'];

        // Consulta SQL para obtener el correo electrónico del usuario
        $sql = "SELECT correo FROM users WHERE id = $usuario_id";
        $result = $conn->query($sql);
        

        $sql = "INSERT INTO compras (usuario_id, producto_id, cantidad) SELECT usuario_id, producto_id, cantidad FROM carrito WHERE usuario_id = $usuario_id";
        // Ejecutar la consulta
        $conn->query($sql);

        $sql = "DELETE FROM carrito WHERE usuario_id = $usuario_id";
        // Ejecutar la consulta
        $conn->query($sql);
        
        if ($result->num_rows > 0) {
            // Obtener el correo electrónico del resultado de la consulta
            $row = $result->fetch_assoc();
            $destinatario = $row['correo'];

            // Asunto del correo electrónico
            $asunto = 'Detalles del Carrito de Compras';

            // Cabeceras adicionales
            $cabeceras = "MIME-Version: 1.0" . "\r\n";
            $cabeceras .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $cabeceras .= "rolyquinapallo21@gmail.com" . "\r\n"; // Cambia esto por tu dirección de correo electrónico

            // Contenido del correo electrónico
            $mensaje = "<h2>Detalles del Carrito de Compras</h2><br>" . $tablaHTML . "<br><br><h3>Total a pagar: $" . $total . "</h3>";

            // Envía el correo electrónico
            if (mail($destinatario, $asunto, $mensaje, $cabeceras)) {
                echo 'Correo enviado correctamente';
            } else {
                echo 'Error al enviar el correo';
            }
        } else {
            echo "No se encontró ningún usuario con ID: $usuario_id";
        }
    } else {
        echo 'Usuario no autenticado';
    }
} else {
    echo 'Solicitud no válida';
}
?>