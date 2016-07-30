<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(cultiva\User::class)-> create([
            'name' => 'ADMIN',
            'firstlastname' => '1234',
            'secondlastname' => '1234',
            'password' => '1234',
            'state_id' => '1',
            'municipalities_id' => '1',
            'typeuser' => '1',
            'status' => '1',
            'email' => 'admin@gmail.com'
            ]);
        factory(cultiva\User::class)-> create([
            'name' => 'Heder',
            'firstlastname' => '1234',
            'secondlastname' => '1234',
            'password' => '1234',
            'state_id' => '1',
            'municipalities_id' => '1',
            'typeuser' => '1',
            'status' => '1',
            'email' => 'heder@gmail.com'
            ]);
        //factory(Sisec\User::class, 100)-> create();

        /*\DB::table('users')->insert(array(
            'name' => ,
            'firstlastname' => $faker->lastname,
            'secondlastname' => $faker->lastname,
            'email' => $faker->email,
            'state' => $faker->state,
            'zone' => $faker->regexify('Norte|Sur'),
            'celphone' => $faker->phoneNumber,
            'phone' => $faker->phoneNumber,
            'role_id' => $role_id,
            'enterprice_id' => $enterprice_id,
            'id_curp' => $faker->name,
            'password' => bcrypt(str_random(10)),
        ));*/
        	
    }
}
