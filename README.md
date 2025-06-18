techstart-pro
Plataforma web para servicios tecnológicos - Proyecto académico UTA Buenas tardes a todos.

Este es el proyecto final de la materia de Desarrollo de Software para la Universidad Tecnológica de Aguascalientes.
El proyecto consiste en una plataforma web para servicios tecnológicos, donde los usuarios pueden solicitar servicios de mantenimiento, reparación y venta de equipos tecnológicos.

El proyecto está desarrollado en PHP, MySQL, HTML, CSS y JavaScript.

El proyecto está dividido en dos partes:

Parte del cliente: donde los usuarios pueden solicitar servicios y ver el estado de sus solicitudes.
Parte del administrador: donde el administrador puede ver las solicitudes de los usuarios, cambiar el estado de las solicitudes y ver el historial de las solicitudes.
El proyecto está en su versión 1.0 y está en desarrollo.

🔁 Flujo de Trabajo Git Flow
¿Qué es Git Flow?
Git Flow es un modelo de ramificación estandarizado que organiza el desarrollo en ramas específicas para diferentes propósitos. Es ideal para proyectos con ciclos de lanzamiento predecibles como TechStart Pro.

Estructura de Ramas:

Ramas Principales:
main: Contiene el código de producción.
develop: Contiene el código de la próxima versión.
feature/: Ramas para nuevas funcionalidades.
release/: Ramas para preparaciones de lanzamiento.
hotfix/: Ramas para correcciones urgentes en producción.
Comandos Claves:
Iniciar nueva funcionalidad
git checkout -b feature/nombre-funcionalidad develop

Finalizar y fusionar funcionalidad
git checkout develop git merge --no-ff feature/nombre-funcionalidad git branch -d feature/nombre-funcionalidad

Preparar lanzamiento
git checkout -b release/vX.X.X develop

Finalizar lanzamiento
git checkout main git merge --no-ff release/vX.X.X git tag -a vX.X.X -m "Versión X.X.X" git checkout develop git merge --no-ff release/vX.X.X git branch -d release/vX.X.X

Hotfix de producción
git checkout -b hotfix/nombre-hotfix main

...realizar correcciones...
git checkout main git merge --no-ff hotfix/nombre-hotfix git tag -a vX.X.X -m "Hotfix X.X.X" git checkout develop git merge --no-ff hotfix/nombre-hotfix git branch -d hotfix/nombre-hotfix

📝 Licencia
Este proyecto está bajo la Licencia MIT. Ver el archivo LICENSE para más detalles.



