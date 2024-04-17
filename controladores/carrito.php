<?php
session_start(); // Iniciar sesión si no está iniciada

if (isset($_SESSION['user_id'])) {
    $user_id = $_SESSION['user_id'];
    
    // Incluir el archivo de conexión
    include 'conexion.php'; // Asegúrate de incluir tu archivo de conexión
    
    // Consulta para obtener los detalles del carrito del usuario
    $sql = "SELECT carrito.id, carrito.producto_id, productos.nombre, productos.precio, carrito.cantidad 
            FROM carrito 
            INNER JOIN productos ON carrito.producto_id = productos.id 
            WHERE carrito.usuario_id = '$user_id'";
    
    $result = $conn->query($sql);
    
    if ($result->num_rows > 0) {
        // Array para almacenar los productos del carrito
        $carrito = array();
        
        while ($row = $result->fetch_assoc()) {
            // Calcular el precio total del producto según la cantidad en el carrito
            $precio_total = $row['precio'] * $row['cantidad'];
            
            // Agregar detalles del producto al array del carrito
            $carrito[] = array(
                'id' => $row['id'],
                'nombre' => $row['nombre'],
                'precio' => $row['precio'],
                'cantidad' => $row['cantidad'],
                'precio_total' => $precio_total
            );
        }
        
        // Enviar el carrito como respuesta en formato JSON
        echo json_encode(array("success" => true, "carrito" => $carrito));
    } else {
        // Si el carrito está vacío, responder con un JSON indicando que no hay productos en el carrito
        echo json_encode(array("success" => true, "message" => "El carrito está vacío."));
    }
    
    // Cerrar la conexión
    $conn->close();
} else {
    // Si el usuario no ha iniciado sesión, responder con un JSON indicando el error
    echo json_encode(array("success" => false, "error" => "Usuario no autenticado."));
}

?>