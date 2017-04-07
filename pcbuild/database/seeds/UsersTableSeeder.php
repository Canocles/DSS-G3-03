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
            'telefono' => 697875245,
            'fechaNacimiento' => '01/01/1990',
            'password' => '1234',
            'direccion' => 'C/Inventada'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Alberto',
            'email' => 'alberto@pcbuild.com',
            'apellidos' => 'Otrebal Balotre',
            'telefono' => 691573645,
            'fechaNacimiento' => '02/01/1991',
            'password' => '1234',
            'direccion' => 'C/Inventada'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Paco',
            'email' => 'egocentrismo@pcbuild.com',
            'apellidos' => 'Gutierrez Fernandez',
            'telefono' => 689666365,
            'fechaNacimiento' => '23/02/1992',
            'password' => '1234',
            'direccion' => 'C/Inventada'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Alenadro',
            'email' => 'Alenadro@pcbuild.com',
            'apellidos' => 'Jimenez Panadero',
            'telefono' => 648520334,
            'fechaNacimiento' => '17/05/1936',
            'password' => '1234',
            'direccion' => 'C/Inventada'
        ]);

        DB::table('users')->insert([
            'nombre' => 'Arnold',
            'email' => 'comounapiedra@pcbuild.com',
            'apellidos' => 'Scwarzenegger',
            'telefono' => 646585959,
            'fechaNacimiento' => '30/06/1947',
            'password' => '1234',
            'direccion' => 'C/Inventada'
        ]);

        $usuario = new User(['nombre' => 'Javier',
                                'email' => 'Javier@pcbuild.com',
                                'apellidos' => 'Aura Nieto',
                                'telefono' => 696363545,
                                'fechaNacimiento' => '25/08/2012',
                                'password' => '1234',
                                'direccion' => 'C/inventada']);
        $usuario->save();
    }
}
