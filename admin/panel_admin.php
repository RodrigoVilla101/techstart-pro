<?php
session_start();

// Configuración de la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "techstart_db";

// Verificar si el usuario ha iniciado sesión como administrador
if (!isset($_SESSION['admin_logged']) || $_SESSION['admin_logged'] !== true) {
    // Si no está logueado, redirigir al login
    header("Location: admin.html");
    exit();
}

// Inicializar arrays para almacenar datos
$mensajes = [];
$blogs = [];
$error_fetching = ''; // Usaremos una sola variable para errores de conexión

// Crear conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión y manejar el error si falla
if ($conn->connect_error) {
    error_log("Error de conexión a la base de datos en panel_admin: " . $conn->connect_error);
    $error_fetching = "Error al conectar a la base de datos. No se pudieron cargar los datos.";
} else {
    // --- LÓGICA PARA CARGAR MENSAJES DE CONTACTO ---
    // Consulta para obtener los mensajes de la tabla 'contactos'
    $sql_mensajes = "SELECT id, primer_nombre, apellido, direccion_correo, numero_telefono, mensaje, fecha_envio FROM contactos ORDER BY fecha_envio DESC";
    $result_mensajes = $conn->query($sql_mensajes);

    if ($result_mensajes) {
        if ($result_mensajes->num_rows > 0) {
            while($row_mensaje = $result_mensajes->fetch_assoc()) {
                $mensajes[] = $row_mensaje;
            }
        }
    } else {
        // En caso de error en la consulta, no en la conexión
        error_log("Error al obtener mensajes: " . $conn->error);
        $error_fetching = "Error al cargar los mensajes. Por favor, inténtalo de nuevo más tarde.";
    }

    // --- LÓGICA PARA CARGAR ARTÍCULOS DEL BLOG ---
    // Consulta para obtener los blogs
    $sql_blogs = "SELECT id, titulo, fecha FROM blogs ORDER BY fecha DESC";
    $result_blogs = $conn->query($sql_blogs);

    if ($result_blogs) {
        if ($result_blogs->num_rows > 0) {
            while($row_blog = $result_blogs->fetch_assoc()) {
                $blogs[] = $row_blog;
            }
        }
    } else {
        // En caso de error en la consulta
        error_log("Error al obtener blogs: " . $conn->error);
        // Si ya hay un error, lo concatenamos
        if (empty($error_fetching)) {
            $error_fetching = "Error al cargar los artículos del blog. Por favor, inténtalo de nuevo más tarde.";
        } else {
            $error_fetching .= " También hubo un error al cargar los artículos del blog.";
        }
    }
    
    // Al final de todas las consultas, cerrar la conexión.
    $conn->close();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administración - Mensajes de Contacto</title>
    <link rel="stylesheet" href="../assets/css/admin.css">
    <link rel="stylesheet" href="../assets/css/responsive.css">
    <link rel="stylesheet" href="../lib/bootstrap-5/css/bootstrap.min.css">
    <style>
       
        body {
            background-color: #121820;
        }
        .messages-container {
            padding: 30px;
            margin-top: 20px;
            background-color:rgb(0, 0, 0);
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        .messages-container h2 {
            margin-bottom: 30px;
            color: #FF6DBA; /* Cambiado a un color que contraste con el fondo oscuro */
            text-align: center;
            font-weight: 700;
        }
        .message-card {
            background-color: #121820;
            border: 1px solidrgb(255, 0, 157);
            border-left: 5px solid #FF6DBA; /* Destaca la tarjeta */
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 20px;
            box-shadow: 0 2px 5px #FF6DBA;
            position: relative; /* Añadido para posicionar el botón de eliminar */
        }
        .message-card p {
            margin-bottom: 8px;
            line-height: 1.6;
            color: #eee; /* Añadido para que el texto sea visible en fondo oscuro */
        }
        .message-card strong {
            color: #FF6DBA; /* Cambiado a un color que contraste y sea coherente */
            font-weight: 600;
        }
        .message-card .message-body {
            background-color: #1a202c; /* Un poco más claro para contraste */
            padding: 15px;
            border-radius: 4px;
            margin-top: 15px;
            white-space: pre-wrap; /* Permite saltos de línea en el mensaje */
            border-left: 3px solid #FF6DBA; /* Coherente con el color de borde de la tarjeta */
            color: #eee; /* Asegura que el texto sea visible */
        }
        .logout-link {
            display: block;
            margin-top: 40px;
            text-align: center;
        }
        .navbar .nav-link {
            color: #fff !important; /* Asegura que los enlaces del navbar se vean */
        }
        .navbar .nav-link:hover {
            color: #cceeff !important;
        }
        /* Nuevo estilo para el botón de eliminar (ajustado a tu esquema de color) */
        .delete-btn {
            position: absolute;
            top: 10px;
            right: 10px;
            background-color: #dc3545; /* Rojo de Bootstrap para peligro */
            color: white;
            border: none;
            padding: 5px 10px;
            border-radius: 4px;
            cursor: pointer;
            font-size: 0.8em;
            transition: background-color 0.3s ease;
        }
        .delete-btn:hover {
            background-color: #c82333; /* Rojo más oscuro al pasar el mouse */
        }
        .alert-container {
            margin-top: 20px;
            margin-bottom: 20px;
        }
        /* Estilos para las alertas de Bootstrap ajustados para tu tema oscuro */
        .alert {
            color: #000; /* Texto oscuro por defecto para alertas de Bootstrap */
        }
        .alert-success {
            background-color: #d4edda;
            border-color: #c3e6cb;
            color: #155724;
        }
        .alert-danger {
            background-color: #f8d7da;
            border-color: #f5c6cb;
            color: #721c24;
        }
        .alert-warning {
            background-color: #fff3cd;
            border-color: #ffeeba;
            color: #856404;
        }
        .alert-info {
            background-color: #d1ecf1;
            border-color: #bee5eb;
            color: #0c5460;
        }
    </style>
</head>
<body>
    <header class="d2c_navbar sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg px-0 py-0" id="d2c_main_nav">
                <a class="navbar-brand" href="../index.html"><img src="../assets/images/logo.png" class="w-100" alt="Logo"></a>
                <div class="collapse navbar-collapse js-clone-nav justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Bienvenido, <?php echo htmlspecialchars($_SESSION['admin_usuario']); ?>!</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="logout.php">Cerrar Sesión</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </header>

    <main class="container messages-container">
        <h2>Mensajes de Contacto Recibidos</h2>

        <div id="delete-message-container" class="alert-container"></div>

        <?php if (!empty($error_fetching_messages)): ?>
            <div class="alert alert-warning" role="alert">
                <?php echo $error_fetching_messages; ?>
            </div>
        <?php endif; ?>

        <?php if (empty($mensajes) && empty($error_fetching_messages)): ?>
            <div class="alert alert-info" role="alert">
                No hay mensajes para mostrar en este momento.
            </div>
        <?php endif; ?>

        <div id="messages-list">
            <?php if (!empty($mensajes)): ?>
                <?php foreach ($mensajes as $mensaje): ?>
                    <div class="message-card" id="message-<?php echo $mensaje['id']; ?>">
                        <button class="delete-btn" data-id="<?php echo $mensaje['id']; ?>">Eliminar</button>
                        <p><strong>De:</strong> <?php echo htmlspecialchars($mensaje['primer_nombre'] . ' ' . $mensaje['apellido']); ?></p>
                        <p><strong>Email:</strong> <a href="mailto:<?php echo htmlspecialchars($mensaje['direccion_correo']); ?>"><?php echo htmlspecialchars($mensaje['direccion_correo']); ?></a></p>
                        <?php if (!empty($mensaje['numero_telefono'])): ?>
                            <p><strong>Teléfono:</strong> <?php echo htmlspecialchars($mensaje['numero_telefono']); ?></p>
                        <?php endif; ?>
                        <p><strong>Enviado el:</strong> <?php echo date('d/m/Y H:i', strtotime($mensaje['fecha_envio'])); ?></p>
                        <div class="message-body">
                            <p><strong>Mensaje:</strong></p>
                            <p><?php echo nl2br(htmlspecialchars($mensaje['mensaje'])); ?></p>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php endif; ?>
        </div>

        <div class="container messages-container mt-5">
    <h2>Gestión de Artículos del Blog</h2>

    <div id="blog-message-container" class="alert-container"></div>

    <?php if (!empty($error_fetching_blogs)): ?>
        <div class="alert alert-warning" role="alert">
            <?php echo $error_fetching_blogs; ?>
        </div>
    <?php endif; ?>

    <?php if (!empty($blogs)): ?>
        <ul class="list-group">
        <?php foreach ($blogs as $blog): ?>
            <li class="list-group-item d-flex justify-content-between align-items-center" id="blog-<?php echo $blog['id']; ?>">
                <div>
                    <strong><?php echo htmlspecialchars($blog['titulo']); ?></strong>
                    <small class="text-muted ms-3"><?php echo date('d/m/Y', strtotime($blog['fecha'])); ?></small>
                </div>
                <div>
                    <button class="btn btn-primary btn-sm edit-blog-btn me-2" data-id="<?php echo $blog['id']; ?>">Editar</button>
                    <button class="btn btn-danger btn-sm delete-blog-btn" data-id="<?php echo $blog['id']; ?>">Eliminar</button>
                </div>
            </li>
        <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>

        <a href="logout.php" class="btn btn-danger logout-link">Cerrar Sesión</a>
    </main>



    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // ... (Tu código JS existente para eliminar mensajes de contacto) ...

        // --- Lógica para la gestión de blogs ---
        const blogList = document.querySelector('.list-group'); // Asume que la lista de blogs tiene la clase .list-group
        const blogMessageContainer = document.getElementById('blog-message-container');

        blogList.addEventListener('click', function(event) {
            const target = event.target;
            const blogId = target.dataset.id;

            if (target.classList.contains('edit-blog-btn')) {
                // Redirigir a una página de edición (la crearemos en el siguiente paso)
                window.location.href = 'editar_blog.php?id=' + blogId;
            } else if (target.classList.contains('delete-blog-btn')) {
                if (confirm('¿Estás seguro de que quieres eliminar este artículo del blog?')) {
                    // Lógica de eliminación AJAX para blogs (similar a la de los mensajes)
                    fetch('eliminar_blog.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                        body: 'id=' + blogId
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            document.getElementById('blog-' + blogId).remove();
                            displayBlogAlert('Artículo de blog eliminado correctamente.', 'success');
                        } else {
                            displayBlogAlert('Error al eliminar el artículo: ' + data.message, 'danger');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        displayBlogAlert('Error de conexión al intentar eliminar el artículo.', 'danger');
                    });
                }
            }
        });

        function displayBlogAlert(message, type) {
            blogMessageContainer.innerHTML = `<div class="alert alert-<span class="math-inline">\{type\} alert\-dismissible fade show" role\="alert"\></span>{message}<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button></div>`;
            setTimeout(() => {
                const alertElement = blogMessageContainer.querySelector('.alert');
                if (alertElement) {
                     const bsAlert = bootstrap.Alert.getInstance(alertElement);
                     if (bsAlert) { bsAlert.dispose(); } else { new bootstrap.Alert(alertElement).close(); }
                }
            }, 5000);
        }
    });
