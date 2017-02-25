<?php

use Illuminate\Database\Seeder;

class PedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedidos')->delete();

        DB::table('pedidos')->insert([
            'fecha' => date(),
            'id_usuario' => 1
        ]);

        DB::table('pedidos')->insert([
            'fecha' => date(),
            'id_usuario' => 2
        ]);

        DB::table('pedidos')->insert([
            'fecha' => date(),
            'id_usuario' => 3
        ]);

        DB::table('pedidos')->insert([
            'fecha' => date(),
            'id_usuario' => 4
        ]);
        
        DB::table('pedidos')->insert([
            'fecha' => date(),
            'id_usuario' => 5
        ]);
    }
}
