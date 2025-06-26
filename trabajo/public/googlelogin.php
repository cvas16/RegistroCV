<?php
require_once __DIR__ . '/../vendor/autoload.php';

$client = new Google_Client();
$client->setClientId('576559080890-sg6i37dtvfsjutieqfb3d95acoh7kf4u.apps.googleusercontent.com');
$client->setClientSecret('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');
$client->setRedirectUri('http://localhost/trabajo/public/google_callback.php');
$client->addScope('email');
$client->addScope('profile');

$client->setPrompt('select_account');

$auth_url = $client->createAuthUrl();

header('Location: ' . filter_var($auth_url, FILTER_SANITIZE_URL));
exit;