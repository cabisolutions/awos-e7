<?php

use App\Articulo;
use Illuminate\Database\Seeder;

class ArticulosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cantidad = 10;
        factory(Articulo::class, $cantidad)->create();
    }
}
