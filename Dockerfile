# Usa una imagen base de PHP con FPM y Alpine
FROM php:8.2-fpm-alpine

# Instalar dependencias del sistema y Nginx
RUN apk add --no-cache \
    nginx \
    supervisor \
    libzip-dev \
    libpng-dev \
    libjpeg-turbo-dev \
    freetype-dev \
    postgresql-dev \
    mysql-client \
    git \
    build-base \
    autoconf

# Instalar extensiones PHP comunes (ajusta según las necesidades de tu aplicación)
RUN docker-php-ext-install -j$(nproc) \
    zip \
    gd \
    pdo_mysql \
    mysqli \
    opcache

# Establece el directorio de trabajo
WORKDIR /var/www/html

# Copia los archivos de la aplicación
COPY . /var/www/html

# Establece los permisos adecuados para los archivos de la aplicación
RUN chown -R www-data:www-data /var/www/html \
    && find /var/www/html -type d -exec chmod 755 {} \; \
    && find /var/www/html -type f -exec chmod 644 {} \;

# --- CAMBIO IMPORTANTE AQUÍ ---
# Elimina la configuración principal de Nginx
RUN rm /etc/nginx/nginx.conf

# Copia tu archivo de configuración de Nginx COMPLETO (que ahora incluirá el bloque http)
COPY nginx.conf /etc/nginx/nginx.conf
# --- FIN DEL CAMBIO ---

# Copia la configuración de Supervisor
COPY supervisord.conf /etc/supervisord.conf

# Expone el puerto 80 para Nginx
EXPOSE 80

# Comando para iniciar Supervisor, que a su vez iniciará Nginx y PHP-FPM
CMD ["/usr/bin/supervisord", "-c", "/etc/supervisord.conf"]