<?php

require_once __DIR__ . '/vendor/autoload.php';

use Google\Cloud\PubSub\PubSubClient;

$pub_sub = new PubSubClient([
    'keyFile' => json_decode(file_get_contents('key.json'), true)
]);

$sub = $pub_sub->subscription('sub_one');

while (true) {
    echo "Pulling time: " . date('Y-m-d H:i:s') . PHP_EOL;
    $messages = $sub->pull(); // long pull for the message delivery about 20mins connection timeout

    foreach ($messages as $message) {
        echo "Get message: " . $message->data() . " at " . date('Y-m-d H:i:s') . PHP_EOL;
        print_r($message->attributes());
        $sub->acknowledge($message); // IMPORTANT!!  set the message has been proccessed.
    }
}
