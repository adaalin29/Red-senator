<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
    public function dogs(){
       return $this->hasMany('App\Dog','tip_categorie','id');
    }
}
