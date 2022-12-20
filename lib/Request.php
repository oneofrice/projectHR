<?php

class Request
{
	protected string $domain = 'https://11a4-85-174-38-221.eu.ngrok.io';

	public function sendRequest($url): bool|string
	{
		if ($curl = curl_init()) {
			curl_setopt($curl, CURLOPT_URL, $url);
			curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
			$response = curl_exec($curl);

			return $response;
		} else {
			return "Error";
		}
	}
}