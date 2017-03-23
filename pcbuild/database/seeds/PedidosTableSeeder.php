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
            'fecha' => date('d/m/Y'),
            'user_id' => 1
        ]);

        DB::table('pedidos')->insert([
            'fecha' => date('d/m/Y'),
            'user_id' => 2
        ]);

        DB::table('pedidos')->insert([
            'fecha' => date('d/m/Y'),
            'user_id' => 3
        ]);

        DB::table('pedidos')->insert([
            'fecha' => date('d/m/Y'),
            'user_id' => 4
        ]);
        
        DB::table('pedidos')->insert([
            'fecha' => date('d/m/Y'),
            'user_id' => 5
        ]);

        DB::table('pedidos')->insert([
            'fecha' => date('d/m/Y'),
            'user_id' => 1
        ]);
    }
}
