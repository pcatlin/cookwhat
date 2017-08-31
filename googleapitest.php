<?php
session_start();
require_once dirname(__FILE__).'/GoogleClientApi/Client.php';
//require_once dirname(__FILE__).'/GoogleClientApi/contrib/Google_AnalyticsService.php';

include "config.php";

$scriptUri = "http://".$_SERVER["HTTP_HOST"].$_SERVER['PHP_SELF'];

$client = new Google_Client();
$client->setAccessType('online'); // default: offline
$client->setApplicationName('My Application name');
$client->setClientId($google_client_id);
$client->setClientSecret($google_client_secret);
$client->setRedirectUri($scriptUri);
$client->setDeveloperKey($api_key); // API key

// $service implements the client interface, has to be set before auth call
//$service = new Google_AnalyticsService($client);

if (isset($_GET['logout'])) { // logout: destroy token 
    unset($_SESSION['token']);
	die('Logged out.');
}

if (isset($_GET['code'])) { // we received the positive auth callback, get the token and store it in session
    $client->authenticate();
    $_SESSION['token'] = $client->getAccessToken();
}

if (isset($_SESSION['token'])) { // extract token from session and configure client
    $token = $_SESSION['token'];
    $client->setAccessToken($token);
}

if (!$client->getAccessToken()) { // auth call to google
    $authUrl = $client->createAuthUrl();
    header("Location: ".$authUrl);
    die;
}
echo 'Hello, world.';

?>