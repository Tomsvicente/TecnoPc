<?php

use Illuminate\Database\Seeder;

class BrandTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $marca = new \App\brand([
          'name' => 'Asus'
        ]);
        $marca -> save();

        $marca = new \App\brand([
          'name' => 'Logitech'
        ]);
        $marca -> save();

        $marca = new \App\brand([
          'name' => 'Razer'
        ]);
        $marca -> save();

        $marca = new \App\brand([
          'name' => 'Intel'
        ]);
        $marca -> save();

    }
}
