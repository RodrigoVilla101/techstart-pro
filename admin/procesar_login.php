<?php
header('Content-Type: application/json');

// Configuración de la base de datos
$servername = "localhost";
$username = "root"; 
$password = ""; 
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
    $usuario = isset($_POST['usuario']) ? htmlspecialchars(trim($_POST['usuario'])) : '';
    $password = isset($_POST['password']) ? trim($_POST['password']) : '';
    
    // Validación de campos requeridos
    if (empty($usuario) || empty($password)) {
        $response['message'] = "Por favor, ingresa tanto el usuario como la contraseña.";
        echo json_encode($response);
        exit();
    }

    // Consulta preparada para mayor seguridad
    $stmt = $conn->prepare("SELECT id, usuario, password FROM administradores WHERE usuario = ?");
    
    if ($stmt === false) {
        error_log("Error al preparar la consulta: " . $conn->error);
        $response['message'] = "Error interno del servidor al preparar la consulta.";
        echo json_encode($response);
        exit();
    }

    // Vincular parámetros y ejecutar
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows === 1) {
        $row = $result->fetch_assoc();
        
        // Verificar contraseña hasheada
        if (password_verify($password, $row['password'])) {
            // Iniciar sesión
            session_start();
            $_SESSION['admin_logged'] = true;
            $_SESSION['admin_id'] = $row['id'];
            $_SESSION['admin_usuario'] = $row['usuario'];
            
            $response['success'] = true;
            $response['message'] = "Inicio de sesión exitoso. Redirigiendo...";
            $response['redirect'] = "panel_admin.php"; // Página a redirigir
        } else {
            $response['message'] = "Credenciales incorrectas. Por favor verifica tus datos.";
        }
    } else {
        $response['message'] = "Usuario no encontrado.";
    }

    // Cerrar la sentencia preparada
    $stmt->close();
} else {
    // Si la solicitud no es POST
    $response['message'] = "Método de solicitud no permitido.";
}

// Cerrar la conexión a la base de datos
$conn->close();

echo json_encode($response);
?>