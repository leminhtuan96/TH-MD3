<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\Status;
use Illuminate\Database\Seeder;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        products::factory(5)->create();
        $product = new Product();
        $product->shop = 'chi nhanh ha tay';
        $product->phone = '0961360165';
        $product->email = 'abc1@example.com';
        $product->address = 'ha noi';
        $product->name = 'tuan';
        $product->status_id = 1;
        $product->save();

        $product = new Product();
        $product->shop = 'chi nhanh ha dong';
        $product->phone = '09613601333';
        $product->email = 'abc2@example.com';
        $product->address = 'ha noi';
        $product->name = 'tuan asas';
        $product->status_id = 1;
        $product->save();

        $product = new Product();
        $product->shop = 'chi nhanh ha noi';
        $product->phone = '0961360165';
        $product->email = 'abc3@example.com';
        $product->address = 'ha noi';
        $product->name = 'tuan mo';
        $product->status_id = 1;
        $product->save();
    }

}
