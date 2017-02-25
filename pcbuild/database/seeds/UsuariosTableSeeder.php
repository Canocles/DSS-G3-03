<?php

use Illuminate\Database\Seeder;

class UsuariosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usuarios')->delete();
        
        DB::table('usuarios')->insert([
            'nombre' => 'Fernando',
            'email' => 'fernando@pcbuild.com',
            'apellidos' => 'Cortés Pegués',
            'telefono' => 111111111,
            'fechaNacimiento' => '01/01/0001'
        ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Alberto',
            'email' => 'alberto@pcbuild.com',
            'apellidos' => 'Otrebal Balotre',
            'telefono' => 222222222,
            'fechaNacimiento' => '02/01/0001'
        ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Ramses',
            'email' => 'egocentrimso@pcbuild.com',
            'apellidos' => 'Soy Unaprueba',
            'telefono' => 000000001,
            'fechaNacimiento' => '23/02/1992'
        ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Alenadro',
            'email' => 'Alenadro@pcbuild.com',
            'apellidos' => 'Nombre Random',
            'telefono' => 000000002,
            'fechaNacimiento' => '00/00/0000'
        ]);

        DB::table('usuarios')->insert([
            'nombre' => 'Arnold',
            'email' => 'comounapiedra@pcbuild.com',
            'apellidos' => 'Scwarzenegger',
            'telefono' => 555555555,
            'fechaNacimiento' => '30/06/1947'
        ]);  
    }
}
