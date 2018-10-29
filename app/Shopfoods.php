<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shopfoods extends Model
{
   protected $table = 'shopfoods';
   public $fillable = ['name', 'slug', 'shopfood_active'];

   // public function shopfood(){
   // 	return $this->belongstoMany('App\Categories', 'categoriedetails', 'id', 'id_categorie');
   // }
}
