<?php

use Illuminate\Database\Seeder;

class LinpedidosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('linpedidos')->delete();

        DB::table('linpedidos')->insert([
            'num' => 1,
            'cantidad' => 1,
            'producto_id' => 2,
            'pedido_id' => 1
        ]);

        DB::table('linpedidos')->insert([
            'num' => 2,
            'cantidad' => 3,
            'producto_id' => 5,
            'pedido_id' => 1
        ]);

        DB::table('linpedidos')->insert([
            'num' => 3,
            'cantidad' => 2,
            'producto_id' => 1,
            'pedido_id' => 1
        ]);

        DB::table('linpedidos')->insert([
            'num' => 1,
            'cantidad' => 1,
            'producto_id' => 1,
            'pedido_id' => 2
        ]);

        DB::table('linpedidos')->insert([
            'num' => 2,
            'cantidad' => 5,
            'producto_id' => 6,
            'pedido_id' => 2
        ]);

        DB::table('linpedidos')->insert([
            'num' => 1,
            'cantidad' => 4,
            'producto_id' => 2,
            'pedido_id' => 3
        ]);

        DB::table('linpedidos')->insert([
            'num' => 2,
            'cantidad' => 1,
            'producto_id' => 4,
            'pedido_id' => 3
        ]);

        DB::table('linpedidos')->insert([
            'num' => 3,
            'cantidad' => 1,
            'producto_id' => 5,
            'pedido_id' => 3
        ]);

        DB::table('linpedidos')->insert([
            'num' => 1,
            'cantidad' => 1,
            'producto_id' => 1,
            'pedido_id' => 4
        ]);

        DB::table('linpedidos')->insert([
            'num' => 1,
            'cantidad' => 4,
            'producto_id' => 1,
            'pedido_id' => 5
        ]);

        DB::table('linpedidos')->insert([
            'num' => 2,
            'cantidad' => 1,
            'producto_id' => 6,
            'pedido_id' => 5
        ]);

        DB::table('linpedidos')->insert([
            'num' => 3,
            'cantidad' => 1,
            'producto_id' => 7,
            'pedido_id' => 5
        ]);
    }
}
