<?php

require_once 'Logger.php';
require_once 'FileHandler.php';

class MyApplication {
    use Logger, FileHandler;

    public function run() {
        $this->log("Application is running...");
        $this->saveToFile("log.txt", "Application started.");
    }
}

$app = new MyApplication();
$app->run();

