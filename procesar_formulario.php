<?php
header('Content-Type: application/json'); // Indica que la respuesta será JSON

// Configuración de la base de datos
$servername = "localhost";
$username = "tu_usuario_mysql"; // <-- CAMBIA ESTO
$password = "tu_contraseña_mysql"; // <-- CAMBIA ESTO
$dbname = "techstart_db";

// Inicializar la respuesta
$response = ['success' => false, 'message' => ''];

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    error_log("Error de conexión a la base de datos: " . $conn->connect_error);
    $response['message'] = "Error interno del servidor al conectar con la base de datos.";
    echo json_encode($response);
    exit();
}

// Verificar si la solicitud es POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoger y sanear los datos del formulario
    $nombre = isset($_POST['nombre']) ? htmlspecialchars(trim($_POST['nombre'])) : '';
    $apellido = isset($_POST['apellido']) ? htmlspecialchars(trim($_POST['apellido'])) : '';
    $email = isset($_POST['email']) ? htmlspecialchars(trim($_POST['email'])) : '';
    $telefono = isset($_POST['telefono']) ? htmlspecialchars(trim($_POST['telefono'])) : '';
    $mensaje = isset($_POST['mensaje']) ? htmlspecialchars(trim($_POST['mensaje'])) : '';

    // Validación de los campos requeridos
    if (empty($nombre) || empty($apellido) || empty($email) || empty($mensaje)) {
        $response['message'] = "Por favor, completa todos los campos requeridos.";
        echo json_encode($response);
        exit();
    }

    // Validación de formato de email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $response['message'] = "Por favor, ingresa una dirección de correo electrónico válida.";
        echo json_encode($response);
        exit();
    }

    // Preparar la consulta SQL
    $stmt = $conn->prepare("INSERT INTO contactos (primer_nombre, apellido, direccion_correo, numero_telefono, mensaje) VALUES (?, ?, ?, ?, ?)");

    if ($stmt === false) {
        error_log("Error al preparar la consulta: " . $conn->error);
        $response['message'] = "Error interno del servidor al preparar la inserción.";
        echo json_encode($response);
        exit();
    }

    // Vincular parámetros
    $stmt->bind_param("sssss", $nombre, $apellido, $email, $telefono, $mensaje);

    // Ejecutar la consulta
    if ($stmt->execute()) {
        $response['success'] = true;
        $response['message'] = "¡Mensaje enviado con éxito! Nos pondremos en contacto contigo pronto.";
    } else {
        error_log("Error al insertar datos: " . $stmt->error);
        $response['message'] = "Hubo un error al enviar tu mensaje. Por favor, inténtalo de nuevo más tarde.";
    }

    // Cerrar la sentencia preparada
    $stmt->close();
} else {
    // Si la solicitud no es POST
    $response['message'] = "Método de solicitud no permitido.";
}

// Cerrar la conexión a la base de datos
$conn->close();

echo json_encode($response); // Envía la respuesta JSON
?>