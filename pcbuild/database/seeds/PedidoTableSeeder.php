<?php

use Illuminate\Database\Seeder;

class PedidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedido')->delete();

        DB::table('pedido')->insert([
            'fecha' => date(),
            'id_usuario' => 1
        ]);

        DB::table('pedido')->insert([
            'fecha' => date(),
            'id_usuario' => 2
        ]);

        DB::table('pedido')->insert([
            'fecha' => date(),
            'id_usuario' => 3
        ]);

        DB::table('pedido')->insert([
            'fecha' => date(),
            'id_usuario' => 4
        ]);
        
        DB::table('pedido')->insert([
            'fecha' => date(),
            'id_usuario' => 5
        ]);
    }
}
