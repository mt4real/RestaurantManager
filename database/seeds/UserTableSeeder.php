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
        \App\User::create([
        
        'name'=>'Busari Mutairu',
        'email'=>'mtreal62@gmail.com',
        'password'=>bcrypt('password'),

        ]);
    }
}
