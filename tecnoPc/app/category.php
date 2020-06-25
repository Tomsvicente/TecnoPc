<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable =['name_category'];
    protected $guarded = [];
    public $timestamp =true;

    public function productos(){
      return $this->hasMany('App\Product');
    }

    public function scopeSearchCategory($query , $name_category){

      return $query->where('id','=',$name_category);
    }
}
