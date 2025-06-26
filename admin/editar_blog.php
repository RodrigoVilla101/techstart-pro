<?php
session_start();

// ... (Verificación de sesión y conexión a la base de datos, igual que en panel_admin.php) ...
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techstart_db";

if (!isset($_SESSION['admin_logged']) || $_SESSION['admin_logged'] !== true) {
    header("Location: admin.html");
    exit();
}

$blog_id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$blog_data = null;
$error_loading = '';

if ($blog_id > 0) {
    $conn = new mysqli($servername, $username, $password, $dbname);
    if ($conn->connect_error) {
        $error_loading = "Error de conexión a la base de datos.";
    } else {
        $stmt = $conn->prepare("SELECT * FROM blogs WHERE id = ?");
        $stmt->bind_param("i", $blog_id);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows === 1) {
            $blog_data = $result->fetch_assoc();
        } else {
            $error_loading = "Artículo de blog no encontrado.";
        }
        $stmt->close();
        $conn->close();
    }
} else {
    $error_loading = "ID de artículo no válido.";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Blog - Panel de Admin</title>
    <link rel="stylesheet" href="../assets/css/blog.css">
</head>
<body>
    <div class="edit-container">
        <h1 class="main-title">Editar Artículo del Blog</h1>
        <div id="form-message"></div>

        <?php if (!empty($error_loading)): ?>
            <div class="alert alert-danger"><?php echo $error_loading; ?></div>
            <div class="button-container">
                <a href="panel_admin.php" class="btn btn-secondary">Volver al Panel</a>
            </div>
        <?php elseif ($blog_data): ?>
            <form id="editBlogForm" action="procesar_blog.php" method="POST">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($blog_data['id']); ?>">
                
                <div class="form-group">
                    <label for="titulo" class="form-label">Título</label>
                    <input type="text" class="form-input" id="titulo" name="titulo" 
                           value="<?php echo htmlspecialchars($blog_data['titulo']); ?>" 
                           placeholder="Ingresa el título del artículo" required>
                </div>
                
                <div class="form-group">
                    <label for="categoria" class="form-label">Categoría</label>
                    <input type="text" class="form-input" id="categoria" name="categoria" 
                           value="<?php echo htmlspecialchars($blog_data['categoria']); ?>" 
                           placeholder="Ej: Diseño, Tecnología, Desarrollo" required>
                </div>
                
                <div class="form-group">
                    <label for="descripcion" class="form-label">Descripción</label>
                    <textarea class="form-input form-textarea" id="descripcion" name="descripcion" 
                              placeholder="Describe el contenido del artículo..." required><?php echo htmlspecialchars($blog_data['descripcion']); ?></textarea>
                </div>
                
                <div class="form-group">
                    <label for="imagen_url" class="form-label">URL de la Imagen</label>
                    <input type="text" class="form-input" id="imagen_url" name="imagen_url" 
                           value="<?php echo htmlspecialchars($blog_data['imagen_url']); ?>" 
                           placeholder="./assets/images/blog_ejemplo.jpg" required>
                    <div class="help-text">Ejemplo: ./assets/images/blog_one.jpg</div>
                </div>
                
                <div class="form-group">
                    <label for="fecha" class="form-label">Fecha</label>
                    <input type="date" class="form-input" id="fecha" name="fecha" 
                           value="<?php echo htmlspecialchars($blog_data['fecha']); ?>" required>
                </div>
                
                <div class="form-group">
                    <label for="enlace_url" class="form-label">URL del Enlace "Aprende Más"</label>
                    <input type="url" class="form-input" id="enlace_url" name="enlace_url" 
                           value="<?php echo htmlspecialchars($blog_data['enlace_url']); ?>" 
                           placeholder="https://ejemplo.com/articulo" required>
                </div>
                
                <div class="button-container">
                    <button type="submit" class="btn btn-primary">Actualizar Artículo</button>
                    <a href="panel_admin.php" class="btn btn-secondary">Cancelar y Volver</a>
                </div>
            </form>
        <?php endif; ?>
    </div>

    <script>
        document.getElementById('editBlogForm').addEventListener('submit', function(e) {
            e.preventDefault();
            const form = this;
            const formData = new FormData(form);
            const formMessage = document.getElementById('form-message');
            const submitBtn = form.querySelector('.btn-primary');
            
            // Agregar estado de carga
            form.classList.add('form-loading');
            submitBtn.disabled = true;

            fetch(form.action, {
                method: 'POST',
                body: formData
            })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    formMessage.innerHTML = '<div class="alert alert-success">✅ Artículo actualizado con éxito. Redirigiendo...</div>';
                    setTimeout(() => {
                        window.location.href = 'panel_admin.php';
                    }, 2000);
                } else {
                    formMessage.innerHTML = `<div class="alert alert-danger">❌ ${data.message}</div>`;
                    form.classList.remove('form-loading');
                    submitBtn.disabled = false;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                formMessage.innerHTML = '<div class="alert alert-danger">❌ Error de conexión al servidor.</div>';
                form.classList.remove('form-loading');
                submitBtn.disabled = false;
            });
        });

        // Efecto de escritura en tiempo real para el título
        document.getElementById('titulo').addEventListener('input', function() {
            this.style.transform = 'scale(1.02)';
            setTimeout(() => {
                this.style.transform = 'scale(1)';
            }, 150);
        });
    </script>
</body>
</html>
