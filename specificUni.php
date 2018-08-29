<?php
require("vendor/autoload.php");
require("log.php");

use GuzzleHttp\Client;
$client = new Client();
$res = $client->request('GET', 'http://unicorns.idioti.se/' . $_GET["search"],
['headers' =>['Accept'=> 'application/json']]);
$data = json_decode($res->getBody());

require("structure.php");
?>
    <div>
      <?php
        echo "<h2>". $data->name . "</h2>"
          . "<i>" . $data->spottedWhen . "</i>"
          . "<p>" . $data->description . "<p>"
          . "<img  src=" . $data->image . ">";
      ?>
      </div>
  </body>
</html>
