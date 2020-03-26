<?php
require 'vendor/autoload.php';

use \mywishlist\models\Item as Item;
use \mywishlist\models\Liste as Liste;
use \Slim\Slim as Slim;


/*OBJET SLIM*/
$s = new Slim();


/*CONFIGURATION*/

use \Illuminate\Database\Capsule\Manager as DB;

$db = new DB();
$db->addConnection(parse_ini_file('src/conf/conf.ini'));

$db->setAsGlobal();
$db->bootEloquent();


  function rechercherec(){
      foreach (Liste::get() as $val){
          print $val->no . '<br/>';
          print $val->titre . '<br/>';
          print $val->description . '<br/>';
      }
  }
  $s->get('/', function(){
    rechercherec();
  });

  $s->get('/listes', function(){
    rechercherec();
  });

  $s->get('/items/:id', function($id){
    $variablev = Item::where('id','=',$id)->first() ;
    print $variablev;
  });

$s->run();


?>
