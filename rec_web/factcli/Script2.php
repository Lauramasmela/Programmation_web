<?php

require_once 'vendor/autoload.php';
require 'src/conf/ConnectionFactory.php';

use \factcli\models\Client as Client;
use \factcli\models\Facture as Facture;
use \factcli\divers\Outils as Outils;
use \Slim\Slim as Slim;


Outils::headerHTML("facture");

$f= new \Slim\Slim();
echo $_GET['client_id'];

if(isset($_GET['client_id'])){
    $client_id = $_GET['client_id'];
}

$f->get('/factures/:client_id', function ($client_id){


//  $requete2 = Facture::select( 'id', 'datefact', 'montant', 'client_id')->get();
  $requete2 = Facture::where('client_id', '=', $client_id)->get();

  echo $requete2;

  echo '<table border=1>';
  echo '<tr>';
  echo '<th>id</th><th>date facture</th><th>montant</th><th>client_id</th>';
  foreach($requete2 as $id){
  echo '<tr>';
  echo '<td>'.$id->id.'</td>'.'<td>'.$id->datefact.'</td>'.'<td>'.$id->montant.'</td>'.'<td>'.$id->client_id.'</td>';
  echo '</tr>';
  }

  echo '</table>';

});




$f->run();
Outils::footerHTML();

?>
