<?php

require_once __DIR__ . '/../security/Security.php';
require_once __DIR__ . '/../service/PostulacionService.php';

class PostulacionController
{
    private $service;

    public function __construct()
    {
        $this->service = new PostulacionService();
    }

    public function registrar()
    {
        Security::requireLogin(); // Solo usuarios logueados pueden postular

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario_id = $_SESSION['usuario_id'];
            $area = Security::sanitize($_POST['area']);
            $telefono = Security::sanitize($_POST['telefono']);
            $fecha_nacimiento = Security::sanitize($_POST['fecha_nacimiento']);
            $archivo_cv = '';

            // Procesar archivo CV
            if (isset($_FILES['archivo_cv']) && $_FILES['archivo_cv']['error'] === UPLOAD_ERR_OK) {
                $ext = pathinfo($_FILES['archivo_cv']['name'], PATHINFO_EXTENSION);
                $nombreArchivo = uniqid() . '_' . preg_replace('/[^a-zA-Z0-9_\-\.]/', '', $_FILES['archivo_cv']['name']);
                $rutaDestino = __DIR__ . '/../uploads/' . $nombreArchivo;
                if (move_uploaded_file($_FILES['archivo_cv']['tmp_name'], $rutaDestino)) {
                    $archivo_cv = 'uploads/' . $nombreArchivo;
                }
            }

            $this->service->registrar($usuario_id, $area, $telefono, $fecha_nacimiento, $archivo_cv);
            header('Location: index.php?route=postular&ok=1');
            exit;
        }

        include __DIR__ . '/../public/registro_cv.php';
    }
}