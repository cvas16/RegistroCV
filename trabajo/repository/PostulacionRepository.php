<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../dto/PostulacionDTO.php';

class PostulacionRepository
{
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function save(PostulacionDTO $dto)
    {
        $stmt = $this->pdo->prepare("INSERT INTO postulaciones (usuario_id, area, telefono, fecha_nacimiento, archivo_cv, estado) VALUES (?, ?, ?, ?, ?, ?)");
        return $stmt->execute([
            $dto->usuario_id,
            $dto->area,
            $dto->telefono,
            $dto->fecha_nacimiento,
            $dto->archivo_cv,
            $dto->estado
        ]);
    }

    public function findAll()
    {
        $stmt = $this->pdo->query("SELECT p.*, u.nombre, u.correo FROM postulaciones p JOIN usuarios u ON p.usuario_id = u.id ORDER BY p.fecha_postulacion DESC");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findById($id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM postulaciones WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findByUsuarioId($usuario_id)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM postulaciones WHERE usuario_id = ?");
        $stmt->execute([$usuario_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateEstado($id, $estado)
    {
        $stmt = $this->pdo->prepare("UPDATE postulaciones SET estado = ? WHERE id = ?");
        return $stmt->execute([$estado, $id]);
    }
    public function eliminarPorUsuario($id, $usuario_id)
    {
        $stmt = $this->pdo->prepare("DELETE FROM postulaciones WHERE id = ? AND usuario_id = ?");
        return $stmt->execute([$id, $usuario_id]);
    }
}
