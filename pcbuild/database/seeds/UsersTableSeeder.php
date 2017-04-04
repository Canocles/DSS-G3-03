<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
DB::table('users')->delete();
        
        DB::table('users')->insert([
            'nombre' => 'Fernando',
            'email' => 'fernando@pcbuild.com',
            'apellidos' => 'Cortés Pegués',
            'telefono' => 111111111,
            'fechaNacimiento' => '01/01/0001',
            'password' => '1234',
            'direccion' => 'C/xxxxx nºX puerta X'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Alberto',
            'email' => 'alberto@pcbuild.com',
            'apellidos' => 'Otrebal Balotre',
            'telefono' => 222222222,
            'fechaNacimiento' => '02/01/0001',
            'password' => '1234',
            'direccion' => 'C/xxxxx nºX puerta X'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Ramses',
            'email' => 'egocentrimso@pcbuild.com',
            'apellidos' => 'Soy Unaprueba',
            'telefono' => 000000001,
            'fechaNacimiento' => '23/02/1992',
            'password' => '1234',
            'direccion' => 'C/xxxxx nºX puerta X'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Alenadro',
            'email' => 'Alenadro@pcbuild.com',
            'apellidos' => 'Nombre Random',
            'telefono' => 000000002,
            'fechaNacimiento' => '00/00/0000',
            'password' => '1234',
            'direccion' => 'C/xxxxx nºX puerta X'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Arnold',
            'email' => 'comounapiedra@pcbuild.com',
            'apellidos' => 'Scwarzenegger',
            'telefono' => 555555555,
            'fechaNacimiento' => '30/06/1947',
            'password' => '1234',
            'direccion' => 'C/xxxxx nºX puerta X'
        ]);

        $usuario = new User(['nombre' => 'Javier',
                                'email' => 'Javier@pcbuild.com',
                                'apellidos' => 'Gutierrez',
                                'telefono' => 696363545,
                                'fechaNacimiento' => '25/08/2012',
                                'password' => '1234',
                                'direccion' => 'C/inventada']);
        $usuario->save();
    }
}
