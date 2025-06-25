<?php include __DIR__ . '/../includes/header.php'; ?>
<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-lg" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-4">Registro de Usuario</h3>
            <?php if (!empty($error)): ?>
              <div class="alert alert-danger text-center"><?= htmlspecialchars($error) ?></div>
            <?php endif; ?>
            <form id="registroForm" method="POST" action="/trabajo/index.php?route=registro" onsubmit="return validarRegistro()">
              <div class="form-outline mb-4">
                <input type="text" id="nombre" name="nombre" class="form-control form-control-lg" required placeholder="Nombre completo" required />
              </div>
              <div class="form-outline mb-4">
                <input type="text" id="usuario" name="usuario" class="form-control form-control-lg" required placeholder="Usuario" required />
              </div>
              <div class="form-outline mb-4">
                <input type="email" id="correo" name="correo" class="form-control form-control-lg"  required placeholder="Correo electrónico" required />
              </div>
              <div class="form-outline mb-4">
                <input type="password" id="password" name="password" class="form-control form-control-lg" required placeholder="Contraseña" required />
              </div>
              <button class="btn btn-success btn-lg w-100 mb-3" type="submit">Registrarse</button>
              <p class="mt-3">¿Ya tienes cuenta? <a href="/trabajo/index.php?route=login">Inicia sesión aquí</a></p>
            </form>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function validarRegistro() {
    const nombre = document.getElementById('nombre').value.trim();
    const usuario = document.getElementById('usuario').value.trim();
    const password = document.getElementById('password').value.trim();

    if (!nombre || !usuario || !password) {
      alert('Por favor, completa todos los campos.');
      return false;
    }
    return true;
  }
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>