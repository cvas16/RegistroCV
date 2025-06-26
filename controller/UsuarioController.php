<?php

require_once __DIR__ . '/../service/UsuarioService.php';

class UsuarioController
{
    private $service;

    public function __construct()
    {
        $this->service = new UsuarioService();
    }

    public function perfil()
    {
        Security::requireLogin();
        $usuario = $this->service->obtenerPorId($_SESSION['usuario_id']);
        $postulaciones = $this->service->listarPostulaciones($_SESSION['usuario_id']); // si quieres mostrar postulaciones
        include __DIR__ . '/../public/perfil.php';
    }

    public function actualizar()
    {
        Security::requireLogin();
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->service->actualizar(
                $_SESSION['usuario_id'],
                $_POST['nombre'],
                $_POST['correo']
            );
            header('Location: /trabajo/index.php?route=perfil&actualizado=1');
            exit;
        }
    }
    public function eliminarPostulacion()
    {
        Security::requireLogin();
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['id'])) {
            require_once __DIR__ . '/../service/PostulacionService.php';
            $service = new PostulacionService();
            $service->eliminar($_POST['id'], $_SESSION['usuario_id']);
            header('Location: /trabajo/index.php?route=perfil&eliminado=1');
            exit;
        }
    }
}
