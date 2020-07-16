<?php

use Illuminate\Database\Seeder;

class TableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'firstname' => 'Babita',
            'lastname' => 'Verma',
            'usertype'=> 'admin',
            'group'=> 'group1',
            'email' => 'babita@gmail.com',
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
