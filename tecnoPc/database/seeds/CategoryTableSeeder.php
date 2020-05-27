<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $categoria = new \App\category([
        'name_category' => 'Consolas'
      ]);
      $categoria->save();

      $categoria = new \App\category([
        'name_category' => 'Videojuegos'
      ]);
      $categoria->save();

      $categoria = new \App\category([
        'name_category' => 'Celulares'
      ]);
      $categoria->save();

      $categoria = new \App\category([
        'name_category' => 'Computacion'
      ]);
      $categoria->save();

      $categoria = new \App\category([
        'name_category' => 'PowerBank'
      ]);
      $categoria->save();

      $categoria = new \App\category([
        'name_category' => 'Auriculares'
      ]);
      $categoria->save();
    }
}
