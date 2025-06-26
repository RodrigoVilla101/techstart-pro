<?php
session_start();
header('Content-Type: application/json');

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
    $id = isset($_POST['id']) ? (int)$_POST['id'] : 0;
    $titulo = trim($_POST['titulo']);
    $categoria = trim($_POST['categoria']);
    $descripcion = trim($_POST['descripcion']);
    $imagen_url = trim($_POST['imagen_url']);
    $fecha = trim($_POST['fecha']);
    $enlace_url = trim($_POST['enlace_url']);

    if ($id <= 0 || empty($titulo) || empty($categoria) || empty($descripcion) || empty($imagen_url) || empty($fecha) || empty($enlace_url)) {
        $response['message'] = "Todos los campos son obligatorios.";
        echo json_encode($response);
        exit();
    }

    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        $response['message'] = "Error de conexión a la base de datos.";
        echo json_encode($response);
        exit();
    }

    $stmt = $conn->prepare("UPDATE blogs SET titulo = ?, categoria = ?, descripcion = ?, imagen_url = ?, fecha = ?, enlace_url = ? WHERE id = ?");
    if ($stmt === false) {
        error_log("Error al preparar la consulta UPDATE: " . $conn->error);
        $response['message'] = "Error interno del servidor.";
        echo json_encode($response);
        exit();
    }

    $stmt->bind_param("ssssssi", $titulo, $categoria, $descripcion, $imagen_url, $fecha, $enlace_url, $id);

    if ($stmt->execute()) {
        $response['success'] = true;
        $response['message'] = "Artículo actualizado con éxito.";
    } else {
        error_log("Error al ejecutar UPDATE: " . $stmt->error);
        $response['message'] = "Error al actualizar el artículo: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    $response['message'] = "Método de solicitud no permitido.";
}

echo json_encode($response);
?>