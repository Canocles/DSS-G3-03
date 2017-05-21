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

        
    }
}
