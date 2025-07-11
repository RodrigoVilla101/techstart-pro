<!DOCTYPE html>
<html lang="es">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!-- título -->
    <title>Tech Start Pro</title>
    <!-- favicon -->
    <link rel="icon" id="favicon" href="./assets/images/favicon.png" type="image/gif" sizes="16x16">
    <!-- fuente -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Sora:wght@400;500;600;700;800&family=Syne:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- enlace de iconos/font awesome 5 cdn -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <!-- Enlace CSS del Slider -->
    <link rel="stylesheet" href="./lib/slick-1.8.1/slick/slick.css">
    <link rel="stylesheet" href="./lib/slick-1.8.1/slick/slick-theme.css">
    <!-- galería de imágenes fancybox -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="./lib/bootstrap-5/css/bootstrap.min.css">
    <!-- css principal -->
    <link rel="stylesheet" href="./assets/css/style.css">
    <!-- css responsive -->
    <link rel="stylesheet" href="./assets/css/responsive.css">
</head>
<body>


    <!-- cabecera inicio -->
    <header class="d2c_navbar sticky-top">
        <div class="container">
            <!-- barra de navegación -->
            <nav class="navbar navbar-expand-lg px-0 py-0" id="d2c_main_nav">
                <!-- logo -->
                <a class="navbar-brand" href="./index.php"><img src="./assets/images/logo.png" class="w-100" alt="Logo"></a>
                <!-- logo -->
                <!-- hamburguesa -->
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span><i class="fas fa-bars"></i></span>
                </button>
                <!-- hamburguesa -->
                <!-- elementos de navegación -->
                <div class="collapse navbar-collapse js-clone-nav justify-content-end">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">inicio <span class="sr-only">(actual)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#about">Acerca de</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#service">Servicios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#team">Equipo</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#portfolio">portafolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#blog">blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#testimonial">testimonios</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="#contact" class="btn d-block d-lg-none">Contáctanos</a>
                        </li>
                        
                    </ul>
                </div>
                <a href="./admin/admin.html" class="btn d-none d-lg-block">ADMINISTRACION</a>
                <!-- elementos de navegación -->
            </nav>
            <!-- barra de navegación -->
            <!-- vista para tablet y móvil -->
            <div class="collapse navbar-collapse d2c_mobile_view" id="navbarSupportedContent">
                <div class="show_width container">
                    <div class="text-right">
                        <button class="navbar-toggler d2c_cross_btn p-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span><i class="fa fa-times"></i></span>
                        </button>
                    </div>
                    
                    <div class="navbar px-0 d2c_mobile_view_body"></div>
                </div>
            </div>
            <!-- vista para tablet y móvil -->
        </div>
    </header>
    <!-- cabecera fin -->
    
    <main data-bs-spy="scroll" data-bs-target="#d2c_main_nav" class="position-relative">
        <div class="d2c_hero_bg">
            
            <!-- hero inicio -->
            <section class="d2c_hero_wrapper" id="home">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 pe-5 order-last order-lg-first">
                            <h1>Embárcate en una odisea tecnológica con <span>TechStart Pro</span></h1>
                            <p>Explora los últimos avances en tecnología con TechStart Pro. Nuestra página de destino responsive con Bootstrap está diseñada para mantenerte actualizado.</p>
                            <a href="#about" class="btn">Comenzar</a>
                        </div>
                        <div class="col-lg-6 order-first order-lg-first mb-4 mb-lg-0">
                            <div class="d2c_vector_img_wrapper">
                                <div class="d2c_shade_bg">
                                    <img src="./assets/images/hero_vector_img.png" class="img-fluid" alt="Imagen Hero">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- hero fin -->
        </div>
    
        <!-- sección acerca de inicio -->
        <section class="d2c_about_wrapper" id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 mb-4 mb-lg-0">
                        <div class="d2c_img_container position-relative me-0 me-lg-5">
                            <div class="d2c_img_wrapper">
                                <img src="./assets/images/about_one.jpg" class="img-fluid w-100 rounded-3" alt="Imagen Superior Acerca de">
                            </div>
                            <div class="d2c_img_wrapper">
                                <img src="./assets/images/about_two.jpg" class="img-fluid w-100 rounded-3" alt="Imagen Inferior Acerca de">
                            </div>
                            <img src="./assets/images/about_shade.png" alt="Imagen de Fondo Acerca de">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <h3 class="d2c_sub_title position-relative">Acerca de <span>TechStart Pro</span></h3>
                        <h2 class="d2c_title position-relative">Empoderando tu <span>Exploración Tecnológica</span></h2>
                        <p class="mb-3">En TechStart Pro, nos apasiona todo lo relacionado con la tecnología. Nuestra plataforma está diseñada para proporcionarte artículos perspicaces, opiniones de expertos y recursos para alimentar tu curiosidad e impulsar tus ambiciones tecnológicas hacia adelante. Explora los últimos avances en tecnología con TechStart Pro. Nuestra página de destino responsive con Bootstrap está diseñada para mantenerte actualizado sobre las tendencias y soluciones más avanzadas que empoderan tu viaje tecnológico desde TechStart Pro.</p>
                        <p class="d2c_last_paragraph">Aprende más sobre TechStart Pro y nuestra misión. Conoce a nuestro apasionado equipo de entusiastas e innovadores tecnológicos que están dedicados a brindarte las mejores ideas e información de la industria tecnológica.</p>
                        <a href="#contact" class="btn">Mantente Conectado</a>
                    </div>
                </div>
            </div>
        </section>
        <!-- sección acerca de fin -->
    
        <!-- sección de socios inicio -->
        <div class="d2c_partner_wrapper">
            <div class="container">
                <div class="row d2c_partner_slider">
                    <div class="col">
                        <div class="d2c_img_wrapper">
                            <img src="./assets/images/partner_one.png" alt="Imagen de Socio Uno">
                        </div>
                    </div>
                    <div class="col">
                        <div class="d2c_img_wrapper">
                            <img src="./assets/images/partner_two.png" alt="Imagen de Socio Dos">
                        </div>
                    </div>
                    <div class="col">
                        <div class="d2c_img_wrapper">
                            <img src="./assets/images/partner_three.png" alt="Imagen de Socio Tres">
                        </div>
                    </div>
                    <div class="col">
                        <div class="d2c_img_wrapper">
                            <img src="./assets/images/partner_four.png" alt="Imagen de Socio Cuatro">
                        </div>
                    </div>
                    <div class="col">
                        <div class="d2c_img_wrapper">
                            <img src="./assets/images/partner_five.png" alt="Imagen de Socio Cinco">
                        </div>
                    </div>
                    <div class="col">
                        <div class="d2c_img_wrapper">
                            <img src="./assets/images/partner_six.png" alt="Imagen de Socio Seis">
                        </div>
                    </div>
                    <div class="col">
                        <div class="d2c_img_wrapper">
                            <img src="./assets/images/partner_three.png" alt="Imagen de Socio Siete">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- sección de socios fin -->
    
        <div class="d2c_shade_bg_wrapper">
            <!-- sección de servicios inicio -->
            <section class="d2c_service_wrapper" id="service">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-xl-6 mb-4 mb-xl-0">
                            <h3 class="d2c_sub_title position-relative">Nuestros <span>Servicios</span></h3>
                            <h2 class="d2c_title position-relative">Tenemos <span>Todo</span> Lo que Necesitas...</h2>
                            <p>Descubre la gama de servicios que ofrecemos en TechStart Pro. Desde consultoría tecnológica hasta desarrollo de software, estamos aquí para brindarte soluciones expertas que satisfagan tus necesidades relacionadas con la tecnología.</p>
                            <div class="row">
                                <div class="col-md-5">
                                    <ul>
                                        <li>Consultoría Tecnológica</li>
                                        <li>Reseñas de Productos</li>
                                    </ul>
                                </div>
                                <div class="col-md-7">
                                    <ul>
                                        <li>Tendencias Tecnológicas</li>
                                        <li>Talleres de Programación</li>
                                    </ul>
                                </div>
                            </div>
                            <a href="#contact" class="btn">ponte en contacto</a>
                        </div>
                        <div class="col-xl-6">
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div class="d2c_card_wrapper">
                                        <div class="d2c_icon_wrapper">
                                            <i class="fas fa-object-ungroup"></i>
                                        </div>
                                        <h3>Diseño Web</h3>
                                        <p>Puedo crear diseños web minimalistas y modernos con las últimas tecnologías web. Puedo convertir cualquier UI.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-xl-4 mb-4 mb-lg-0">
                                    <div class="d2c_card_wrapper">
                                        <div class="d2c_icon_wrapper">
                                            <i class="fas fa-laptop-code"></i>
                                        </div>
                                        <h3>Desarrollo Web</h3>
                                        <p>Trabajé con React, Node.js AngularJS, y para crear aplicaciones web dinámicas e interactivas.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4 mb-md-0">
                                    <div class="d2c_card_wrapper d2c_service_card position-relative">
                                        <div class="d2c_icon_wrapper">
                                            <i class="fas fa-chart-bar"></i>
                                        </div>
                                        <h3>Especialista SEO</h3>
                                        <p>Puedo investigar palabras clave en tu sitio web que pueden generar tráfico saludable a tu sitio web.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mt-xl-4">
                                    <div class="d2c_card_wrapper">
                                        <div class="d2c_icon_wrapper">
                                            <i class="fas fa-calendar-check"></i>
                                        </div>
                                        <h3>Experto en Seguridad</h3>
                                        <p>Monitorea tu sitio web, previene cualquier actividad inusual que ocurra en el sitio web y crea un sistema para tu sitio web.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- sección de servicios fin -->
    
            <!-- sección de características inicio -->
            <section class="d2c_feature_wrapper">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="d2c_img_container position-relative me-0 me-lg-5">
                                <div class="d2c_img_wrapper">
                                    <img src="./assets/images/feature_uppper_img.jpg" class="img-fluid w-100 rounded-3" alt="Imagen Superior de Características">
                                </div>
                                <div class="d2c_img_wrapper">
                                    <img src="./assets/images/feature_down_img.jpg" class="img-fluid w-100 rounded-3" alt="Imagen Inferior de Características">
                                </div>
                                <img src="./assets/images/feature_bg_img.png" alt="Imagen de Fondo de Características">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <h3 class="d2c_sub_title position-relative">Nuestras <span>Características</span></h3>
                            <h2 class="d2c_title position-relative">Consulta Más Sobre Nuestro <span>Servicio y Progreso</span></h2>
                            <p class="mb-3">Las enseñanzas reales del gran explorador de la verdad porque es un placer, sino porque aquellos que no saben cómo perseguir el placer racionalmente encuentran consecuencias que son extremadamente dolorosas. Tampoco hay nadie que ame o persiga o desee obtener.</p>
                            <p>Da vida a tus ideas y comparte tu visión con elementos concretos. Te daré una explicación completa del sistema y expondré las enseñanzas reales del gran explorador de la verdad porque es un placer, sino porque aquellos que no saben cómo perseguir el placer racionalmente encuentran consecuencias que son extremadamente dolorosas. Tampoco hay nadie que ame o persiga o desee obtener el dolor por sí mismo.</p>
                        </div>
                    </div>
                </div>
            </section>
            <!-- sección de características fin -->
        </div>
    
        <div class="d2c_team_bg_wrapper">
            <!-- sección de equipo inicio -->
            <section class="d2c_team_wrapper" id="team">
                <div class="container">
                    <h3 class="d2c_sub_title text-start text-md-center position-relative">nuestro <span>Equipo</span></h3>
                    <h2 class="d2c_title text-start text-md-center position-relative">Conoce a Nuestros <span>Expertos</span></h2>
                    <div class="row d2c_team_slider">
                        <div class="col">
                            <div class="d2c_team_card">
                                <div class="d2c_img_wrapper position-relative">
                                    <img src="./assets/images/team_one.jpg" class="rounded-3 w-100 h-100" alt="Imagen de Equipo Uno">
                                </div>
                                <div class="d2c_card_body text-center">
                                    <h4>Omar Rodriguez</h4>
                                    <p class="mb-0">Oficial de TI</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d2c_team_card">
                                <div class="d2c_img_wrapper position-relative">
                                    <img src="./assets/images/sam.jpg" class="rounded-3 w-100 h-100" alt="Imagen de Equipo Uno">
                                </div>
                                <div class="d2c_card_body text-center">
                                    <h4>Luis Samano</h4>
                                    <p class="mb-0">Diseñador Gráfico</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d2c_team_card">
                                <div class="d2c_img_wrapper position-relative">
                                    <img src="./assets/images/team_three.jpg" class="rounded-3 w-100 h-100" alt="Imagen de Equipo Uno">
                                </div>
                                <div class="d2c_card_body text-center">
                                    <h4>Bryan Armando</h4>
                                    <p class="mb-0">Desarrollador Web</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="d2c_team_card">
                                <div class="d2c_img_wrapper position-relative">
                                    <img src="./assets/images/team_two.jpg" class="rounded-3 w-100 h-100" alt="Imagen de Equipo Uno">
                                </div>
                                <div class="d2c_card_body text-center">
                                    <h4>Pablo Daniel</h4>
                                    <p class="mb-0">Diseñador Gráfico</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- sección de equipo fin -->
    
            <!-- sección de portafolio inicio -->
            <section class="d2c_portfolio_wrapper" id="portfolio">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 offset-0 offset-lg-3 px-2 px-md-5">
                            <h3 class="d2c_sub_title text-start text-md-center position-relative">Nuestro <span>Portafolio</span></h3>
                            <h2 class="d2c_title text-start text-md-center position-relative">Aquí hay algunos de Nuestros <span>Diseños</span> y <span>Proyectos</span></h2>
                        </div>
                    </div>
                    <div class="d2c_grid">
                        <div class="d2c_grid_item" data-wow-duration="2s">
                            <a data-fancybox="gallery" class="fancybox" href="./assets/images/cmi.jpg"></a>
                        </div>
                        <div class="d2c_grid_item" data-wow-duration="2s">
                            <a data-fancybox="gallery" class="fancybox" href="./assets/images/portfolio_two.jpg"></a>
                        </div>
                        <div class="d2c_grid_item" data-wow-duration="2s">
                            <a data-fancybox="gallery" class="fancybox" href="./assets/images/portfolio_three.jpg"></a>
                        </div>
                        <div class="d2c_grid_item" data-wow-duration="2s">
                            <a data-fancybox="gallery" class="fancybox" href="./assets/images/portfolio_four.jpg"></a>
                        </div>
                        <div class="d2c_grid_item" data-wow-duration="2s">
                            <a data-fancybox="gallery" class="fancybox" href="./assets/images/portfolio_five.jpg"></a>
                        </div>
                        <div class="d2c_grid_item" data-wow-duration="2s">
                            <a data-fancybox="gallery" class="fancybox" href="./assets/images/portfolio_six.jpg"></a>
                        </div>
                    </div>
                </div>
            </section>
            <!-- sección de portafolio fin -->
        </div>
    
