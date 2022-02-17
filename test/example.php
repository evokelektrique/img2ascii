<?php
require_once __DIR__ . "/../vendor/autoload.php";

// Include the main class in your namespace:
use Img2Ascii\Processor;

$width = 50;

$processor = new Processor(__DIR__ . '/example.jpg');
$output = $processor
    ->asciify()
    ->asciifyToWidth($width)
    ->result("@%#*+=-:. ")
    ->output();

echo $output;