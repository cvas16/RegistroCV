<?php include __DIR__ . '/../includes/header.php'; ?>
<div class="container mt-5">
  <h1 class="mb-4 text-center">Panel de RRHH</h1>
  <div class="mb-2 text-end">
    <span class="badge bg-primary fs-5">
      Total de postulaciones: <?= count($postulaciones) ?>
    </span>
  </div>
  <table class="table table-hover align-middle">
    <thead class="table-dark">
      <tr>
        <th>Nombre</th>
        <th>Correo</th>
        <th>Área</th>
        <th>Teléfono</th>
        <th>Fecha de Nacimiento</th>
        <th>CV</th>
        <th>Estado</th>
        <th>Acciones</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($postulaciones as $p): ?>
        <tr>
          <td><?= htmlspecialchars($p['nombre']) ?></td>
          <td><?= htmlspecialchars($p['correo']) ?></td>
          <td><?= htmlspecialchars($p['area']) ?></td>
          <td><?= htmlspecialchars($p['telefono']) ?></td>
          <td><?= htmlspecialchars($p['fecha_nacimiento']) ?></td>
          <td>
            <?php if ($p['archivo_cv']): ?>
              <a href="<?= htmlspecialchars($p['archivo_cv']) ?>" target="_blank">Ver CV</a>
            <?php else: ?>
              No adjunto
            <?php endif; ?>
          </td>
          <td>
            <span class="badge bg-<?= $p['estado'] === 'aceptado' ? 'success' : ($p['estado'] === 'rechazado' ? 'danger' : 'secondary') ?>">
              <?= ucfirst($p['estado']) ?>
            </span>
          </td>
          <td>
            <form method="POST" action="/trabajo/index.php?route=estado_rrhh" class="d-inline">
              <input type="hidden" name="id" value="<?= $p['id'] ?>">
              <button name="estado" value="aceptado" class="btn btn-success btn-sm" <?= $p['estado'] === 'aceptado' ? 'disabled' : '' ?>>Aceptar</button>
              <button name="estado" value="rechazado" class="btn btn-danger btn-sm" <?= $p['estado'] === 'rechazado' ? 'disabled' : '' ?>>Rechazar</button>
            </form>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>
<?php include __DIR__ . '/../includes/footer.php'; ?>