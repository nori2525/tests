<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    protected $guarded = array('id');

    public static $rules = array(
        'product_id' => 'required',
        'name' => 'required',
        'exhibitor' => 'required',
        'price' => 'integer'
    );

    public function getData(){
        return $this->name . '： ' . $this->price . '円';
    }
}
