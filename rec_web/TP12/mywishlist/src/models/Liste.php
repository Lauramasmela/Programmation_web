<?php

namespace mywishlist\models;
require 'vendor/autoload.php';


class Liste extends \Illuminate\Database\Eloquent\Model {
  protected $table = 'liste';
  protected $primaryKey = 'no';
  public $timestamps = false;

  public function liste(){
    return $this->hasMany('\models\Item', 'no');
  }



}
?>
