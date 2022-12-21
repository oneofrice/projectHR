<?php

class Request
{
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