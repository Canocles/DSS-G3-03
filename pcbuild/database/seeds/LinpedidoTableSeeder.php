<?php

use Illuminate\Database\Seeder;

class LinpedidoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('linpedido')->delete();

        DB::table('linpedido')->insert([
            'num' => 1,
            'cantidad' => 1,
            'producto' => 2,
            'pedido' => 1
        ]);

        DB::table('linpedido')->insert([
            'num' => 2,
            'cantidad' => 3,
            'producto' => 5,
            'pedido' => 1
        ]);

        DB::table('linpedido')->insert([
            'num' => 3,
            'cantidad' => 2,
            'producto' => 1,
            'pedido' => 1
        ]);

        DB::table('linpedido')->insert([
            'num' => 1,
            'cantidad' => 1,
            'producto' => 1,
            'pedido' => 2
        ]);

        DB::table('linpedido')->insert([
            'num' => 2,
            'cantidad' => 5,
            'producto' => 6,
            'pedido' => 2
        ]);

        DB::table('linpedido')->insert([
            'num' => 1,
            'cantidad' => 4,
            'producto' => 2,
            'pedido' => 3
        ]);

        DB::table('linpedido')->insert([
            'num' => 2,
            'cantidad' => 1,
            'producto' => 4,
            'pedido' => 3
        ]);

        DB::table('linpedido')->insert([
            'num' => 3,
            'cantidad' => 1,
            'producto' => 2,
            'pedido' => 3
        ]);

        DB::table('linpedido')->insert([
            'num' => 4,
            'cantidad' => 1,
            'producto' => 5,
            'pedido' => 3
        ]);

        DB::table('linpedido')->insert([
            'num' => 1,
            'cantidad' => 1,
            'producto' => 1,
            'pedido' => 4
        ]);

        DB::table('linpedido')->insert([
            'num' => 1,
            'cantidad' => 1,
            'producto' => 2,
            'pedido' => 5
        ]);

        DB::table('linpedido')->insert([
            'num' => 1,
            'cantidad' => 1,
            'producto' => 1,
            'pedido' => 6
        ]);

        DB::table('linpedido')->insert([
            'num' => 1,
            'cantidad' => 1,
            'producto' => 1,
            'pedido' => 7
        ]);

        DB::table('linpedido')->insert([
            'num' => 1,
            'cantidad' => 1,
            'producto' => 1,
            'pedido' => 8
        ]);

        DB::table('linpedido')->insert([
            'num' => 1,
            'cantidad' => 1,
            'producto' => 1,
            'pedido' => 9
        ]);
    }
}