<section class="d2c_blog_wrapper" id="blog">
    <div class="container">
        <h3 class="d2c_sub_title text_start text-md-center position-relative">Nuestro <span>Blog</span></h3>
        <h2 class="d2c_title text_start text-md-center position-relative">Últimas noticias y <span>artículos</span></h2>
        <p class="text_start text-md-center">Sumérgete en nuestro blog tecnológico integral, donde compartimos artículos detallados, guías prácticas y análisis sobre las últimas tendencias tecnológicas. Mantente informado y amplía tu conocimiento tecnológico con nuestro contenido perspicaz.</p>
        <div class="row">
          
<?php
  
            // Configuración de la base de datos
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "techstart_db";
            
            // Crear conexión
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Verificar conexión
            if ($conn->connect_error) {
                // Si hay un error, muestra un mensaje de error o los blogs estáticos
                echo '<div class="col-12"><p class="text-center text-danger">Error al cargar el blog. Por favor, inténtalo de nuevo más tarde.</p></div>';
            } else {
                // Consulta para obtener los blogs (puedes limitar la cantidad si quieres, por ejemplo, LIMIT 2)
                $sql = "SELECT id, categoria, titulo, descripcion, imagen_url, fecha, enlace_url FROM blogs ORDER BY fecha DESC";
                $result = $conn->query($sql);

                if ($result && $result->num_rows > 0) {
                    while($blog = $result->fetch_assoc()) {
                        // Formatear la fecha
                        $fecha_formateada = date('j, M Y', strtotime($blog['fecha']));
                        // Muestra el código HTML para cada blog
                        echo '
                        <div class="col-lg-6 mb-4 mb-lg-0">
                            <div class="d2c_card_wrapper d2c_blog_card">
                                <img src="' . htmlspecialchars($blog['imagen_url']) . '" class="img-fluid w-100" alt="Imagen de Blog">
                                <div class="d2c_card_body">
                                    <p class="mb-2">' . htmlspecialchars($blog['categoria']) . '</p>
                                    <h4 class="mb-2"><a href="#">' . htmlspecialchars($blog['titulo']) . '</a></h4>
                                    <p class="mb-1">' . htmlspecialchars($blog['descripcion']) . '</p>
                                    <div class="d2c_date">
                                        <span>' . $fecha_formateada . '</span>
                                        <a href="#"><i class="fas fa-share-alt"></i></a>
                                    </div>
                                    <a href="' . htmlspecialchars($blog['enlace_url']) . '" target="_blank" rel="noopener noreferrer">Aprende Más <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>';
                    }
                } else {
                    echo '<div class="col-12"><p class="text-center">No hay artículos de blog disponibles en este momento.</p></div>';
                }
                $conn->close();
            }
            ?>
        </div>
    </div>
