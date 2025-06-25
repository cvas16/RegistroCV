<?php

require_once __DIR__ . '/../config/database.php';
require_once __DIR__ . '/../dto/UsuarioDTO.php';

class UsuarioRepository {
    private $pdo;

    public function __construct()
    {
        $this->pdo = Database::getConnection();
    }

    public function save(UsuarioDTO $dto)
    {
        $stmt = $this->pdo->prepare("INSERT INTO usuarios (nombre, usuario, correo, password, rol) VALUES (?, ?, ?, ?, ?)");
        return $stmt->execute([
            $dto->nombre,
            $dto->usuario,
            $dto->correo,
            $dto->password,
            $dto->rol
        ]);
    }

    public function findByUsuario($usuario)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE usuario = ?");
        $stmt->execute([$usuario]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function findByCorreo($correo)
    {
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE correo = ?");
        $stmt->execute([$correo]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function findById($id) {
        $stmt = $this->pdo->prepare("SELECT * FROM usuarios WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function update($id, $nombre, $correo) {
        $stmt = $this->pdo->prepare("UPDATE usuarios SET nombre = ?, correo = ? WHERE id = ?");
        return $stmt->execute([$nombre, $correo, $id]);
    }
}