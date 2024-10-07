<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'name'=>'Producto 1',
            'short_description'=>'Descripcion corta producto 1',
            'description'=>'Descripcion larga del producto 1',
            'price'=>20
        ]);
        Product::create([
            'name'=>'Producto 2',
            'short_description'=>'Descripcion corta producto 2',
            'description'=>'Descripcion larga del producto 2',
            'price'=>30
        ]);
        Product::create([
            'name'=>'Producto 3',
            'short_description'=>'Descripcion corta producto 3',
            'description'=>'Descripcion larga del producto 3',
            'price'=>30
        ]);
    }
}
