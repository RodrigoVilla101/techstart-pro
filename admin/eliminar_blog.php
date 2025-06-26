<?php
session_start();
header('Content-Type: application/json');

// ... (Verificación de sesión y conexión a la base de datos, igual que en otros scripts) ...
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techstart_db";

$response = ['success' => false, 'message' => ''];

if (!isset($_SESSION['admin_logged']) || $_SESSION['admin_logged'] !== true) {
    $response['message'] = "Acceso no autorizado.";
    echo json_encode($response);
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $blog_id = isset($_POST['id']) ? (int)$_POST['id'] : 0;

    if ($blog_id <= 0) {
        $response['message'] = "ID de artículo no válido.";
        echo json_encode($response);
        exit();
    }

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        $response['message'] = "Error de conexión a la base de datos.";
        echo json_encode($response);
        exit();
    }

    $stmt = $conn->prepare("DELETE FROM blogs WHERE id = ?");
    $stmt->bind_param("i", $blog_id);

    if ($stmt->execute()) {
        if ($stmt->affected_rows > 0) {
            $response['success'] = true;
            $response['message'] = "Artículo eliminado correctamente.";
        } else {
            $response['message'] = "El artículo no fue encontrado o ya ha sido eliminado.";
        }
    } else {
        error_log("Error al eliminar el artículo: " . $stmt->error);
        $response['message'] = "Error al eliminar el artículo de la base de datos.";
    }

    $stmt->close();
    $conn->close();
} else {
    $response['message'] = "Método de solicitud no permitido.";
}

echo json_encode($response);
?>