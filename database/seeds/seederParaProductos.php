<?php

use Illuminate\Database\Seeder;

class seederParaProductos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('productos')->insert([
    		'nombre'=>'tv',
    		'cantidad'=>10,
    		'marca'=>'apple',
    		'comentario'=>'muy bonitas'
    	]);   
    }
}
