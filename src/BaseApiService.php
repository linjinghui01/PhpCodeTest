<?php

declare(strict_types=1);


abstract class BaseApiService
{
    /**
     * Logs the request information to the PrestaShop database.
     *
     * @param string $endpoint API endpoint being called.
     * @param array $requestData The request data being sent.
     */
    protected function logRequest(array $requestData): void
    {
        $logData = [
            'type' => 'request',
            'data' => $requestData,
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->insertLogToDatabase($logData);
    }

    /**
     * Logs the response information to the PrestaShop database.
     *
     * @param array $responseData The response data received.
     */
    protected function logResponse(array $responseData): void
    {
        $logData = [
            'type' => 'response',
            'data' => $responseData,
            'created_at' => date('Y-m-d H:i:s')
        ];
        $this->insertLogToDatabase($logData);
    }

    /**
     * Inserts log data into the database.
     *
     * @param array $logData The data to be inserted into the log table.
     */
    private function insertLogToDatabase(array $logData): void
    {
//       // Use PrestaShop's Db class to insert log data into the database
//        // use PSQL function to avoid SQL injection
        
//        $serializedData = serialize($logData);
//        $sql = "INSERT INTO `" . _DB_PREFIX_ . "api_logs` (`log_data`) VALUES ('" . pSQL($serializedData) . "')";
//        return \Db::getInstance()->execute($sql);
    }

}