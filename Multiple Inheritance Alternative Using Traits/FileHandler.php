<?php

trait FileHandler {
    public function saveToFile($filename, $content) {
        file_put_contents($filename, $content);
        echo "Content saved to $filename" . PHP_EOL;
    }
}