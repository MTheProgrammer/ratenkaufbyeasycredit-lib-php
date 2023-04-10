<?php
namespace Netzkollektiv\EasyCreditApi\Client;

class HttpClientFactory {
	public function getClient($url, $params) {
		return new \Laminas\Http\Client($url, $params);
	}
}