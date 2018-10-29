<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoriedetails extends Model
{
    protected $table = 'shop_key_product';
    public $fillable = ['id_categorie'];
   
}
