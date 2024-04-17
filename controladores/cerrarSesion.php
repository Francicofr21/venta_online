<?php
session_start(); // Iniciar la sesión si no está iniciada

// Destruir todas las variables de sesión
$_SESSION = array();

// Borrar la cookie de sesión si está presente
if (isset($_COOKIE[session_name()])) {
    setcookie(session_name(), '', time()-42000, '/');
}

// Finalmente, destruir la sesión
session_destroy();

// Redireccionar al usuario a la página de inicio de sesión o a otra página deseada
header("Location: /pagina/index.php");
exit;
?>