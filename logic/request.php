<?php
require_once '../lib/Request.php';
$request = new Request();
$domain = 'https://11a4-85-174-38-221.eu.ngrok.io';
$url = $domain . '?';

foreach ($_GET as $param => $value)
{
	$url .= $param . '=' . str_ireplace(' ', '%20', $value) . '&';
}

$response = $request->sendRequest($url);
echo $response;
