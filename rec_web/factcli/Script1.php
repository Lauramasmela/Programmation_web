<?php

require_once 'vendor/autoload.php';


use \factcli\models\Client as Client;
use \factcli\models\Facture as Facture;
use \factcli\divers\Outils as Outils;
use \factcli\conf\ConnectionFactory as ConnectionFactory;

$s= new \Slim\Slim();

use \Illuminate\Database\Capsule\Manager as DB;


echo "CLIENT \n" . "<br/>";



Outils::headerHTML("client");
//lister les clients
$clients = Client::select( `id`, `nomcli`, `adrcli`, `villecli`)->get();
foreach($clients as $val){
    print $val->id . '<br/>';
    print $val->nomcli . '<br/>';
    print $val->adrcli. '<br/>';
    print $val->villecli. '<br/>';
}

$c->get('/client/:id', function ($id){

  $client = Client::getId($id);
  
  echo $client->nomcli . '<br/>';
  echo $client->adrcli . '<br/>';
  echo $client->villecli . '<br/>';
});


$c->run();
Outils::footerHTML();




?>
