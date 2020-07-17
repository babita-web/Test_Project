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
            'firstname' => 'abc',
            'lastname' => 'def',
            'usertype'=> 'admin',
            'group'=> 'group1',
            'email' => 'abc@gmail.com',
            'password' => '$2y$10$C3W/PsskBsyCEom/ylnCGeHgYssuSofz1mcS7IyRv7.FXnoaY6y7u',
        ]);

        DB::table('users')->insert([
            'firstname' => 'dda',
            'lastname' => 'dsd',
            'usertype'=> 'admin',
            'group'=> 'group1',
            'email' => 'neelshyguy@gmail.com',
            'password' => '11111111',
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
