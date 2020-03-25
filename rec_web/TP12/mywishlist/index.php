<?php
require 'vendor/autoload.php';

use \mywishlist\models\Item as Item;
use \mywishlist\models\Liste as Liste;

$s= new \Slim\Slim();
/*CONFIGURATION*/
//établit la connexion avec la bd
use \Illuminate\Database\Capsule\Manager as DB;

$db = new DB();
$db->addConnection(parse_ini_file('src/conf/conf.ini'));

$db->setAsGlobal();
$db->bootEloquent();


/*RECHERCHE BASIQUE*/
//liste la liste liste
echo "LA LISTE \n" . "<br/>";

$listes = Liste::select( 'no', 'titre', 'description' )
->get();
foreach($listes as $val){
    print $val->no . '<br/>';
    print $val->titre . '<br/>';
    print $val->description . '<br/>';
}

//liste la liste item
echo "LES ITEMS \n" . "<br/>";

$items = Item::select( 'id', 'nom', 'descr' )
->get();
foreach($items as $val){
    print $val->id . '<br/>';
    print $val->nom . '<br/>';
    print $val->descr . '<br/>';
}

/*RECHERCHE D'UN ID EN PARTICULIER PASSE EN PARAM*/
//affcihage item d'un item en particulier
if(isset($_GET['a']))
    $a=$_GET['a'];
else
    $a = 26;

$items = Item::select( 'id', 'nom', 'descr' )
                ->where( 'id', '=', $a )
                ->first();//il affiche uniquement id a

print 'item demande : ' . $items . '<br/><br/>';


/*INSERTION D'UN ITEM ET AJOUT A LA TABLE LISTE*/

$l = new Liste();
$l->user_id = 4;
$l->titre = 'Pour mon anniv!';
$l->description = 'Je veux plein de jeux pour mon anniv';
$l->expiration = '2020-10-01';
$l->token = 'nosecure4';
$l->save();



$i = new Item();
$i->liste_id = 4;
$i->nom = 'Obscurio';
$i->descr = 'Jeu de société type Mysterium';
$i->img = 'film.jpg';
$i->url = '';
$i->tarif = 40.0;
$i->save();

$items = Item::select( 'id', 'nom', 'descr' )
                ->where( 'id', '=', 28 )
                ->first();

print 'item nouveau : ' . $items . '<br/><br/>';
/*
//indiquer le nom de la liste de souhait dans la liste des ITEMS

$s=



// lister les items d0ine liste donnée dont l'id est passé en parametre

$l=$v->Liste::where('id', '=', 3)->first();

*/

$s->get('/hello/world', function (){
  echo "Hello, World !";
});

$s->run();

 ?>
