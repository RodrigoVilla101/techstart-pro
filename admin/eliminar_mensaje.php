<?php
session_start();
header('Content-Type: application/json'); // La respuesta será JSON

// Configuración de la base de datos (puedes considerar mover esto a un archivo de configuración para DRY)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techstart_db";

$response = ['success' => false, 'message' => ''];

// Verificar que la solicitud es POST y que el administrador está logueado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (!isset($_SESSION['admin_logged']) || $_SESSION['admin_logged'] !== true) {
        $response['message'] = "Acceso no autorizado. Por favor, inicia sesión.";
        echo json_encode($response);
        exit();
    }

    // Verificar si se recibió el ID del mensaje
    if (!isset($_POST['id']) || !is_numeric($_POST['id'])) {
        $response['message'] = "ID de mensaje no válido.";
        echo json_encode($response);
        exit();
    }

    $message_id = (int)$_POST['id']; // Convertir a entero para seguridad

    // Crear conexión a la base de datos
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Verificar conexión
    if ($conn->connect_error) {
        error_log("Error de conexión a la base de datos en eliminar_mensaje: " . $conn->connect_error);
        $response['message'] = "Error interno del servidor al conectar con la base de datos.";
        echo json_encode($response);
        exit();
    }

    // Preparar la consulta SQL para eliminar el mensaje
    $stmt = $conn->prepare("DELETE FROM contactos WHERE id = ?");

    if ($stmt === false) {
        error_log("Error al preparar la consulta DELETE: " . $conn->error);
        $response['message'] = "Error interno del servidor al preparar la eliminación.";
        echo json_encode($response);
        exit();
    }

    // Vincular el ID del mensaje y ejecutar la consulta
    $stmt->bind_param("i", $message_id);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            $response['success'] = true;
            $response['message'] = "Mensaje eliminado correctamente.";
        } else {
            $response['message'] = "No se encontró el mensaje con el ID proporcionado o ya fue eliminado.";
        }
    } else {
        error_log("Error al ejecutar la eliminación: " . $stmt->error);
        $response['message'] = "Hubo un error al intentar eliminar el mensaje de la base de datos.";
    }

    // Cerrar la sentencia y la conexión
    $stmt->close();
    $conn->close();

} else {
    // Si no es una solicitud POST
    $response['message'] = "Método de solicitud no permitido.";
}

echo json_encode($response); // Enviar la respuesta JSON
?>