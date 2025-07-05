<?php include __DIR__ . '/../includes/header.php'; ?>
<link href="/trabajo/css/perfil.css" rel="stylesheet">
<div class="main-content">
<h1>Registro de CV</h1>
<p>Completa el formulario para postular a una vacante en CYBERTEL.</p>

<?php

if (!isset($_SESSION['usuario_id'])) {
    echo '<div class="alert alert-warning">Debes iniciar sesión para postular.</div>';
    include 'includes/footer.php';
    exit;
}
if (isset($_GET['ok'])) {
    echo '<div class="alert alert-success">¡CV enviado correctamente!</div>';
}
?>

<form method="POST" action="/trabajo/index.php?route=postular" enctype="multipart/form-data" class="row g-3">
  <div class="col-md-4">
    <label for="telefono" class="form-label">Teléfono</label>
    <input type="tel" class="form-control" id="telefono" name="telefono" placeholder="Ej: 987654321" required>
  </div>
  <div class="col-md-4">
    <label for="fecha_nacimiento" class="form-label">Fecha de Nacimiento</label>
    <input type="date" class="form-control" id="fecha_nacimiento" name="fecha_nacimiento" required>
  </div>
  <div class="col-md-4">
    <label for="area" class="form-label">Área de interés</label>
    <select class="form-select" id="area" name="area" required>
      <option value="">Selecciona una opción</option>
      <option value="Marketing">Marketing</option>
      <option value="Tecnología">Tecnología</option>
      <option value="RRHH">Recursos Humanos</option>
      <option value="Ventas">Ventas</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="archivo_cv" class="form-label">Sube tu CV</label>
    <input type="file" class="form-control" id="archivo_cv" name="archivo_cv" accept=".pdf,.doc,.docx" required>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-success">Enviar Postulación</button>
  </div>
</div>
</form>

<?php include __DIR__ . '/../includes/footer.php'; ?>
