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
            'fecha' => "19/09/1998",
            'user_id' => 1
        ]);

        DB::table('pedidos')->insert([
            'fecha' => "24/07/2006",
            'user_id' => 2
        ]);

        DB::table('pedidos')->insert([
            'fecha' => "09/11/2014",
            'user_id' => 3
        ]);

        DB::table('pedidos')->insert([
            'fecha' => "11/12/2016",
            'user_id' => 4
        ]);
        
        DB::table('pedidos')->insert([
            'fecha' => "30/01/2011",
            'user_id' => 5
        ]);

        DB::table('pedidos')->insert([
            'fecha' => "24/02/2017",
            'user_id' => 1
        ]);

        DB::table('pedidos')->insert([
            'fecha' => "14/06/2016",
            'user_id' => 3
        ]);

        DB::table('pedidos')->insert([
            'fecha' => "06/04/2017",
            'user_id' => 4
        ]);

        DB::table('pedidos')->insert([
            'fecha' => "30/09/2016",
            'user_id' => 1
        ]);
    }
}
