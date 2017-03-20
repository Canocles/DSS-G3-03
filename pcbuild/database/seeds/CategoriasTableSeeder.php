<?php

use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categorias')->delete();

        DB::table('categorias')->insert([
            'nombre' => 'CPU',
            'descripcion' => 'Es una CPU'
        ]);
        
        DB::table('categorias')->insert([
            'nombre' => 'Tarjeta gráfica',
            'descripcion' => 'Pos una tarjeta gráfica'
        ]);
        
        DB::table('categorias')->insert([
            'nombre' => 'Torre',
            'descripcion' => 'Es una torre'
        ]);
        
        DB::table('categorias')->insert([
            'nombre' => 'Otros',
            'descripcion' => 'Otras cosas'
        ]);
    }
}
