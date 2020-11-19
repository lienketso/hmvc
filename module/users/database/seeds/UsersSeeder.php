<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    public function run(){
        DB::table('users')->insert([
            [
                'email'=>'thanhan1507@gmail.com',
                'password'=>bcrypt('@lks2020@'),
                'full_name'=>'Administrator',
                'status'=>'active'
            ],
            [
                'email'=>'mod@lienketso.vn',
                'password'=>bcrypt('123456'),
                'full_name'=>'Contener',
                'status'=>'disabled'
            ]
        ]);
    }
}
