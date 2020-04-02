<?php

require_once 'vendor/autoload.php';
require 'src/conf/ConnectionFactory.php';
use \factcli\models\Client as Client;
use \factcli\models\Facture as Facture;
use \factcli\divers\Outils as Outils;
use \Slim\Slim as Slim;

  Outils::headerHTML("client");

  $c= new \Slim\Slim();

  $c->get('/', function (){
    requeteClient();
  });


    function initformulare(){
      echo<<<A
      <form id="formulaire_de_Client" methode=GET action='Script2.php'>
        <select name='client_id'>
  A;
    }

    function finformulaire(){
      echo "</select>";
      echo  "<input type='submit' value='OK'/>";
      echo  " </form>";
    }

    function requeteClient(){
      /*requette des clients*/
      $requete= Client::select('id', 'nomcli')->get();
      initformulare();
      foreach($requete as $choix){
        echo  "<option value=$choix->id>$choix->nomcli</option>";
      }
      finformulaire();
    }

  //$slim= \Slim\Slim::getInstance();
  //$client_id = $slim->request->get()['client_id'];
  //$varlien=$c->urlFor('leclient');

  $c->run();

  Outils::footerHTML();

?>
