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
            'nombre' => 'Torre',
            'descripcion' => 'Carcasas para salvaguardar los componentes de un dispositivo'
        ]);

        DB::table('categorias')->insert([
            'nombre' => 'Placa base',
            'descripcion' => 'Es una placa base'
        ]);
        
        DB::table('categorias')->insert([
            'nombre' => 'Memoria RAM',
            'descripcion' => 'Es una memoria RAM'
        ]);
        
        DB::table('categorias')->insert([
            'nombre' => 'Tarjeta gráfica',
            'descripcion' => 'Es una tarjeta gráfica'
        ]);
        
        DB::table('categorias')->insert([
            'nombre' => 'Tarjeta de sonido',
            'descripcion' => 'Es una tarjeta de sonido'
        ]);
        
        DB::table('categorias')->insert([
            'nombre' => 'Procesador',
            'descripcion' => 'Es un procesador'
        ]);
        
        DB::table('categorias')->insert([
            'nombre' => 'Disco duro',
            'descripcion' => 'Es un disco duro'
        ]);
        
        DB::table('categorias')->insert([
            'nombre' => 'Ventilación',
            'descripcion' => 'Refrigeración para ordenadores'
        ]);
        
        DB::table('categorias')->insert([
            'nombre' => 'Fuente de alimentación',
            'descripcion' => 'Fuente de alimentación para ordenadores'
        ]);
        
        DB::table('categorias')->insert([
            'nombre' => 'Cable',
            'descripcion' => 'Cables de distintos tipos y funcionalidades'
        ]);
    }
}
