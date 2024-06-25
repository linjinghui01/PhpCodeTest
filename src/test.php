<?php

require_once 'vendor/autoload.php';
require_once 'BaseApiService.php';
require_once 'FruitApiService.php';

use \FruitApiService;

$fruitApiService = new FruitApiService();

// Get a list of fruits
$fruitList = $fruitApiService->getFruitList();
print_r($fruitList);

// Buying Fruits
$buyResponse = $fruitApiService->buyFruit(1, 2); // 假设 id 为 1，数量为 2
print_r($buyResponse);