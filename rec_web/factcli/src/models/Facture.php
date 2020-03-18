<?php
namespace factcli\models;
require 'vendor/autoload.php';

class Facture extends \Illuminate\Database\Eloquent\Model{
  protected $table = 'facture';
  protected $primaryKey = 'id';
  public $timestamps = false;

  public function clients(){
    return $this->belongsTo('\models\Client', 'client_id');
  }
}


?>
