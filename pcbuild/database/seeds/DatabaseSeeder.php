<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriasTableSeeder::class);
        $this->call(ProductosTableSeeder::class);
        $this->call(UsersTableSeeder::class);
        $this->call(PedidosTableSeeder::class);
        $this->call(LinpedidosTableSeeder::class);
    }
}
