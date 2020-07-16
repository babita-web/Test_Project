<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Babitsa',
            'lastname' => 'Verma',
            'usertype'=> 'admin',
            'group'=> 'group1',
            'email' => 'babiweta@gmail.com',
            'password' => '1234',
        ]);

        DB::table('users')->insert([
            'firstname' => 'Babiata',
            'lastname' => 'Verma',
            'usertype'=> 'admin',
            'group'=> 'group1',
            'email' => 'babitsaa@gmail.com',
            'password' => '1234',
        ]);

        DB::table('users')->insert([
            'firstname' => 'dsBabita',
            'lastname' => 'dVerma',
            'usertype'=> 'actor',
            'group'=> 'group1',
            'email' => 'babit2wwa@gmail.com',
            'password' => '1234',
        ]);


        DB::table('users')->insert([
            'firstname' => 'Babiddta',
            'lastname' => 'Versma',
            'usertype'=> 'admin',
            'group'=> 'group1',
            'email' => 'babitdfda@gmail.com',
            'password' => '1234',
        ]);


    }
}
