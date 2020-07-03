<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function getData(){
        return $this->name . '： ' . $this->price . '円';
    }
}
