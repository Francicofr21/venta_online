<?php
session_start(); // Iniciar sesión si no está iniciada

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Verificar si el usuario está autenticado
    
    
    // Obtener el ID del usuario desde la sesión
    $user_id = $_SESSION['user_id'];
    
    // Obtener el ID del producto desde el formulario
    if(isset($_POST['id'])) {
        $product_id = $_POST['id'];
        
        // Incluir el archivo de conexión
        include 'conexion.php'; // Asegúrate de incluir tu archivo de conexión
        
        // Preparar la consulta para insertar los datos en la tabla carrito
        $sql = "INSERT INTO carrito (usuario_id, producto_id, cantidad)
        VALUES ('$user_id', '$product_id', 1)
        ON DUPLICATE KEY UPDATE cantidad = cantidad + 1;";
        
        // Ejecutar la consulta
        if ($conn->query($sql) === TRUE) {
            // Si la consulta se ejecuta correctamente, responder con un JSON indicando el éxito
            echo json_encode(array("success" => true));
        } else {
            // Si hay algún error en la consulta, responder con un JSON indicando el error
            echo json_encode(array("success" => false, "error" => $conn->error));
        }
        
        // Cerrar la conexión
        $conn->close();
    } else {
        // Si no se recibió el ID del producto, responder con un JSON indicando el error
        echo json_encode(array("success" => false, "error" => "ID del producto no recibido."));
    }
    
} else {
    // Si la solicitud no es de tipo POST, responder con un JSON indicando el error
    echo json_encode(array("success" => false, "error" => "Solicitud no válida."));
}
?>