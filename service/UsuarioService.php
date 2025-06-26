    <?php

    require_once __DIR__ . '/../repository/UsuarioRepository.php';
    require_once __DIR__ . '/../dto/UsuarioDTO.php';

    class UsuarioService
    {
        private $repo;

        public function __construct()
        {
            $this->repo = new UsuarioRepository();
        }

        public function registrar($nombre, $usuario, $correo, $password, $rol = 'usuario')
        {
            if ($this->repo->findByUsuario($usuario) || $this->repo->findByCorreo($correo)) {
                throw new Exception("Usuario o correo ya existe.");
            }
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $dto = new UsuarioDTO($nombre, $usuario, $correo, $hash, $rol);
            return $this->repo->save($dto);
        }

        public function login($usuario, $password)
        {
            $user = $this->repo->findByUsuario($usuario);
            if (!$user) {
                return 'usuario_incorrecto';
            }
            if (!password_verify($password, $user['password'])) {
                return 'password_incorrecta';
            }
            return $user;
        }

        public function obtenerPorId($id)
        {
            return $this->repo->findById($id);
        }

        public function actualizar($id, $nombre, $correo)
        {
            return $this->repo->update($id, $nombre, $correo);
        }
        public function listarPostulaciones($usuario_id)
        {

            require_once __DIR__ . '/../repository/PostulacionRepository.php';
            $repo = new PostulacionRepository();
            return $repo->findByUsuarioId($usuario_id);
        }


        public function buscarPorCorreo($correo)
        {
            return $this->repo->findByCorreo($correo);
        }
    }