</section>
            <!-- sección de blog fin -->
    
<!-- Sección de testimonios con API dinámica -->
<section class="d2c_testimonial_wrapper" id="testimonial">
    <div class="container">
        <h3 class="d2c_sub_title text_start text-md-center position-relative">Nuestros <span>Testimonios</span></h3>
        <h2 class="d2c_title text_start text-md-center position-relative">aquí hay algunos comentarios de clientes<span></span></h2>
        
        <!-- Indicador de carga -->
        <div id="testimonials-loading" class="text-center my-5">
            <div class="spinner-border text-primary" role="status">
                <span class="visually-hidden">Cargando testimonios...</span>
            </div>
            <p class="mt-2">Cargando testimonios...</p>
        </div>

        <!-- Contenedor de testimonios -->
        <div class="row testimonial_slider" id="testimonials-container" style="display: none;">
            <!-- Los testimonios se cargarán dinámicamente aquí -->
        </div>

        <!-- Mensaje de error (oculto por defecto) -->
        <div id="testimonials-error" class="text-center my-5" style="display: none;">
            <div class="alert alert-warning" role="alert">
                <i class="fas fa-exclamation-triangle"></i>
                <strong>Error al cargar testimonios.</strong> Mostrando testimonios por defecto.
            </div>
        </div>
    </div>
