<?php
namespace mywishlist\models;
require 'vendor/autoload.php';




class Item extends \Illuminate\Database\Eloquent\Model {
  protected $table = 'item';
  protected $primaryKey = 'id';
  public $timestamps = false;


  public function items(){
    return $this->belongsTo('\models\Liste', 'id');
  }

}

?>
