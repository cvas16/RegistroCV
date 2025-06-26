<?php
if (session_status() === PHP_SESSION_NONE) session_start();
$rol = $_SESSION['rol'] ?? null;
$logueado = isset($_SESSION['usuario_id']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>CYBERTEL</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css" rel="stylesheet">
  <link rel="icon" href="/trabajo/img/imagen1.jpeg" sizes="32x32" type="image/jpeg">
  <link rel="icon" href="/trabajo/img/imagen1.jpeg" sizes="16x16" type="image/jpeg">
  <link href="/trabajo/css/style.css" rel="stylesheet">
</head>

<body>
  <nav class="navbar navbar-expand-lg mb-4">
    <div class="container-fluid">
      <a class="navbar-brand text-dark" href="/trabajo/index.php">
        <img src="/trabajo/img/imagen1.jpeg" width="80px" height="80px" alt="Logo CYBERTEL">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav justify-content-center w-100">
          <li class="nav-item"><a class="nav-link text-dark fs-5" href="/trabajo/index.php">Inicio</a></li>
          <li class="nav-item"><a class="nav-link text-dark fs-5" href="/trabajo/index.php?route=nosotros">Nosotros</a></li>
          <?php if ($logueado): ?>
            <?php if ($rol === 'rrhh'): ?>
              <li class="nav-item"><a class="nav-link text-dark fs-5" href="/trabajo/index.php?route=panel_rrhh">Panel RRHH</a></li>
            <?php else: ?>
              <li class="nav-item"><a class="nav-link text-dark fs-5" href="/trabajo/index.php?route=postular">Registro CV</a></li>
            <?php endif; ?>
          <?php endif; ?>
        </ul>
        <div class="d-flex align-items-center ms-auto">
          <?php if (!$logueado): ?>
            <a class="btn btn-success btn-lg me-3" href="/trabajo/index.php?route=registro">Registro</a>
            <a class="btn btn-secondary btn-lg me-3" href="/trabajo/index.php?route=login">Login</a>
          <?php else: ?>
            <a class="btn btn-info btn-lg me-3" href="/trabajo/index.php?route=perfil">Perfil</a>
            <a class="btn btn-danger btn-lg me-3" href="/trabajo/index.php?route=logout">Cerrar sesión</a>
          <?php endif; ?>
          <a class="btn btn-primary btn-lg" href="/trabajo/index.php?route=contactos">Contáctanos</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="wrapper d-flex flex-column min-vh-100">
    <div class="container flex-grow-1">