</section>
        </div>
        <!-- sección de testimonios fin -->

        <!-- Sección de Contacto Actualizada -->
<section class="d2c_contact_wrapper" id="contact">
        <div class="container">
            <h3 class="d2c_sub_title position-relative">Contáct<span>anos</span></h3>
            <h2>¿Tienes alguna <span>pregunta o inquietud?</span></h2>

            <form id="formContacto" class="row needs-validation" novalidate>
                <div class="col-md-6">
                    <label for="nombre" class="form-label">Primer <span>Nombre</span></label>
                    <input type="text" class="form-control" id="nombre" name="nombre" required>
                    <div class="invalid-feedback">Por favor ingresa tu nombre.</div>
                </div>
                <div class="col-md-6">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" id="apellido" name="apellido" required>
                    <div class="invalid-feedback">Por favor ingresa tu apellido.</div>
                </div>
                <div class="col-md-6">
                    <label for="email" class="form-label">Dirección de <span>Correo</span></label>
                    <input type="email" class="form-control" id="email" name="email" required>
                    <div class="invalid-feedback">Por favor ingresa un correo válido.</div>
                </div>
                <div class="col-md-6">
                    <label for="telefono" class="form-label">Número de <span>Teléfono</span></label>
                    <input type="tel" class="form-control" id="telefono" name="telefono">
                    </div>
                <div class="col-md-12">
                    <label for="mensaje" class="form-label">Mensaje</label>
                    <textarea class="form-control" rows="5" id="mensaje" name="mensaje" required></textarea>
                    <div class="invalid-feedback">Por favor escribe tu mensaje.</div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn">Enviar Mensaje</button>
                </div>
                <div id="form-message" class="form-message mt-3"></div>
            </form>
        </div>
    </section>
        <!-- sección de contacto fin -->
    
        <!-- sección de pie de página inicio -->
        <footer class="d2c_footer_wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                        <img src="./assets/images/footer_logo.png" class="d2c_footer_logo img-fluid w-100 mb-4" alt="Logo de Pie de Página">
                        <p>Escalando profesionalmente capital humano multifuncional y tecnología extensa.</p>
                        <ul class="d2c_social_link list-group list-group-horizontal">
                            <li>
                                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class="fab fa-linkedin-in"></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg mb-5 mb-lg-0">
                        <h3><span>Enlaces Rápidos</span></h3>
                        <ul class="list-group">
                            <li class="py-1 py-md-2">
                                <a href="#service">Servicios</a>
                            </li>
                            <li class="py-1 py-md-2">
                                <a href="#team">Equipo</a>
                            </li>
                            <li class="py-1 py-md-2">
                                <a href="#portfolio">Portafolio</a>
                            </li>
                            <li class="py-1 py-md-2">
                                <a href="#blog">Nuestro Blog</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg mb-5 mb-md-0">
                        <h3><span>Compañía</span></h3>
                        <ul class="list-group">
                            <li class="py-1 py-md-2">
                                <a href="#about">Acerca de</a>
                            </li>
                            <li class="py-1 py-md-2">
                                <a href="#" target="_blank">Términos</a>
                            </li>
                            <li class="py-1 py-md-2">
                                <a href="#" target="_blank">Política de Privacidad</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <h3><span>Compañía</span></h3>
                        <ul class="d2c_company_info list-group">
                            <li class="py-1 py-md-2">
                                <a href="tel:+971 5546 963">
                                    <i class="fas fa-phone-alt"></i>
                                    449-123-4567
                                </a>
                            </li>
                            <li class="py-1 py-md-2">
                                <a href="mailto:example@gmail.com">
                                    <i class="fas fa-envelope"></i>
                                    rodrigovillalpando5@gmail.com
                                </a>
                            </li>
                            <li class="py-1 py-md-2">
                                <a href="https://www.google.com/maps/@40.0677545,-76.0434136,8z?entry=ttu" target="_blank">
                                    <i class="fas fa-map-marker-alt"></i>
                                    Flor de nochebuena 104, int 69, Aguascalientes, Mexico
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="d2c_copy_wrapper">
                    <h4 class="text-center">© 2023 <a href="#" target="_blank">DesignToCodes</a>. Todos los derechos reservados</h4>
                </div>
            </div>
        </footer>
        <!-- sección de pie de página fin -->

        <!--   Botón de Desplazamiento Inicio   -->
        <div id="scrollBtn">
            <a href="#">
                <i class="fas fa-chevron-up"></i>
            </a>
        </div>
        <!--   Botón de Desplazamiento Fin   -->

        <div class="chatbot-icon" id="chatbot-icon">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="bi bi-chat-dots" viewBox="0 0 16 16">
        <path d="M5 8a1 1 0 1 1-2 0 1 1 0 0 1 2 0m4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0m3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2"/>
        <path d="M2.165 4.316c-.07.51-.113 1.036-.134 1.563C1.83 6.906 2.027 8.514 2.5 10a1.5 1.5 0 0 0 1.5 1.5c.23.013.458.058.683.124q.17.05.342.102c.385.127.784.212 1.19.274a11.1 11.1 0 0 0 2.656 0c.406-.062.805-.147 1.19-.274q.17-.05.342-.102c.225-.066.453-.111.683-.124a1.5 1.5 0 0 0 1.5-1.5c.473-1.486.67-3.094.545-4.471-.021-.527-.064-1.053-.134-1.563a.83.83 0 0 0-.256-.445.83.83 0 0 0-.445-.256C12.87 3.5 10.5 3.5 8 3.5c-2.5 0-4.87.058-6.105.328a.83.83 0 0 0-.445.256.83.83 0 0 0-.256.445zm-1.5 4.966c0 1.15.228 2.378.784 3.476C1.996 13.552 2.977 14 4.5 14c.484 0 .964-.085 1.417-.253.18-.067.36-.14.536-.219a11.09 11.09 0 0 0 4.194 0c.176.079.356.152.536.219.453.168.933.253 1.417.253 1.523 0 2.504-.448 2.816-1.579.556-1.098.784-2.326.784-3.476 0-1.137-.206-2.273-.62-3.32-.018-.043-.036-.086-.055-.128.847.669 1.197 1.543 1.255 2.193z"/>
    </svg>
