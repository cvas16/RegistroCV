
<?php

define('APP_ENV', 'dev');
define('BASE_URL', 'http://localhost/trabajo/');

$routes = [
    'login'         => ['controller' => 'AuthController', 'action' => 'login'],
    'logout'        => ['controller' => 'AuthController', 'action' => 'logout'],
    'registro'      => ['controller' => 'AuthController', 'action' => 'registrar'],
    'perfil'        => ['controller' => 'UsuarioController', 'action' => 'perfil'],
    'actualizar'    => ['controller' => 'UsuarioController', 'action' => 'actualizar'],
    'postular'      => ['controller' => 'PostulacionController', 'action' => 'registrar'],
    'panel_rrhh' => ['controller' => 'RRHHController', 'action' => 'listar'],
    'estado_rrhh'   => ['controller' => 'RRHHController', 'action' => 'cambiarEstado'],
    'nosotros'      => ['controller' => 'PaginaController', 'action' => 'nosotros'],
    'contactos'     => ['controller' => 'PaginaController', 'action' => 'contactos'],
    'eliminar_postulacion' => ['controller' => 'UsuarioController', 'action' => 'eliminarPostulacion'],
];

spl_autoload_register(function ($class) {
    foreach (['controller', 'service', 'repository', 'dto', 'model', 'security'] as $folder) {
        $file = __DIR__ . '/../' . $folder . '/' . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
            return;
        }
    }
});

