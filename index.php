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

<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">

    <link href="https://fonts.googleapis.com/css?family=Abril+Fatface|Baloo+Tammudu|Dancing+Script|Gloria+Hallelujah" rel="stylesheet">
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

    <section class="container col-sm d-flex">
      <h1 class="sticky-top text-center bg-success" style="font-family: 'Baloo Tammudu', cursive;">UnicornWiki</h1>
      <section class=" col-sm d-flex justify-content-center text-center flex-wrap mb-5 buttonContainer">
        <button class="buttonRounded m-3">Show all Unicorns</button>
      </section>


      <section class="d-flex flex-row flex-wrap justify-content-center text-center" style="font-family: 'Gloria Hallelujah', cursive; unicornSec">
        <p class="bg-success m-5 unicornItem">This is a unicorn</p>
        <p class="bg-success m-3 unicornItem">This is a unicorn</p>
        <p class="bg-success m-3 unicornItem">This is a unicorn</p>
        <p class="bg-success m-3 unicornItem">This is a unicorn</p>
      </section>

    </section>

  </body>
</html>
