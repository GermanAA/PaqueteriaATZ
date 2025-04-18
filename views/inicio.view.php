<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Inicio</title>

  <!-- CSS de Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Oswald:wght@200..700&display=swap" rel="stylesheet">
  <link href="css/style.css" type="text/css" rel="stylesheet" media="screen,projection" />
</head>

<body>

  <video class="video-background" autoplay loop muted playsinline>
    <source src="video\20250125.mp4" type="video/mp4">
    Tu navegador no soporta la reproducción de videos.
  </video>

  <div class="container">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light ">

      <a class="styled-link" href="#">Paquetería ATZ</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

    </nav>


    <!-- Hero Section -->
    <div class=" text-center py-5">
      <div class="background-div text-white">
        <p id="animatedText" class="animacion"></p>

      </div>
    </div>

    <!-- Icon Section -->

    <div class="col">

      <div class="row text-center">
        <div class="col-md-4 card">
          <div class="p-3">
            <h2 class="text-primary"><i class="bi bi-lightning-fill"></i></h2>
            <h5>Misión</h5>
            <p class="">Paquetería - ATZ tiene el firme propósito de lograr la satisfacción de sus clientes, proporcionándoles servicios especializados de transporte terrestre y logística de mercancías, con altos niveles de calidad y seguridad.</p>
          </div>
        </div>
        <div class="col-md-4 card">
          <div class="p-3">
            <h2 class="text-primary"><i class="bi bi-star-fill"></i></h2>
            <h5>Valores</h5>
            <p class="">Puntualidad: Estamos convencidos que el tiempo es un recurso invaluable, por esta razón nuestro
              objetivo será llegar siempre a tiempo. </p>
            <p class="">Responsabilidad: Comprometidos en conservar en buen estado sus mercancias y transportarlas de
              forma segura. </p>
            <p class="">Honestidad: Actuamos con honestidad e integridad hacia todos los integrantes de la cadena de
              valor. </p>
          </div>
        </div>
        <div class="col-md-4 card">
          <div class="p-3">
            <h2 class="text-primary"><i class="bi bi-truck"></i></h2>
            <h5>Servicios</h5>
            <p class="">Paquetería: El transporte de mercancías se realiza de puerta a puerta, con más de 20 destinos al sur de la República Mexicana.</p>
            <p class="">Camión Completo: Contamos con el servicio de camión completo, en el cual dispones de la unidad de forma exclusiva para el traslado de tus mercancías.</p>

          </div>
        </div>
      </div>


    </div>


    <!-- Hero Section -->
    <div class="text-center py-5">
      <div class="background-div1 text-white">

        <p id="para1" class="animacion" data-text="Destinos:"> </p>
      </div>
    </div>

    <!-- Card Section -->
    <div class="container my-5">

      <div class="row">



        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Nuevo Laredo</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Monterrey</h5>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 mb-4">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Querétaro</h5>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Puebla</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Tlaxcala</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Pachuca</h5>
              </div>
            </div>
          </div>

        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Coatzacoalcos</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">VillaHermosa</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Tuxtla Gutierrez</h5>
              </div>
            </div>
          </div>
        </div>


      </div>
    </div>

    <!-- Hero Section -->
    <div class="text-center py-5">
      <div class="background-div2 text-white">

        <p id="para2" class="animacion" data-text="Contactanos:"> </p>
      </div>
    </div>


    <div class="row">
      <h5 class="mb-4">¿Estás interesado o tienes dudas sobre algún servicio?</h5>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <div class="row g-3">
          <div class="col-md-6">
            <label for="nombre" class="form-label">Nombre:</label>
            <input type="text" id="nombre" name="nombre" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label for="correo" class="form-label">Email:</label>
            <input type="email" id="correo" name="correo" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label for="telefono" class="form-label">Teléfono:</label>
            <input type="tel" id="telefono" name="telefono" class="form-control" required>
          </div>
          <div class="col-md-6">
            <label for="comentario" class="form-label">Comentario:</label>
            <textarea id="comentario" name="comentario" class="form-control" rows="3"></textarea>
          </div>
          <div class="col-12 text-end">
            <!-- Google reCAPTCHA -->
            <div class="g-recaptcha" data-sitekey="6Ld_QsMqAAAAAJvREOuFK8KMJMqzK2wCwMEeUZhS"></div>
            <button type="submit" class="btn btn-primary">Enviar</button>
          </div>
        </div>

      </form>
    </div>

    <!-- Footer -->
    <footer class="py-5">
    </footer>

  </div>


  <!-- Scripts -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script src="js/init.js"></script>
</body>

</html>