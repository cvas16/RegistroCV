<?php
require_once __DIR__ . '/../vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('ID del cliente');   /* Esto se obtiene al crear tu cliente en googlecloudconsole*/
$client->setClientSecret('Secreto del cliente');
$client->setRedirectUri('http://localhost/trabajo/public/google_callback.php');
$client->addScope('email');
$client->addScope('profile');

$client->setPrompt('select_account');

$auth_url = $client->createAuthUrl();

header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
exit;
