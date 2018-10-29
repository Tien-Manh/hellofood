<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    public $fillable = ['cate_name', 'cate_slug', 'cate_active'];

   // public function category()
   //  {
   //  	return $this->belongstoMany('App\Shopfoods', 'categoriedetails', 'id', 'id_categorie');
   //  }
}
