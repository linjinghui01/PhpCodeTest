<?php

declare(strict_types=1);
require_once 'BaseApiService.php';
require_once '../vendor/autoload.php';

use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class FruitApiService extends BaseApiService
{
    private $client;
    private $baseUrl = 'http://fruit.test/api/v1/';

    public function __construct()
    {
        $this->client = new Client([
            'base_uri' => $this->baseUrl,
            'timeout'  => 2.0,
        ]);
    }

    public function getFruitList(): array
    {
        try {
            $response = $this->client->request('GET', 'list');
            $this->logResponse($response->getStatusCode() . ' ' . $response->getBody()->getContents());
            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            $this->logRequest('Error: ' . $e->getMessage());
            return ['status' => $e->getCode(), 'msg' => $e->getMessage()];
        }
    }

    public function buyFruit(int $id, int $qty): array
    {
        try {
            var_dump('buyFruitFuction');
            $response = $this->client->request('POST', 'buy', [
                'form_params' => [
                    'id' => $id,
                    'qty' => $qty,
                ],
            ]);
            $this->logResponse($response->getStatusCode() . ' ' . $response->getBody()->getContents());
            return json_decode($response->getBody()->getContents(), true);
        } catch (RequestException $e) {
            $this->logRequest('Error: ' . $e->getMessage());
            return ['status' => $e->getCode(), 'msg' => $e->getMessage()];
        }
    }
}