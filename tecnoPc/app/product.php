<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
     //crear una migracion en git nota:  php artisan make:migration create_directos_table
    protected $fillable = ['imagen','name','detail','price','brand_id','category_id'];
    protected $guarded = [];
    public $timestamp =true;

    public function categoria(){
      return $this->belongsTo('App\Category');
    }

}
