<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Paquetería ATZ - Transporte y Logística</title>

  <!-- CSS de Bootstrap (Versión estable más reciente) -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    xintegrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Bootstrap Icons (¡Necesario para los iconos!) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Google Font: Inter (Fuente moderna y profesional para logística) -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;700;900&display=swap" rel="stylesheet">

  <!-- Estilos CSS personalizados -->
  <style>
    /* Fuente principal moderna, como usan las grandes empresas de tecnología y logística */
    body {
      font-family: 'Inter', sans-serif;
      line-height: 1.6;
      background-color: #f8f9fa; /* Un fondo base claro para las secciones */
    }

    /* Configuración del video de fondo */
    .video-background {
      position: fixed;
      right: 0;
      bottom: 0;
      min-width: 100%;
      min-height: 100%;
      width: auto;
      height: auto;
      z-index: -1000;
      object-fit: cover; /* Asegura que el video cubra todo el espacio */
      filter: brightness(0.4); /* Oscurece el video para que el texto resalte */
    }

    /* Wrapper para el contenido que va sobre el video */
    .content-wrapper {
      position: relative;
      z-index: 10;
      padding-top: 60px; /* Espacio para la navbar sticky */
    }

    /* Navbar moderna: semi-transparente y con efecto blur */
    .navbar {
      background: rgba(10, 10, 20, 0.7); /* Fondo oscuro translúcido */
      backdrop-filter: blur(10px); /* Efecto "glassmorphism" */
      -webkit-backdrop-filter: blur(10px);
      border-bottom: 1px solid rgba(255, 255, 255, 0.1);
    }

    .navbar .navbar-brand,
    .navbar .nav-link {
      color: #ffffff !important; /* Texto blanco para contraste */
      font-weight: 500;
    }

    .navbar .nav-link:hover,
    .navbar .nav-link.active {
      color: #0d6efd !important; /* Azul primario al pasar el mouse o activo */
    }

    .navbar-brand {
      font-weight: 700;
      font-size: 1.5rem;
    }

    /* Hero Section (Sección principal) */
    .hero-section {
      min-height: 80vh; /* Ocupa gran parte de la pantalla */
      display: flex;
      align-items: center;
      justify-content: center;
      text-align: center;
      color: #ffffff;
    }

    .hero-section h1 {
      font-size: 3.5rem;
      font-weight: 900;
      text-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); /* Sombra para legibilidad */
    }

    /* Responsive font size for hero */
    @media (max-width: 768px) {
      .hero-section h1 {
        font-size: 2.5rem;
      }
    }

    /* Títulos de sección (Misión, Valores, etc.) */
    .section-title {
      font-weight: 700;
      font-size: 2.5rem;
      margin-bottom: 1rem;
      color: #333;
    }
    
    .section-title.text-white {
      color: #ffffff;
      text-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
    }

    /* Estilo de "Tarjetas de cristal" para Misión, Valores, Servicios */
    .service-card {
      background: rgba(255, 255, 255, 0.1); /* Fondo blanco translúcido */
      backdrop-filter: blur(10px);
      -webkit-backdrop-filter: blur(10px);
      border: 1px solid rgba(255, 255, 255, 0.2);
      border-radius: 1rem; /* Bordes redondeados */
      padding: 2rem;
      color: #ffffff;
      height: 100%; /* Para que todas las tarjetas tengan la misma altura */
      transition: all 0.3s ease;
    }

    .service-card:hover {
      transform: translateY(-5px); /* Efecto sutil al pasar el mouse */
      background: rgba(255, 255, 255, 0.2);
    }

    .service-card .icon {
      font-size: 3rem; /* Icono grande */
      color: #0d6efd; /* Color primario de Bootstrap */
      margin-bottom: 1rem;
    }

    .service-card h5 {
      font-weight: 700;
      font-size: 1.5rem;
    }

    /* Secciones de Destinos y Contacto (sobre fondo claro) */
    .content-section {
      padding: 6rem 0;
      background-color: #ffffff;
      border-bottom: 1px solid #dee2e6;
    }
    
    .content-section.bg-light {
      background-color: #f8f9fa;
    }

    /* Tarjetas de Destinos */
    .destination-card {
      border: none;
      border-radius: 0.75rem;
      box-shadow: 0 4px 15px rgba(0, 0, 0, 0.05);
      transition: all 0.3s ease;
      height: 100%;
    }
    
    .destination-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 8px 25px rgba(0, 0, 0, 0.1);
    }

    .destination-card .card-body {
      padding: 1.5rem;
    }

    .destination-card .card-title {
      font-weight: 700;
      color: #333;
    }

    /* Estilo del formulario de contacto */
    .contact-form {
      background: #ffffff;
      padding: 2.5rem;
      border-radius: 1rem;
      box-shadow: 0 8px 30px rgba(0, 0, 0, 0.08);
    }

    .contact-form .form-label {
      font-weight: 500;
    }
    
    /* Input groups con iconos */
    .input-group-text {
      background-color: #e9ecef;
      border: 1px solid #ced4da;
    }

    /* Footer */
    .footer {
      background-color: #212529; /* Fondo oscuro para el footer */
      color: #adb5bd;
      padding-top: 4rem;
      padding-bottom: 2rem;
    }

    .footer h5 {
      color: #ffffff;
      font-weight: 700;
    }

    .footer .nav-link {
      color: #adb5bd;
      padding: 0.25rem 0;
    }

    .footer .nav-link:hover {
      color: #ffffff;
    }

    .footer .social-icons a {
      font-size: 1.5rem;
      color: #adb5bd;
      margin-right: 1.5rem;
      transition: color 0.3s ease;
    }

    .footer .social-icons a:hover {
      color: #0d6efd;
    }
    
    .footer .logo-text {
      font-weight: 700;
      font-size: 1.25rem;
      color: #ffffff;
    }
  </style>
