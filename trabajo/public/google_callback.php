<?php
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../service/UsuarioService.php';

$client = new Google_Client();
$client->setClientId('ID del cliente');
$client->setClientSecret('Secreto del cliente');
$client->setRedirectUri('http://localhost/trabajo/public/google_callback.php');

if (isset($_GET['code'])) {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token['access_token']);

    $oauth = new Google_Service_Oauth2($client);
    $google_user = $oauth->userinfo->get();

    $usuarioService = new UsuarioService();
    $user = $usuarioService->buscarPorCorreo($google_user->email);

    if (!$user) {
        // Registro automático si no existe
        $usuarioService->registrar(
            $google_user->name,
            $google_user->email, // usuario
            $google_user->email, // correo
            bin2hex(random_bytes(8)), // contraseña aleatoria
            'usuario'
        );
        $user = $usuarioService->buscarPorCorreo($google_user->email);
    }

    session_start();
    $_SESSION['usuario_id'] = $user['id'];
    $_SESSION['rol'] = $user['rol'];
    header('Location: /trabajo/index.php');
    exit;
} else {
    header('Location: /trabajo/index.php?route=login&error=google');
    exit;
}
