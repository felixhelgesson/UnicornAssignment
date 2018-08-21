<?php
require("vendor/autoload.php");

// Skapa en HTTP-client
$client = new \GuzzleHttp\Client();

// Anropa URL: https://unicorns.idioti.se/
$res = $client->request('GET', 'http://unicorns.idioti.se/',[
    'headers' => [
        'Accept'     => 'application/json',
    ]
]);


// Omvandla JSON-svar till datatyper
?>
