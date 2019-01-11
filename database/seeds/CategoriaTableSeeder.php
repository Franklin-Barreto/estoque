<?php

use Illuminate\Database\Seeder;
use estoque\Http\Models\Categoria;

class CategoriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Categoria::created(['nome'=>'Diversão']);
    }
}
