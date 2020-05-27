<?php

use Illuminate\Database\Seeder;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $producto = new \App\Product([
          'imagen' => 'img/accesorios-pc.jpg',
          'name' => 'Mouse gamer',
          'stock' => '10',
          'detail' => 'Mouse con botones asignables',
          'price' => 2143,
          'category_id' => 1,
          'brand_id' => 1,
        ]);
        $producto ->save();

        $producto = new \App\Product([
          'imagen' => 'img/accesorios-pc.jpg',
          'name' => 'Mouse gamer',
          'stock' => '10',
          'detail' => 'Mouse con botones asignables',
          'price' => 2143,
          'category_id' => 1,
          'brand_id' => 1,
        ]);
        $producto ->save();

        $producto = new \App\Product([
          'imagen' => 'img/accesorios-pc.jpg',
          'name' => 'Mouse gamer',
          'stock' => '10',
          'detail' => 'Mouse con botones asignables',
          'price' => 2143,
          'category_id' => 1,
          'brand_id' => 1,
        ]);
        $producto ->save();

        $producto = new \App\Product([
          'imagen' => 'img/accesorios-pc.jpg',
          'name' => 'Mouse gamer',
          'stock' => '10',
          'detail' => 'Mouse con botones asignables',
          'price' => 2143,
          'category_id' => 1,
          'brand_id' => 1,
        ]);
        $producto ->save();

        $producto = new \App\Product([
          'imagen' => 'img/accesorios-pc.jpg',
          'name' => 'Mouse gamer',
          'stock' => '10',
          'detail' => 'Mouse con botones asignables',
          'price' => 2143,
          'category_id' => 1,
          'brand_id' => 1,
        ]);
        $producto ->save();
    }
}
