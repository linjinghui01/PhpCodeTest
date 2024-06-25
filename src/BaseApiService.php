<?php

declare(strict_types=1);

//Use PrestaShop's
//require __DIR__ . '/_path_to_prestashop_root_/bootstrap.php';
//include_once(_PS_CONFIG_DIR_ . 'autoload.php');

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
        // $db = \Db::getInstance();
        // $db->insert('request_log_table', ['request_info' => $requestInfo]);
        // or use
        // $this->insertLogToDatabase($requestInfo);
        // Replace with actual database logging implementation

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
        // $db = \Db::getInstance();
        // $db->insert('response_log_table', ['response_info' => $responseInfo]);
        // or use
        // $this->insertLogToDatabase($responseInfo);
        // Replace with actual database logging implementation

    }

    /**
     * Inserts log data into the database.
     *
     * @param string $logData The data to be inserted into the log table.
     */
    private function insertLogToDatabase($logData)
    {
        // Use PrestaShop's Db class to insert log data into the database
//        $date = date('Y-m-d H:i:s');
//        $serializedData = serialize($logData);
//        $sql = "INSERT INTO "._DB_PREFIX_."api_logs (date_add, log_data) VALUES (
//            '".$date."',
//            '".addslashes($serializedData)."'
//        )";
//        return Db::getInstance()->execute($sql);
    }
}