</script>

    <script src="../lib/bootstrap-5/js/bootstrap.bundle.min.js"></script>
    <script>
        // JavaScript para manejar la eliminación de mensajes vía AJAX
        document.addEventListener('DOMContentLoaded', function() {
            const messagesList = document.getElementById('messages-list');
            const deleteMessageContainer = document.getElementById('delete-message-container');

            messagesList.addEventListener('click', function(event) {
                // Solo reacciona a los clics en botones con la clase 'delete-btn'
                if (event.target.classList.contains('delete-btn')) {
                    const messageId = event.target.dataset.id; // Obtiene el ID del mensaje
                    
                    if (confirm('¿Estás seguro de que quieres eliminar este mensaje? Esta acción es irreversible.')) {
                        // Realizar la solicitud AJAX para eliminar el mensaje
                        fetch('eliminar_mensaje.php', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/x-www-form-urlencoded',
                            },
                            body: 'id=' + messageId // Envía el ID del mensaje como parámetro POST
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                // Eliminar la tarjeta del mensaje del DOM si la eliminación fue exitosa
                                const messageCard = document.getElementById('message-' + messageId);
                                if (messageCard) {
                                    messageCard.remove();
                                    displayAlert('Mensaje eliminado correctamente.', 'success');
                                    // Opcional: Si no quedan mensajes, mostrar el mensaje de "No hay mensajes"
                                    if (messagesList.children.length === 0) {
                                        messagesList.innerHTML = `<div class="alert alert-info" role="alert">No hay mensajes para mostrar en este momento.</div>`;
                                    }
                                }
                            } else {
                                displayAlert('Error al eliminar el mensaje: ' + data.message, 'danger');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            displayAlert('Error de conexión al intentar eliminar el mensaje.', 'danger');
                        });
                    }
                }
            });

            function displayAlert(message, type) {
                // Limpiar cualquier alerta existente
                deleteMessageContainer.innerHTML = ''; 

                const alertHtml = `
                    <div class="alert alert-${type} alert-dismissible fade show" role="alert">
                        ${message}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                `;
                deleteMessageContainer.innerHTML = alertHtml;

                // Desaparecer la alerta después de unos segundos
                setTimeout(() => {
                    const alertElement = deleteMessageContainer.querySelector('.alert');
                    if (alertElement) {
                        // Usar la función de cierre de Bootstrap para un cierre suave
                        const bsAlert = bootstrap.Alert.getInstance(alertElement);
                        if (bsAlert) {
                            bsAlert.dispose(); // Cierra y elimina el elemento
                        } else {
                            // Si la instancia no existe, crea una y luego la cierra
                            new bootstrap.Alert(alertElement).close();
                        }
                    }
                }, 5000); // 5 segundos
            }
        });
    </script>
</body>
</html>