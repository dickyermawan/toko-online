<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Product::create([
            "name" => "Produk A",
            "description" => "Deskripsi Produk A created by model"
        ]);
    }
}