</head>

<body>

  <!-- Video de fondo -->
  <!-- He usado un video de stock de Pexels. ¡Reemplázalo con tu video! -->
  <video class="video-background" autoplay loop muted playsinline>
    <source src="video/20250125.mp4" type="video/mp4">
    Tu navegador no soporta la reproducción de videos.
  </video>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
    <div class="container">
      <a class="navbar-brand" href="#">
        <i class="bi bi-truck me-2"></i>Paquetería ATZ
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-house-door-fill me-1"></i> Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#servicios"><i class="bi bi-box-seam-fill me-1"></i> Servicios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#destinos"><i class="bi bi-map-fill me-1"></i> Destinos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contacto"><i class="bi bi-envelope-fill me-1"></i> Contacto</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Contenido principal sobre el video -->
  <div class="content-wrapper">

    <!-- Hero Section -->
    <header class="hero-section">
      <div class="container">
        <!-- Texto animado (necesita JavaScript) -->
        <h1 id="animatedText"></h1>
      </div>
    </header>

    <!-- Sección Misión, Valores, Servicios (Sobre el video) -->
    <section id="servicios" class="py-5">
      <div class="container">
        <div class="row g-4">
          <!-- Misión -->
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div class="service-card text-center">
              <div class="icon"><i class="bi bi-lightning-charge-fill"></i></div>
              <h5>Misión</h5>
              <p>Paquetería - ATZ tiene el firme propósito de lograr la satisfacción de sus clientes, proporcionándoles servicios especializados de transporte terrestre y logística de mercancías, con altos niveles de calidad y seguridad.</p>
            </div>
          </div>
          <!-- Valores -->
          <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
            <div class="service-card text-center">
              <div class="icon"><i class="bi bi-star-fill"></i></div>
              <h5>Valores</h5>
              <p><strong>Puntualidad:</strong> Nuestro objetivo será llegar siempre a tiempo.</p>
              <p><strong>Responsabilidad:</strong> Comprometidos en conservar en buen estado sus mercancías.</p>
              <p><strong>Honestidad:</strong> Actuamos con integridad hacia toda la cadena de valor.</p>
            </div>
          </div>
          <!-- Servicios -->
          <div class="col-lg-4 col-md-12">
            <div class="service-card text-center">
              <div class="icon"><i class="bi bi-truck-front-fill"></i></div>
              <h5>Servicios</h5>
              <p><strong>Paquetería:</strong> Transporte de mercancías puerta a puerta, con más de 20 destinos al sur de la República Mexicana.</p>
              <p><strong>Camión Completo:</strong> Dispones de la unidad de forma exclusiva para el traslado de tus mercancías.</p>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div> <!-- Fin del content-wrapper (sobre el video) -->


  <!-- Sección Destinos (Fondo blanco) -->
  <section id="destinos" class="content-section">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-8">
          <h2 class="section-title">Nuestros Destinos Principales</h2>
          <p class="lead text-muted">Conectamos tus mercancías con puntos clave del país.</p>
        </div>
      </div>

      <div class="row">
        <!-- Fila 1 -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="destination-card">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-geo-alt-fill me-2 text-primary"></i>Nuevo Laredo</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="destination-card">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-geo-alt-fill me-2 text-primary"></i>Monterrey</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="destination-card">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-geo-alt-fill me-2 text-primary"></i>Querétaro</h5>
            </div>
          </div>
        </div>

        <!-- Fila 2 -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="destination-card">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-geo-alt-fill me-2 text-primary"></i>Puebla</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="destination-card">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-geo-alt-fill me-2 text-primary"></i>Tlaxcala</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="destination-card">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-geo-alt-fill me-2 text-primary"></i>Pachuca</h5>
            </div>
          </div>
        </div>

        <!-- Fila 3 -->
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="destination-card">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-geo-alt-fill me-2 text-primary"></i>Coatzacoalcos</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="destination-card">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-geo-alt-fill me-2 text-primary"></i>Villahermosa</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="destination-card">
            <div class="card-body">
              <h5 class="card-title"><i class="bi bi-geo-alt-fill me-2 text-primary"></i>Tuxtla Gutierrez</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Sección Contacto (Fondo gris claro) -->
  <section id="contacto" class="content-section bg-light">
    <div class="container">
      <div class="row justify-content-center text-center mb-5">
        <div class="col-lg-8">
          <h2 class="section-title">Contáctanos</h2>
          <p class="lead text-muted">¿Estás interesado o tienes dudas sobre algún servicio? Llena el formulario y te responderemos a la brevedad.</p>
        </div>
      </div>

      <div class="row justify-content-center">
        <div class="col-lg-8">
          <!-- He quitado el action de PHP para que el formulario no intente enviarse -->
          <form class="contact-form">
            <div class="row g-3">
              <!-- Nombre -->
              <div class="col-md-6">
                <label for="nombre" class="form-label">Nombre Completo</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                  <input type="text" id="nombre" name="nombre" class="form-control" required>
                </div>
              </div>
              <!-- Email -->
              <div class="col-md-6">
                <label for="correo" class="form-label">Email</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                  <input type="email" id="correo" name="correo" class="form-control" required>
                </div>
              </div>
              <!-- Teléfono -->
              <div class="col-12">
                <label for="telefono" class="form-label">Teléfono</label>
                <div class="input-group">
                  <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                  <input type="tel" id="telefono" name="telefono" class="form-control" required>
                </div>
              </div>
              <!-- Comentario -->
              <div class="col-12">
                <label for="comentario" class="form-label">Comentario o Mensaje</label>
                <div class="input-group">
                   <span class="input-group-text"><i class="bi bi-chat-dots-fill"></i></span>
                  <textarea id="comentario" name="comentario" class="form-control" rows="4"></textarea>
                </div>
              </div>
              <!-- reCAPTCHA (Asegúrate que tu sitekey sea correcta) -->
              <div class="col-12 mt-4">
                <div class="g-recaptcha" data-sitekey="6Ld_QsMqAAAAAJvREOuFK8KMJMqzK2wCwMEeUZhS"></div>
              </div>
              <!-- Botón de envío -->
              <div class="col-12 text-center mt-4">
                <button type="submit" class="btn btn-primary btn-lg px-5">
                  <i class="bi bi-send-fill me-2"></i>Enviar Mensaje
                </button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row gy-4">
        <!-- Logo y derechos -->
        <div class="col-lg-4 col-md-12">
          <a href="#" class="d-flex align-items-center mb-3 text-decoration-none">
            <span class="logo-text"><i class="bi bi-truck me-2"></i>Paquetería ATZ</span>
          </a>
          <p class="text-body-secondary mb-0">© 2025 Paquetería ATZ. Todos los derechos reservados.</p>
          <p class="text-body-secondary">Conectando tu mundo, un paquete a la vez.</p>
        </div>

        <!-- Links Rápidos -->
        <div class="col-lg-2 col-md-4 col-6">
          <h5>Navegación</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link">Inicio</a></li>
            <li class="nav-item mb-2"><a href="#servicios" class="nav-link">Servicios</a></li>
            <li class="nav-item mb-2"><a href="#destinos" class="nav-link">Destinos</a></li>
            <li class="nav-item mb-2"><a href="#contacto" class="nav-link">Contacto</a></li>
          </ul>
        </div>

        <!-- Servicios (Ejemplo) -->
        <div class="col-lg-3 col-md-4 col-6">
          <h5>Servicios</h5>
          <ul class="nav flex-column">
            <li class="nav-item mb-2"><a href="#" class="nav-link">Paquetería</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link">Camión Completo</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link">Logística</a></li>
            <li class="nav-item mb-2"><a href="#" class="nav-link">Rastreo</a></li>
          </ul>
        </div>
        
        <!-- Redes Sociales -->
        <div class="col-lg-3 col-md-4">
          <h5>Síguenos</h5>
          <div class="social-icons">
            <a href="#" aria-label="Facebook" class="me-3"><i class="bi bi-facebook"></i></a>
            <a href="#" aria-label="Twitter" class="me-3"><i class="bi bi-twitter-x"></i></a>
            <a href="#" aria-label="Instagram" class="me-3"><i class="bi bi-instagram"></i></a>
            <a href="#" aria-label="LinkedIn"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>


  <!-- Scripts de Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    xintegrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  
  <!-- Script de reCAPTCHA -->
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>

  <!-- JavaScript personalizado (para la animación de texto) -->
  <script>
    // Función de máquina de escribir simple
    function typeWriter(element, text, speed) {
      let i = 0;
      function type() {
        if (i < text.length) {
          element.innerHTML += text.charAt(i);
          i++;
          setTimeout(type, speed);
        }
      }
      type();
    }

    // Iniciar la animación cuando el documento esté listo
    document.addEventListener("DOMContentLoaded", function () {
      const animatedEl = document.getElementById("animatedText");
      if (animatedEl) {
        const textToType = "Transporte y Logística a Nivel Nacional"; // Puedes cambiar este texto
        typeWriter(animatedEl, textToType, 100); // 100ms por caracter
      }
    });
  </script>
</body>

</html>