<?php

require_once 'vendor/autoload.php';


use \factcli\models\Client as Client;
use \factcli\models\Facture as Facture;
use \factcli\divers\Outils as Outils;
use \factcli\conf\ConnectionFactory as ConnectionFactory;

$s= new \Slim\Slim();

use \Illuminate\Database\Capsule\Manager as DB;

echo "FACTURE \n" . "<br/>";

Outils::headerHTML("client");
//lister les clients
$facture = Facture::select( `id`, `datefact`, `montant`, `client_id`)->get();
foreach($clients as $val){
    print $val->id . '<br/>';
    print $val->datefact . '<br/>';
    print $val->montant . '<br/>';
		print $val->client_id . '<br/>';
}

$c->get('/facture/:id', function ($id){

  $facture = Facture::getId($client_id);
  echo $client->datefact . '<br/>';
  echo $client->montant . '<br/>';
  echo $client->client_id . '<br/>';
});


$c->run();
Outils::footerHTML();


?>