</div>

<div class="chatbot-window" id="chatbot-window">
    <div class="chatbot-header">
        <h4>Asistente Virtual TechStart</h4>
        <span class="close-btn" id="close-chatbot">&times;</span>
    </div>
    <div class="chatbot-body" id="chatbot-body">
        <div class="message bot-message">
            ¡Hola! Soy tu asistente virtual de TechStart. ¿En qué puedo ayudarte hoy?
        </div>
    </div>
    <div class="chatbot-footer">
        <input type="text" id="chatbot-input" placeholder="Escribe tu mensaje..." onkeypress="handleChatbotInput(event)">
        <button id="chatbot-send-btn">Enviar</button>
    </div>
</div>
    </main>
    

    <script>
    // Referencias a elementos del DOM
    const chatbotIcon = document.getElementById('chatbot-icon');
    const chatbotWindow = document.getElementById('chatbot-window');
    const closeChatbotBtn = document.getElementById('close-chatbot');
    const chatbotBody = document.getElementById('chatbot-body');
    const chatbotInput = document.getElementById('chatbot-input');
    const chatbotSendBtn = document.getElementById('chatbot-send-btn');

    // Función para abrir/cerrar la ventana del chatbot
    chatbotIcon.addEventListener('click', () => {
        chatbotWindow.classList.toggle('open');
        if (chatbotWindow.classList.contains('open')) {
            chatbotInput.focus(); // Enfoca el input al abrir
            scrollToBottom(); // Asegura que se vea el último mensaje
        }
    });

    closeChatbotBtn.addEventListener('click', () => {
        chatbotWindow.classList.remove('open');
    });

    // Función para agregar un mensaje al cuerpo del chat
    function addMessage(text, sender) {
        const messageDiv = document.createElement('div');
        messageDiv.classList.add('message', `${sender}-message`);
        messageDiv.textContent = text;
        chatbotBody.appendChild(messageDiv);
        scrollToBottom();
    }

    // Función para hacer scroll al final del chat
    function scrollToBottom() {
        chatbotBody.scrollTop = chatbotBody.scrollHeight;
    }

    // Respuestas predefinidas del chatbot (base de conocimientos)
    const chatbotResponses = [
        {
            keywords: ["servicios", "ofrecen", "qué hacen"],
            response: "Ofrecemos desarrollo web personalizado, diseño de aplicaciones móviles y soluciones de comercio electrónico. ¿Te gustaría saber más sobre alguno de ellos?"
        },
        {
            keywords: ["web", "pagina web", "sitio web"],
            response: "En desarrollo web, creamos sitios a medida, desde landing pages hasta plataformas complejas. Nos enfocamos en la experiencia de usuario y la optimización SEO."
        },
        {
            keywords: ["moviles", "app", "aplicacion"],
            response: "Desarrollamos aplicaciones móviles nativas para iOS y Android, así como apps híbridas. Nos especializamos en apps funcionales y con interfaces intuitivas."
        },
        {
            keywords: ["comercio", "ecommerce", "tienda online"],
            response: "Nuestras soluciones de comercio electrónico incluyen tiendas online seguras y escalables, integración con pasarelas de pago y gestión de inventario."
        },
        {
            keywords: ["costo", "precio", "cuánto cuesta"],
            response: "El costo de nuestros servicios varía según la complejidad y los requisitos específicos del proyecto. Te invitamos a usar nuestro formulario de contacto para solicitar una cotización personalizada y gratuita."
        },
        {
            keywords: ["contacto", "hablar", "equipo"],
            response: "Puedes contactarnos a través de nuestro formulario en la sección de 'Contáctanos' en esta misma página, o enviando un correo a info@techstart.com.mx."
        },
        {
            keywords: ["hola", "saludo", "que tal"],
            response: "¡Hola! ¿En qué puedo ayudarte con nuestros servicios?"
        },
        {
            keywords: ["gracias", "ok", "vale"],
            response: "De nada. Si tienes más preguntas, no dudes en preguntar."
        },
        {
            keywords: ["ubicacion", "donde estan"],
            response: "Somos una empresa digital y trabajamos de forma remota, lo que nos permite servir a clientes en cualquier parte. Si necesitas una reunión, podemos coordinarla virtualmente."
        }
        // Puedes añadir más preguntas y respuestas aquí
    ];

    // Función para obtener la respuesta del chatbot
    function getChatbotResponse(userInput) {
        const lowerCaseInput = userInput.toLowerCase();

        for (const response of chatbotResponses) {
            for (const keyword of response.keywords) {
                if (lowerCaseInput.includes(keyword)) {
                    return response.response;
                }
            }
        }
        return "Lo siento, no entendí tu pregunta. Por favor, intenta reformularla o pregunta algo más específico sobre nuestros servicios.";
    }

    // Función para enviar mensaje (al hacer clic en el botón o presionar Enter)
    function sendMessage() {
        const userInput = chatbotInput.value.trim();
        if (userInput === "") return; // No enviar mensajes vacíos

        addMessage(userInput, 'user');
        chatbotInput.value = ''; // Limpiar el input

        // Simular un pequeño retardo para la respuesta del bot
        setTimeout(() => {
            const botResponse = getChatbotResponse(userInput);
            addMessage(botResponse, 'bot');
        }, 500); // Retardo de 0.5 segundos
    }

    // Event Listeners para enviar mensaje
    chatbotSendBtn.addEventListener('click', sendMessage);
    
    // Para enviar con Enter en el input
    function handleChatbotInput(event) {
        if (event.key === 'Enter') {
            sendMessage();
        }
    }
