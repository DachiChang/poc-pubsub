# poc-pubsub

A simple example for testing GCP pub/sub service.

## Setup

 1. create topic **"hello_topic"**
 2. create subscription to the topic, which named **"sub_one"**
 3. IAM -> create service account and add pub/sub access permission
 4. generate Token for the service account and download as **"key.json"** file
 5. put **"key.json"** in the folder with worker.php sender.php
 6. run command to install google client library **"composer install"**

## Run

 1. php worker.php
 2. php sender.php "message you want to send"

## Reference

 - [token authorization](https://github.com/googleapis/google-cloud-php/blob/master/AUTHENTICATION.md)
 - [pub/sub API doc](https://googleapis.github.io/google-cloud-php/#/docs/google-cloud/v0.131.0/pubsub/readme)
