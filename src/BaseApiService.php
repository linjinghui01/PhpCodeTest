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
    protected function logRequest(string $endpoint, array $requestData): void
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
     * @param string $endpoint API endpoint being called.
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
        // Use PrestaShop's Db class to insert log data into the database
        $serializedData = serialize($logData);
//        // use pSQL    PSQL function to avoid SQL injection
//        $sql = "INSERT INTO `" . _DB_PREFIX_ . "api_logs` (`log_data`) VALUES ('" . pSQL($serializedData) . "')";
//        // 使用 PrestaShop 的 Db 类执行 SQL 语句
//        return \Db::getInstance()->execute($sql);
    }

}