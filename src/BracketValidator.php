<?php

declare(strict_types=1);

class BracketValidator
{
    /**
     * Validates if the brackets in the input string are balanced and correctly nested.
     *
     * @param string $expression The string to be validated.
     * @return bool Returns true if the brackets are valid, false otherwise.
     */
    public function isValid(string $expression): bool
    {
        $stack = [];
        $mapping = [')' => '(', ']' => '[', '}' => '{']; // Mapping of closing to opening brackets

        for ($i = 0; $i < strlen($expression); $i++) {
            $char = $expression[$i];
            // If it's an opening bracket, push it onto the stack
            if (in_array($char, ['(', '[', '{'])) {
                array_push($stack, $char);
            } elseif (in_array($char, [')', ']', '}'])) {
                // If the stack is empty or the stack's top does not match the bracket, return false
                if (empty($stack) || $mapping[$char] !== array_pop($stack)) {
                    return false;
                }
            }
        }

        // If the stack is empty, all opening brackets have been matched correctly
        return empty($stack);
    }
}