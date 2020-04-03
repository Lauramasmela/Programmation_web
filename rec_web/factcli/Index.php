<?php

  require_once 'vendor/autoload.php';
  require 'src/conf/ConnectionFactory.php';
  use \factcli\models\Client as Client;
  use \factcli\models\Facture as Facture;
  use \factcli\divers\Outils as Outils;


      Outils::headerHTML("client");

      $c= new \Slim\Slim();


      $c->get('/', function (){
        $c = \Slim\Slim::getInstance();
        $c->response->redirect($c->urlFor('liste'), 404);
      })->name('init');


      $c->get('/clients', function(){
        requeteDesClients();
      })->name('liste');

    /*****************************************/


        function requeteDesClients(){
            global $c;

          $site=$c->urlFor('client_id');

          /*requette des clients*/
          $reqclient= Client::select('id', 'nomcli')->get();
          initformulare($site);
          foreach($reqclient as $choix){
            echo  "<option value=$choix->id>$choix->nomcli</option>";
          }
          finformulaire();
        }

        $c->get('/clients/factures', function(){
            //////
            $c = \Slim\Slim::getInstance();
            $client = $c->request->get()['le_client'];

            /////

            $requetefacture = Facture::where('client_id', '=', $client)->get();
            //echo $requetefacture;
            //echo $requete2;
            initDeTable();
            foreach($requetefacture as $id){
                echo '<tr>';
                echo '<td>'.$id->id.'</td>'.'<td>'.$id->datefact.'</td>'.'<td>'.$id->montant.'</td>'.'<td>'.$id->client_id.'</td>';
                echo '</tr>';
            }
            finDeTable();
        })->name('client_id');


      //$slim= \Slim\Slim::getInstance();
      //$client_id = $slim->request->get()['client_id'];
      //$varlien=$c->urlFor('leclient');
      /***************************script2****************************/
      //$f= new \Slim\Slim();



      function initformulare($site){
        echo<<<A
        <form id="formulaire_de_Client" method="GET" action="$site">
          <select name='le_client'>
A;
      }

      function finformulaire(){
        echo "</select>";
        echo  "<input type='submit' value='OK'/>";
        echo  " </form>";
      }


      function initDeTable(){
        echo '<table border=1>';
        echo '<tr>';
        echo '<th>id</th><th>date facture</th><th>montant</th><th>client_id</th>';
      }

      function finDeTable(){
        echo '</table>';
      }
      /***************************script2****************************/

      $c->run();

      Outils::footerHTML();

?>
