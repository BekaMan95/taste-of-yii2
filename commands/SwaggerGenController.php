<?php

namespace app\commands;

use yii\console\Controller;
use yii\helpers\Json;

require(__DIR__ . "/../vendor/autoload.php");

class SwaggerGenController extends Controller
{
    /**
     * Writes JSON data to a file
     */
    public function actionGenerate()
    {
        // Sample data
        $openapi = \OpenApi\Generator::scan([__DIR__ . '/../controllers']);
        header('Content-Type: application/x-yaml');

        // Convert to JSON format
        $jsonData = Json::encode($openapi, JSON_PRETTY_PRINT);

        // Define file path
        $filePath = __DIR__ . '/../views/swagger/swagger.json';

        // Write JSON to file
        if (file_put_contents($filePath, $jsonData)) {
            echo "JSON data successfully written to {$filePath}\n";
        } else {
            echo "Failed to write JSON data.\n";
        }
    }
}
