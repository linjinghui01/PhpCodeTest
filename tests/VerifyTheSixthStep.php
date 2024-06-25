<?php

require_once '../src/BracketValidator.php';

$validator = new BracketValidator();

$expression1 = "()";
$expression2 = "()[]{}";
$expression3 = "(]";

echo $validator->isValid($expression1)? "True\n" : "False\n";
echo $validator->isValid($expression2)? "True\n" : "False\n";
echo $validator->isValid($expression3)? "True\n" : "False\n";


