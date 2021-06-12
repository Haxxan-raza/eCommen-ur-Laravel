<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('products')->insert([
            'name'=>' LG Fridge',
            'price'=>'30000',
            'category'=>'Fridge',
            'Gallery'=>'https://unsplash.com/s/photos/fridge',
            'descripition'=>'this is best also for users'            
        ],
        [
            'name'=>' LG fridge',
            'price'=>'30000',
            'category'=>'fridge',
            'Gallery'=>'https://trivenitrade.com/product/sansui-spd560sbs-refrigerator-560ltr',
            'descripition'=>'this is  using best for users'            
        ]);
    }
    }

