<?php
require_once __DIR__ . '/../service/UsuarioService.php';
require_once __DIR__ . '/../service/PostulacionService.php';

class AuthController
{
   public function registrar()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nombre = $_POST['nombre'] ?? null;
            $usuario = $_POST['usuario'] ?? null;
            $correo = $_POST['correo'] ?? null;
            $password = $_POST['password'] ?? null;
            $rol = 'usuario';

            if (!$nombre || !$usuario || !$correo || !$password) {
                $error = "Todos los campos son obligatorios.";
                include __DIR__ . '/../public/registro.php';
                return;
            }

            try {
                $usuarioService = new UsuarioService();
                $usuarioService->registrar($nombre, $usuario, $correo, $password, $rol);
                header('Location: /trabajo/index.php?route=login&registro=ok');
                exit;
            } catch (Exception $e) {
                $error = $e->getMessage();
                include __DIR__ . '/../public/registro.php';
                return;
            }
        }
        include __DIR__ . '/../public/registro.php';
    }

    public function login()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $usuarioService = new UsuarioService();
            $user = $usuarioService->login($usuario, $password);

            if (is_array($user)) {
                session_start();
                $_SESSION['usuario_id'] = $user['id'];
                $_SESSION['rol'] = $user['rol'];
                header('Location: /trabajo/index.php');
                exit;
            } elseif ($user === 'usuario_incorrecto') {
                $error = "Usuario incorrecto";
            } elseif ($user === 'password_incorrecta') {
                $error = "Contraseña incorrecta";
            }
        }
        include __DIR__ . '/../public/login.php';
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: /trabajo/index.php?route=login');
        exit;
    }

    //método que usa PostulacionService solo cuando lo necesita
    public function listar()
    {
        Security::requireRole('rrhh');
        $postulacionService = new PostulacionService();
        $postulaciones = $postulacionService->listarTodas();
        include __DIR__ . '/../public/panel_rrhh.php';
    }

    public function cambiarEstado()
    {
        Security::requireRole('rrhh');
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $id = $_POST['id'];
            $estado = $_POST['estado'];
            $postulacionService = new PostulacionService();
            $postulacionService->cambiarEstado($id, $estado);
            header('Location: /trabajo/index.php?route=panel_rrhh');
            exit;
        }
    }
}
