<?php
session_start(); // Iniciar sesión si no está iniciada

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['accion'])) {
    // Verificar si el usuario está autenticado
    if (!isset($_SESSION['user_id'])) {
        echo json_encode(array("success" => false, "error" => "Usuario no autenticado."));
        exit;
    }

    // Obtener el ID del usuario desde la sesión
    $user_id = $_SESSION['user_id'];

    // Obtener el ID del producto y la acción desde la solicitud POST
    $id = $_POST['id'];
    $accion = $_POST['accion'];

    // Incluir el archivo de conexión
    include 'conexion.php'; // Asegúrate de incluir tu archivo de conexión

    // Verificar la acción solicitada
    if ($accion == "editar") {
        // Obtener la nueva cantidad del producto desde la solicitud POST
        $cantidad = $_POST['cantidad'];

        // Actualizar la cantidad del producto en el carrito
        $sql = "UPDATE carrito SET cantidad = $cantidad WHERE usuario_id = $user_id AND id = $id";
    } elseif ($accion == "eliminar") {
        // Eliminar el producto del carrito
        $sql = "DELETE FROM carrito WHERE usuario_id = $user_id AND id = $id";
    } else {
        echo json_encode(array("success" => false, "error" => "Acción no válida."));
        exit;
    }

    // Ejecutar la consulta
    if ($conn->query($sql) === TRUE) {
        echo json_encode(array("success" => true));
    } else {
        echo json_encode(array("success" => false, "error" => $conn->error));
    }

    // Cerrar la conexión
    $conn->close();
} else {
    echo json_encode(array("success" => false, "error" => "Solicitud no válida."));
}
?>