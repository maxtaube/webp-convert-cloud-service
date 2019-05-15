<?php require 'vendor/autoload.php';

use \WebPConvertCloudService\WebPConvertCloudService;

$options = [
    // Set dir for storing converted images temporarily
    // (make sure to create that dir, with permissions for web server to write)
    'destination-dir' => 'conversions',

    // Set acccess restrictions
    'access' => [
        'whitelist' => [
            [
                'ip' => '*',
                'api-key' => 'my dog is white',
                'require-api-key-to-be-crypted-in-transfer' => false
            ]
        ]
    ],

    
];

$wpc = new WebPConvertCloudService();
$wpc->handleRequest($options);
?>