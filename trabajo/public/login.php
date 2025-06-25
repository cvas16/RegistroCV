<?php include __DIR__ . '/../includes/header.php'; ?>


<section class="vh-100">
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-lg" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

            <h3 class="mb-4">Iniciar Sesión</h3>

            <form id="loginForm" onsubmit="return validarFormulario()" method="POST" action="/trabajo/index.php?route=login">
              <div class="form-outline mb-4">
                <input type="text" id="usuario" name="usuario" class="form-control form-control-lg" placeholder="Usuario" />
              </div>

              <div class="form-outline mb-4">
                <input type="password" id="password" name="password" class="form-control form-control-lg" placeholder="Contraseña" />
              </div>
              <?php if (!empty($error)): ?>
                <div class="alert alert-danger text-center"><?= htmlspecialchars($error) ?></div>
              <?php endif; ?>
              <div class="form-check d-flex justify-content-start mb-4">
                <input class="form-check-input" type="checkbox" value="" id="recordar" />
                <label class="form-check-label ms-2" for="recordar">Recordar contraseña</label>
              </div>

              <button class="btn btn-primary btn-lg w-100 mb-3" type="submit">Entrar</button>
              <hr class="my-4">
              <button class="btn btn-danger btn-lg w-100 mb-3" type="button"><i class="bi bi-google me-2"></i> Iniciar con Google</button>
              <button class="btn btn-lg w-100" style="background-color: #3b5998; color: white;" type="button"><i class="bi bi-facebook me-2"></i> Iniciar con Facebook
              </button>
              <hr class="my-4">
              <div class="mb-3">
                ¿No tienes una cuenta? <a href="/trabajo/index.php?route=registro">Regístrate</a>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<script>
  function validarFormulario() {
    const usuario = document.getElementById('usuario').value.trim();
    const password = document.getElementById('password').value.trim();

    if (!usuario || !password) {
      alert('Por favor, ingresa usuario y contraseña.');
      return false;
    }
    return true;
  }
</script>

<?php include __DIR__ . '/../includes/footer.php'; ?>