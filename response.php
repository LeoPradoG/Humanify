<?php

require "vendor/autoload.php";

use GeminiAPI\Client;
use GeminiAPI\resources\Parts\TextPart;


$data = json_decode(file_get_contents("php://input"));

$text = $data->text;

$client = new Client("AIzaSyD8O42jXI818ypf1vDBSlhd2v0Zr-zQr2c");

$response = $client->geminiPro()->generateContent(

    new TextPart($text),

);

echo $response->text();



?>

