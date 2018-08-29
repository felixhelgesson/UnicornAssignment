<?php
require("vendor/autoload.php");
require('log.php');
// Skapa en HTTP-client
$client = new \GuzzleHttp\Client();

// Anropa URL: https://unicorns.idioti.se/
$res = $client->request('GET', 'http://unicorns.idioti.se/',[
    'headers' => [
        'Accept'     => 'application/json',
    ]
]);
// Omvandla JSON-svar till datatyper
$data = json_decode($res->getBody());

require 'structure.php';
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

    <section class="container col-sm d-flex rounded">
      <h1 class="sticky-top text-center bg-success rounded greenish" style="font-family: 'Baloo Tammudu', cursive;">UnicornWiki</h1>
      <section class=" col-sm d-flex justify-content-center text-center flex-wrap mb-5 buttonContainer">
      </section>


      <section class="d-flex flex-row flex-wrap justify-content-center text-center rounded unicornSec w-100 greenish" style="font-family: 'Gloria Hallelujah', cursive;">
        <?php
          for ($i=0; $i < sizeof($data); $i++) {
            if ($data[$i]->name == "") {
              break;
            }
              echo "<p class='d-flex flew-wrap bg-success m-5 unicornItem rounded'><form action='specificUni.php' method='get'>"
              . $data[$i]->name .
              "<br><button type = 'submit' name='search' class='buttonRounded w-100 smallButton'
              value='" . $data[$i]->id . "'>Tryck för mer info</button><form></p>";
          }
        ?>
      </section>

    </section>

  </body>
</html>
