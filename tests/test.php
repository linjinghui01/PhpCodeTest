<?php

require_once '../vendor/autoload.php';
require_once '../src/Services/FruitApiService.php';

$fruitApiService = new FruitApiService();

// Get a list of fruits
$fruitList = $fruitApiService->getFruitList();
print_r($fruitList);

// Buying Fruits
$buyResponse = $fruitApiService->buyFruit(1, 2); //Assuming id is 1 and quantity is 2
print_r($buyResponse);