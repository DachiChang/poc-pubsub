<?php

require_once __DIR__ . '/vendor/autoload.php';

use Google\Cloud\PubSub\PubSubClient;

$pub_sub = new PubSubClient([
    'keyFile' => json_decode(file_get_contents('key.json'), true) //use service account token to get accesse API permission
]);

$topic = $pub_sub->topic('hello_topic');
$topic->publish([
    'data' => $argv[1], // the message from CLI
    'attributes' => [
        'location' => 'Taipei' // just for attribute test
    ]
]);