</script>


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        (function () {
            'use strict'

            // Obtener el formulario y el elemento del mensaje
            var form = document.getElementById('formContacto');
            var formMessage = document.getElementById('form-message');

            form.addEventListener('submit', function (event) {
                event.preventDefault(); // Evita el envío tradicional del formulario
                event.stopPropagation();

                form.classList.add('was-validated'); // Aplica las clases de validación de Bootstrap

                if (form.checkValidity()) {
                    // Si el formulario es válido, procede con el envío AJAX
                    sendFormData();
                } else {
                    // Si no es válido, asegúrate de que el mensaje de estado no se muestre
                    formMessage.style.display = 'none';
                }
            }, false);

            function sendFormData() {
                const formData = new FormData(form);
                const xhr = new XMLHttpRequest();

                xhr.open('POST', 'procesar_formulario.php', true); // Apunta a tu script PHP

                xhr.onload = function() {
                    if (xhr.status >= 200 && xhr.status < 300) {
                        try {
                            const response = JSON.parse(xhr.responseText);
                            if (response.success) {
                                formMessage.textContent = response.message;
                                formMessage.className = 'form-message mt-3 success';
                                form.reset(); // Limpia el formulario
                                form.classList.remove('was-validated'); // Quita las clases de validación
                            } else {
                                formMessage.textContent = response.message || 'Hubo un error al enviar tu mensaje. Inténtalo de nuevo.';
                                formMessage.className = 'form-message mt-3 error';
                            }
                        } catch (e) {
                            formMessage.textContent = 'Error en la respuesta del servidor. Inténtalo de nuevo.';
                            formMessage.className = 'form-message mt-3 error';
                            console.error('Error al parsear JSON:', e, xhr.responseText);
                        }
                    } else {
                        formMessage.textContent = 'Error de conexión al servidor. Código: ' + xhr.status;
                        formMessage.className = 'form-message mt-3 error';
                    }
                    formMessage.style.display = 'block'; // Muestra el mensaje
                };

                xhr.onerror = function() {
                    formMessage.textContent = 'No se pudo conectar con el servidor. Verifica tu conexión.';
                    formMessage.className = 'form-message mt-3 error';
                    formMessage.style.display = 'block'; // Muestra el mensaje
                };

                xhr.send(formData);
            }
        })();
    </script>




