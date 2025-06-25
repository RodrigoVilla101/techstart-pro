<?php
// Inicia la sesión. Esto es crucial para poder acceder y manipular las variables de sesión.
session_start();

// Paso 1: Destruir todas las variables de sesión.
// Esto elimina todos los datos de sesión almacenados para el usuario actual.
$_SESSION = array();

// Paso 2: Si se desea destruir la sesión completamente, también se debe borrar la cookie de sesión.
// Esto es importante porque la cookie de sesión es lo que el navegador usa para identificar la sesión.
// Nota: ¡Esto destruirá la sesión, y no solo los datos de sesión!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params(); // Obtiene los parámetros actuales de la cookie de sesión
    setcookie(session_name(), '', time() - 42000, // Establece la cookie de sesión a una fecha pasada para que expire
        $params["path"], // Mantiene la ruta de la cookie
        $params["domain"], // Mantiene el dominio de la cookie
        $params["secure"], // Mantiene el indicador seguro de la cookie (si se usa HTTPS)
        $params["httponly"] // Mantiene el indicador httponly de la cookie (para protección contra XSS)
    );
}

// Paso 3: Finalmente, destruir la sesión.
// Esto elimina el archivo de sesión del servidor.
session_destroy();

// Paso 4: Redirigir al usuario a la página de inicio de sesión de administración (admin.html).
// Es importante usar exit() después de una redirección para asegurar que no se ejecute más código.
header("Location: admin.html");
exit();
?>