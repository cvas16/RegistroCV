<?php
require_once __DIR__ . '/../dto/PostulacionDTO.php';
require_once __DIR__ . '/../repository/PostulacionRepository.php';

class PostulacionService
{
    private $repo;

    public function __construct()
    {
        $this->repo = new PostulacionRepository();
    }

    public function registrar($usuario_id, $area, $telefono, $fecha_nacimiento, $archivo_cv)
    {
        $dto = new PostulacionDTO($usuario_id, $area, $telefono, $fecha_nacimiento, $archivo_cv);
        return $this->repo->save($dto);
    }

    public function listarTodas()
    {
        return $this->repo->findAll();
    }

    public function listarPorUsuario($usuario_id)
    {
        return $this->repo->findByUsuarioId($usuario_id);
    }

    public function cambiarEstado($id, $estado)
    {
        return $this->repo->updateEstado($id, $estado);
    }

    public function eliminar($id, $usuario_id)
    {
        return $this->repo->eliminarPorUsuario($id, $usuario_id);
    }
}