<script>
// Función para cargar testimonios desde API
async function loadTestimonials() {
    const loadingElement = document.getElementById('testimonials-loading');
    const containerElement = document.getElementById('testimonials-container');
    const errorElement = document.getElementById('testimonials-error');

    try {
        // Opción 1: Usar JSONPlaceholder (API gratuita real)
        const response = await fetch('https://jsonplaceholder.typicode.com/users');
        
        if (!response.ok) {
            throw new Error(`HTTP error! status: ${response.status}`);
        }
        
        const users = await response.json();
        
        // Seleccionar solo los primeros 4 usuarios para testimonios
        const selectedUsers = users.slice(0, 4);
        
        // Testimonios predefinidos para combinar con datos de usuarios reales
        const testimonialTexts = [
            "TechStart Pro transformó completamente nuestro negocio digital. Su equipo de desarrollo web creó una plataforma increíble que superó todas nuestras expectativas. La experiencia de usuario es excepcional.",
            "El servicio de consultoría tecnológica de TechStart Pro fue fundamental para modernizar nuestra infraestructura. Su enfoque profesional y conocimiento técnico nos ayudó a alcanzar nuestros objetivos.",
            "Trabajar con TechStart Pro fue una experiencia fantástica. Su equipo de desarrollo móvil creó una aplicación que nuestros clientes adoran. La calidad del código y la atención al detalle son impresionantes.",
            "La solución de comercio electrónico que desarrolló TechStart Pro aumentó nuestras ventas en un 200%. Su experiencia en desarrollo web y optimización SEO fue clave para nuestro éxito."
        ];

        const jobTitles = [
            "CEO & Fundador en TechCorp",
            "Directora de Marketing en StartupXYZ",
            "CTO en InnovateLab",
            "Gerente de Producto en DigitalSolutions"
        ];

        // Limpiar el contenedor
        containerElement.innerHTML = '';

        // Crear testimonios dinámicos
        selectedUsers.forEach((user, index) => {
            const testimonialHTML = `
                <div class="col">
                    <div class="d2c_card_wrapper text-center">
                        <h5>${testimonialTexts[index]}</h5>
                        <img src="https://picsum.photos/80/80?random=${user.id}" class="img-fluid mb-2 rounded-circle" alt="Testimonio ${user.name}" style="width: 80px; height: 80px; object-fit: cover;">
                        <h3 class="mb-2"><span>${user.name}</span></h3>
                        <p class="mb-0">${jobTitles[index]}</p>
                    </div>
                </div>
            `;
            containerElement.innerHTML += testimonialHTML;
        });

        // Ocultar loading y mostrar testimonios
        loadingElement.style.display = 'none';
        containerElement.style.display = 'block';

        // Inicializar el slider de Slick después de cargar los testimonios
        initializeTestimonialSlider();

    } catch (error) {
        console.error('Error al cargar testimonios:', error);
        
        // En caso de error, mostrar testimonios por defecto
        loadDefaultTestimonials();
        
        // Mostrar mensaje de error
        errorElement.style.display = 'block';
        setTimeout(() => {
            errorElement.style.display = 'none';
        }, 5000);
    }
}

