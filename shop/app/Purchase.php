<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    //
    public function getSum(){
        $items = Purchase::all();
        $sum = 0;
        foreach($items as $item){
            $sum += $item['price'];
        }
        return $sum;
    }
    public function getData(){
        return $this->name . '  ' . $this->price . '円';
    }
}
