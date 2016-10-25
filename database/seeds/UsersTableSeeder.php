<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@mail.mail',
            'password' => bcrypt('123456'),
        ]);
        for ($i=0; $i < 10; $i++) { 
            DB::table('users')->insert([
                'name' => 'user' . $i,
                'email' => str_random(10).'@gmail.com',
                'password' => bcrypt('123456'),
            ]);
        }
    }
}
