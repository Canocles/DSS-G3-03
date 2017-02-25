<?php

use Illuminate\Database\Seeder;

class ProductosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->delete();

        DB::table('productos')->insert([
            'nombre' => 'Gráfica 1',
            'precio' => 30.00,
            'descripcion' => 'Descripcion detallada'
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Gráfica 2',
            'precio' => 75.95,
            'descripcion' => 'Descripcion detallada'
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Gráfica 3',
            'precio' => 123.72,
            'descripcion' => 'Descripcion detallada'
        ]);

        DB::table('productos')->insert([
            'nombre' => 'CPU 1',
            'precio' => 40.00,
            'descripcion' => 'Descripcion detallada'
        ]);

        DB::table('productos')->insert([
            'nombre' => 'CPU 2',
            'precio' => 80.00,
            'descripcion' => 'Descripcion detallada'
        ]);

        DB::table('productos')->insert([
            'nombre' => 'CPU 3',
            'precio' => 160.00,
            'descripcion' => 'Descripcion detallada'
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Torre 1',
            'precio' => 400.00,
            'descripcion' => 'Descripcion detallada'
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Torre 2',
            'precio' => 900.00,
            'descripcion' => 'Descripcion detallada'
        ]);

        DB::table('productos')->insert([
            'nombre' => 'Torre 3',
            'precio' => 1200.00,
            'descripcion' => 'Descripcion detallada'
        ]);
    }
}
