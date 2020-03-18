<?php
namespace factcli\models;
require 'vendor/autoload.php';

class Client extends \Illuminate\Database\Eloquent\Model{
  protected $table = 'client';
  protected $primaryKey = 'id';
  public $timestamps = false;

  public function factures(){
    return $this->hasMany('\models\Facture', 'client_id');
  }

}

?>
