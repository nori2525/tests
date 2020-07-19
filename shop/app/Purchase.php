<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //
    public function getSum(){
        $sum = 0;
        $items = Purchase::all();
        foreach($items as $item){
            $sum += $item['price'];
        }
        return $sum;
    }
    public function getData(){
        return $this->name . '  ' . $this->price . '円';
    }
}
