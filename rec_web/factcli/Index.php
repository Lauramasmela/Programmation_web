<?php

require_once 'vendor/autoload.php';

use \factcli\models\Client as Client;
use \factcli\models\Facture as Facture;

$s= new \Slim\Slim();

use \Illuminate\Database\Capsule\Manager as DB;

$db = new DB();
$db->addConnection(parse_ini_file('src/conf/conf.ini'));

$db->setAsGlobal();
$db->bootEloquent();

echo "CLIENT \n" . "<br/>";

//lister les clients
$clients = Client::select( `id`, `datefact`, `montant`, `client_id`)->get();
foreach($clients as $val){
    print $val->id . '<br/>';
    print $val->datefact . '<br/>';
    print $val->montant . '<br/>';
}

$c->get('/client/:id', function ($id){

  $client = Client::getId($id);
  echo $client->nomcli . '<br/>';
  echo $client->adrcli . '<br/>';
  echo $client->villecli . '<br/>';
});

$c->run();

?>
