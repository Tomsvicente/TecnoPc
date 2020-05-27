<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    protected $fillable =['name_category'];
    protected $guarded = [];
    public $timestamp =true;
}
