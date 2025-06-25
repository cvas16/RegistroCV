<?php include __DIR__ . '/../includes/header.php'; ?>

<?php if (isset($_GET['eliminado']) && $_GET['eliminado'] == 1): ?>
    <div class="alert alert-success text-center">
        ¡Postulación eliminada correctamente!
    </div>
<?php endif; ?>

<div class="container mt-5">
    <h2>Mi Perfil</h2>
    <div class="card mb-4">
        <div class="card-body">
            <form method="POST" action="/trabajo/index.php?route=actualizar">
                <div class="mb-3">
                    <label class="form-label"><strong>Nombre:</strong></label>
                    <input type="text" name="nombre" class="form-control" value="<?= htmlspecialchars($usuario['nombre']) ?>" required>
                </div>
                <div class="mb-3">
                    <label class="form-label"><strong>Correo:</strong></label>
                    <input type="email" name="correo" class="form-control" value="<?= htmlspecialchars($usuario['correo'] ?? '') ?>" required>
                </div>
                <button type="submit" class="btn btn-primary">Actualizar Perfil</button>
            </form>
            <p class="mt-3"><strong>Usuario:</strong> <?= htmlspecialchars($usuario['usuario']) ?></p>
            <p><strong>Rol:</strong> <?= htmlspecialchars($usuario['rol'] ?? 'usuario') ?></p>
        </div>
    </div>

    <?php if ($usuario['rol'] !== 'rrhh'): ?>
    <h3>Mis Postulaciones</h3>
    <?php if(!empty($postulaciones)): ?>
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Área</th>
                        <th>Teléfono</th>
                        <th>Fecha de Nacimiento</th>
                        <th>Archivo CV</th>
                        <th>Estado</th>
                        <th>Fecha de Postulación</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($postulaciones as $p): ?>
                        <tr>
                            <td><?= htmlspecialchars($p['area']) ?></td>
                            <td><?= htmlspecialchars($p['telefono']) ?></td>
                            <td><?= htmlspecialchars($p['fecha_nacimiento']) ?></td>
                            <td>
                                <?php if (!empty($p['archivo_cv'])): ?>
                                    <a href="/trabajo/<?= htmlspecialchars($p['archivo_cv']) ?>" target="_blank">Ver CV</a>
                                <?php else: ?>
                                    No adjunto
                                <?php endif; ?>
                            </td>
                            <td><?= htmlspecialchars($p['estado']) ?></td>
                            <td><?= htmlspecialchars($p['fecha_postulacion'] ?? $p['creado_en'] ?? '') ?></td>
                            <td>
                                <form method="POST" action="/trabajo/index.php?route=eliminar_postulacion" onsubmit="return confirm('¿Seguro que deseas eliminar esta postulación?');">
                                    <input type="hidden" name="id" value="<?= htmlspecialchars($p['id']) ?>">
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    <?php else: ?>
        <p>No tienes postulaciones registradas.</p>
    <?php endif; ?>
    <?php endif; ?>
</div>

<?php include __DIR__ . '/../includes/footer.php'; ?>