<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $param = [
            'product_id' => 'A100',
            'name' => 'テレビ',
            'Exhibitor' => 'A社',
            'price' => 30000,
        ];
        DB::table('products')->insert($param);

        $param = [
            'product_id' => 'B100',
            'name' => 'ジャケット',
            'Exhibitor' => 'B社',
            'price' => 15000,
        ];
        DB::table('products')->insert($param);

        $param = [
            'product_id' => 'C100',
            'name' => '教科書',
            'Exhibitor' => 'C社',
            'price' => 3000,
        ];
        DB::table('products')->insert($param);
    }
}
