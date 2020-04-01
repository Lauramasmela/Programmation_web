<?php

require_once 'vendor/autoload.php';
require 'src/conf/ConnectionFactory.php';
use \factcli\models\Client as Client;
use \factcli\models\Facture as Facture;
use \factcli\divers\Outils as Outils;
use \Slim\Slim as Slim;

Outils::headerHTML("client");

$c= new \Slim\Slim();
/*saisir des donnee dans le navigateur: les form html*/


$c->get('/', function (){

  /*requette des factures du client*/
  $requete= Client::select('id', 'nomcli')->get();
  echo<<<A
  <form id="formulaire_de_Client" methode=GET action='Script2.php'>
    <select name='client_id'>
A;


/* insertion des noms client dans la liste deroulante*/
  foreach($requete as $row){

    echo  "<option value=$row->id>$row->nomcli</option>";
  }
  echo "</select>";
  echo  "<input type='submit' value='OK'/>";
  echo  " </form>";
});

$c->run();

Outils::footerHTML();

?>
