<?php

declare(strict_types=1);

abstract class BaseApiService
{
    protected function logRequest($request): void
    {
        // Implement logging of request to the database
    }

    protected function logResponse($response): void
    {
        // Implement logging of response to the database
    }

    // Additional common methods for API services can be added here
}