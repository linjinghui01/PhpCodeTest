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
$buyResponse = $fruitApiService->buyFruit(1, 2); //Assuming id is 1 and quantity is 2
print_r($buyResponse);