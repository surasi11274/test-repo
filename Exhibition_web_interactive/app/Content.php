<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class Content extends Model
{
    protected $fillable = [
        'header','title','category','content','credit','image'
    ];
}
