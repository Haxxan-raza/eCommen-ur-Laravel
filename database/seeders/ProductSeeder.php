<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
// use App\Models\Product;

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
            'name'=>' L Fridge',
            'price'=>'3000',
            'category'=>' t Fridge',
            'Gallery'=>"https://therichpost.com/wp-content/uploads/2021/04/Laravel-8-Ecommerce-Template-Free-1024x619.png",
            'descripition'=>'this is best also for users'            
        ],
        
        [
            'name'=>' LG fridge',
            'price'=>'300',
            'category'=>'fridge',
            'Gallery'=>"http://chunaputi.com/uploads/products/6096e4a4bd904.webp",
            'descripition'=>'this is  using best for users'            
        ],
        [
            'name'=>' re fridge',
            'price'=>'30000',
            'category'=>'fridge',
            'Gallery'=>"https://therichpost.com/wp-content/uploads/2021/04/Laravel-8-Ecommerce-Template-Free-1024x619.png",
            'descripition'=>'this is best  using best for users'            
        ],
        [
            'name'=>' LG fridge',
            'price'=>'300',
            'category'=>'fridge',
            'Gallery'=>"http://trivenitrade.com//laravel-filemanager/photos/1/sbs2/Untitled%20design%20(11).png",
            'descripition'=>'this is  using  at best for users'            
        ]
    );
    }
    }

