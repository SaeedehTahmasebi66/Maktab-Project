<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function Product(){
        return $this->belongsTo('App\Models\Product');
    }
}
