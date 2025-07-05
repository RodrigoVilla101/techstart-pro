


# TechStart Pro - README Mejorado
- **Link de la pagina TechStart-Pro**: [](https://techstart-pro.infinityfreeapp.com/)
## 🚀 TechStart Pro

Una plataforma web completa de servicios tecnológicos desarrollada como proyecto académico para la Universidad Tecnológica de Aguascalientes. TechStart Pro combina una interfaz pública para mostrar servicios tecnológicos con un sistema administrativo robusto para la gestión de contenido.

## ✨ Características Principales

### Interfaz Pública
- **Página de inicio moderna**: Diseño responsive con secciones de servicios, equipo y portafolio
- **Sistema de blog dinámico**: Visualización de artículos con integración a base de datos [1](#0-0) 
- **Formulario de contacto**: Procesamiento seguro de mensajes con validación [2](#0-1) 
- **Chatbot integrado**: Asistente virtual para atención al cliente [3](#0-2) 

### Panel Administrativo
- **Sistema de autenticación**: Login seguro con sesiones PHP [4](#0-3) 
- **Gestión de contenido**: CRUD completo para artículos de blog [5](#0-4) 
- **Administración de mensajes**: Visualización y gestión de contactos [6](#0-5) 

## 🛠️ Tecnologías Utilizadas

### Backend
- **PHP**: Lógica del servidor y procesamiento de formularios
- **MySQL**: Base de datos relacional (techstart_db) [7](#0-6) 
- **MySQLi**: Extensión PHP para conectividad con MySQL

### Frontend
- **HTML5 & CSS3**: Estructura y estilos modernos
- **JavaScript**: Interactividad y funcionalidades dinámicas [8](#0-7) 
- **Bootstrap 5**: Framework CSS para diseño responsive [9](#0-8) 
- **jQuery 3.6.0**: Manipulación del DOM y AJAX
- **Slick Carousel**: Carrusel de imágenes interactivo
- **Fancybox**: Galerías de imágenes elegantes

### Librerías y Recursos
- **Font Awesome**: Iconografía profesional
- **Google Fonts**: Tipografías Sora y Syne
- **Librerías externas**: Organizadas en `/lib/` [10](#0-9) 

## 📁 Estructura del Proyecto

```
TechStart Pro/
├── 📄 index.php                    # Página principal
├── 📄 procesar_formulario.php      # Procesador de formulario de contacto
├── 📁 admin/                       # Sistema administrativo
│   ├── 📄 admin.html              # Página de login
│   ├── 📄 panel_admin.php         # Dashboard administrativo
│   ├── 📄 procesar_login.php      # Procesador de autenticación
│   ├── 📄 procesar_blog.php       # Gestor de artículos
│   └── 📄 logout.php              # Cierre de sesión
├── 📁 assets/                      # Recursos del frontend
│   ├── 📁 css/                    # Hojas de estilo
│   ├── 📁 js/                     # Scripts JavaScript
│   └── 📁 images/                 # Imágenes y gráficos
└── 📁 lib/                        # Librerías externas
    ├── 📁 bootstrap-5/            # Framework Bootstrap
    └── 📁 slick-1.8.1/            # Biblioteca Slick
```

## 🗄️ Esquema de Base de Datos

La aplicación utiliza una base de datos MySQL llamada `techstart_db` con las siguientes tablas:

### Tabla `contactos`
Almacena los mensajes del formulario de contacto [11](#0-10) 

### Tabla `blogs`
Gestiona los artículos del blog [12](#0-11) 

### Tabla `administradores`
Maneja las credenciales administrativas [13](#0-12) 

## ⚙️ Instalación y Configuración

### Requisitos Previos
- Servidor web con PHP 7.4+
- MySQL 5.7+
- Navegador web moderno

### Pasos de Instalación

1. **Clona el repositorio**
   ```bash
   git clone https://github.com/RodrigoVilla101/techstart-pro.git
   cd techstart-pro
   ```

2. **Configura la base de datos**
   - Crea una base de datos llamada `techstart_db`
   - Configura las credenciales en los archivos PHP:
     - Servidor: `localhost`
     - Usuario: `root`
     - Contraseña: (vacía)
     - Base de datos: `techstart_db`

3. **Configura el servidor web**
   - Apunta el documento raíz a la carpeta del proyecto
   - Asegúrate de que PHP y MySQL estén funcionando

4. **Accede a la aplicación**
   - Sitio público: `http://localhost/techstart-pro/`
   - Panel admin: `http://localhost/techstart-pro/admin/admin.html`

## 🔧 Desarrollo

### Flujo de Trabajo Git
El proyecto sigue el modelo **Git Flow** para un desarrollo estructurado: [14](#0-13) 

- `main`: Código estable en producción
- `develop`: Integración para próxima versión
- `feature/`: Desarrollo de nuevas funcionalidades
- `release/`: Preparación de versiones
- `hotfix/`: Correcciones urgentes

### Patrones de Seguridad
- **Declaraciones preparadas**: Prevención de inyección SQL [2](#0-1) 
- **Validación de entrada**: Sanitización con `htmlspecialchars()` [15](#0-14) 
- **Gestión de sesiones**: Autenticación segura para administradores [16](#0-15) 

## 🎯 Uso

### Para Usuarios Finales
1. Navega por los servicios tecnológicos
2. Consulta el blog para contenido actualizado
3. Utiliza el formulario de contacto para solicitudes
4. Interactúa con el chatbot para asistencia inmediata

### Para Administradores
1. Accede al panel administrativo
2. Gestiona artículos del blog (crear, editar, eliminar)
3. Revisa y administra mensajes de contacto
4. Mantén el contenido actualizado

## 📊 Arquitectura del Sistema

La aplicación sigue una arquitectura web tradicional con separación clara entre la interfaz pública y el sistema administrativo: [17](#0-16) 

## 🎓 Información Académica

**Proyecto desarrollado para:** Universidad Tecnológica de Aguascalientes  
**Propósito:** Demostración de competencias en desarrollo web full-stack  
**Año:** 2024

## 🤝 Contribución

Este es un proyecto académico, pero las sugerencias y mejoras son bienvenidas:

1. Fork el proyecto
2. Crea una rama feature (`git checkout -b feature/nueva-funcionalidad`)
3. Commit tus cambios (`git commit -m 'Añade nueva funcionalidad'`)
4. Push a la rama (`git push origin feature/nueva-funcionalidad`)
5. Abre un Pull Request

## 📞 Contacto

**Desarrollador:** Rodrigo Villa  
**GitHub:** [@RodrigoVilla101](https://github.com/RodrigoVilla101)  
**Proyecto:** [TechStart Pro](https://github.com/RodrigoVilla101/techstart-pro)

---

## Notes

Este README mejorado proporciona una visión completa y profesional del proyecto TechStart Pro. Incluye:

- **Descripción clara del propósito** y características principales
- **Documentación técnica completa** con tecnologías utilizadas
- **Instrucciones de instalación** paso a paso
- **Información sobre la arquitectura** y patrones de seguridad
- **Guías de uso** tanto para usuarios como administradores
- **Estructura organizacional** del código y flujo de trabajo
- **Información académica** y de contacto

El README está estructurado de manera que sea fácil de navegar y entender, con emojis para mejorar la legibilidad y secciones bien definidas que cubren todos los aspectos importantes del proyecto.
