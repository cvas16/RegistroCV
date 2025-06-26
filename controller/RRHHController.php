<?php

require_once __DIR__ . '/../security/Security.php';
require_once __DIR__ . '/../service/PostulacionService.php';


class RRHHController {
    public function listar() {
        Security::requireRole('rrhh');
        
        
        $service = new PostulacionService();
        $postulaciones = $service->listarTodas();
        include __DIR__ . '/../public/panel_rrhh.php';
    }
    public function cambiarEstado() {
        Security::requireRole('rrhh');
        
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $estado = $_POST['estado'];
            $service = new PostulacionService();
            $service->cambiarEstado($id, $estado);
            header('Location: /trabajo/index.php?route=panel_rrhh');
            exit;
        }
    }
}
