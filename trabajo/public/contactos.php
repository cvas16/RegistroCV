<?php include __DIR__ . '/../includes/header.php'; ?>

<style>
  body {
    background-image: url('img/imagen3.webp'); /* Aquí va tu imagen de fondo */
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    min-height: 100vh; /* Para asegurar que siempre cubra toda la pantalla */
  }

  /* Opcional: mejora la legibilidad del contenido sobre el fondo */
  .background-container {
    padding: 80px 0;
  }

  .card, .ratio {
    background-color: rgba(255, 255, 255, 0.95);
  }
</style>

<div class="background-container">
  <h1 class="mb-4">Contáctanos</h1>

  <div class="row">
    <div class="col-md-6">
      <div class="card shadow-sm mb-4">
        <div class="card-body">
          <h5 class="card-title">Información de Contacto</h5>
          <p><strong>Teléfono:</strong> (01) 503 4940</p>
          <p><strong>Correo:</strong> <a href="mailto:asistente.adm@cyberteltec.com.pe">asistente.adm@cyberteltec.com.pe</a></p>
          <p><strong>Horario de atención:</strong><br>Lunes a Viernes, 9:00 a.m. – 6:00 p.m.</p>
          <div class="mt-3">
            <a href="https://www.facebook.com/people/Cybertel-Tecnology/61550918814610/" target="_blank" class="btn btn-primary me-2">
              <i class="bi bi-facebook"></i> Facebook
            </a>
            <a href="https://www.linkedin.com/company/cybertel-tecnolog%C3%ADa-y-servicios" target="_blank" class="btn btn-info me-2">
              <i class="bi bi-linkedin"></i> LinkedIn
            </a>
            <a href="mailto:asistente.adm@cyberteltec.com.pe" class="btn btn-secondary">
              <i class="bi bi-envelope"></i> Email
            </a>
          </div>
        </div>
      </div>
    </div>

    <div class="col-md-6">
      <div class="ratio ratio-4x3 shadow-sm">
        <iframe src="https://www.google.com/maps?q=-12.0464,-77.0428&hl=es&z=14&output=embed" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap Icons CDN -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

<?php include __DIR__ . '/../includes/footer.php'; ?>