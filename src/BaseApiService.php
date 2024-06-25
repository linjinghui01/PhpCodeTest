<?php

declare(strict_types=1);

abstract class BaseApiService
{
    /**
     * Logs the request information.
     *
     * @param string $requestInfo Information about the request.
     */
    protected function logRequest(string $requestInfo): void
    {
        // Implement actual logging logic here, e.g., writing to a file or database
        echo "Request Log: " . $requestInfo . PHP_EOL;
    }

    /**
     * Logs the response information.
     *
     * @param string $responseInfo Information about the response.
     */
    protected function logResponse(string $responseInfo): void
    {
        // Implement actual logging logic here, e.g., writing to a file or database
        echo "Response Log: " . $responseInfo . PHP_EOL;
    }
}