// Función para cargar testimonios por defecto en caso de error
function loadDefaultTestimonials() {
    const loadingElement = document.getElementById('testimonials-loading');
    const containerElement = document.getElementById('testimonials-container');

    const defaultTestimonials = [
        {
            text: "TechStart Pro es el servicio más profesional y eficiente que he utilizado. Su equipo de desarrollo web creó una solución perfecta que se adapta exactamente a nuestras necesidades empresariales.",
            image: "https://picsum.photos/80/80?random=1",
            name: "María González",
            position: "CEO & Fundadora en TechVision"
        },
        {
            text: "El servicio de consultoría tecnológica de TechStart Pro superó nuestras expectativas. Su experiencia y profesionalismo nos ayudaron a digitalizar nuestros procesos de manera exitosa.",
            image: "https://picsum.photos/80/80?random=2",
            name: "Carlos Rodríguez",
            position: "Director de IT en InnovaCorp"
        },
        {
            text: "Trabajar con TechStart Pro fue una experiencia excepcional. Su equipo de desarrollo móvil creó una aplicación que nuestros usuarios aman. La calidad y atención al detalle son impresionantes.",
            image: "https://picsum.photos/80/80?random=3",
            name: "Ana Martínez",
            position: "Gerente de Producto en AppSolutions"
        },
        {
            text: "La solución de comercio electrónico desarrollada por TechStart Pro transformó nuestro negocio. Su experiencia en desarrollo web y optimización nos ayudó a crecer exponencialmente.",
            image: "https://picsum.photos/80/80?random=4",
            name: "Luis Fernández",
            position: "Fundador en EcommercePro"
        }
    ];

    // Limpiar el contenedor
    containerElement.innerHTML = '';

    // Crear testimonios por defecto
    defaultTestimonials.forEach((testimonial, index) => {
        const testimonialHTML = `
            <div class="col">
                <div class="d2c_card_wrapper text-center">
                    <h5>${testimonial.text}</h5>
                    <img src="${testimonial.image}" class="img-fluid mb-2 rounded-circle" alt="Testimonio ${testimonial.name}" style="width: 80px; height: 80px; object-fit: cover;">
                    <h3 class="mb-2"><span>${testimonial.name}</span></h3>
                    <p class="mb-0">${testimonial.position}</p>
                </div>
            </div>
        `;
        containerElement.innerHTML += testimonialHTML;
    });

    // Ocultar loading y mostrar testimonios
    loadingElement.style.display = 'none';
    containerElement.style.display = 'block';

    // Inicializar el slider
    initializeTestimonialSlider();
}

// Función para inicializar el slider de testimonios
function initializeTestimonialSlider() {
    // Verificar si Slick está disponible
    if (typeof $.fn.slick !== 'undefined') {
        // Destruir slider existente si existe
        if ($('.testimonial_slider').hasClass('slick-initialized')) {
            $('.testimonial_slider').slick('unslick');
        }
        
        // Inicializar nuevo slider
        $('.testimonial_slider').slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 5000,
            arrows: false,
            dots: true,
            pauseOnHover: true,
            responsive: [
                {
                    breakpoint: 992,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                },
                {
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
                        slidesToScroll: 1
                    }
                }
            ]
        });
    } else {
        console.warn('Slick slider no está disponible');
    }
}
// Cargar testimonios al cargar la página
document.addEventListener('DOMContentLoaded', () => {
    loadTestimonials();
});

</script>
    </script>
    <!-- js cdn -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- bootstrap js -->
    <script src="./lib/bootstrap-5/js/bootstrap.bundle.min.js"></script>
    <!-- fancybox Image -->
    <script  src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"></script>
    <!-- Slider JS Link -->
    <script src="./lib/slick-1.8.1/slick/slick.min.js"></script>
    <!-- main js -->
    <script src="./assets/js/main.js"></script>
</body>
</html>

