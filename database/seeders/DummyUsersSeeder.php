<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userdata = [
            [
                'username'=>'admin',
                'name'=>'masoperator',
                'email'=>'operator@gmail.com',
                'level'=>'admin',
                'password'=>bcrypt('123456'),
            ],
            [
                'username'=>'user1',
                'name'=>'user1',
                'email'=>'admin1@gmail.com',
                'level'=>'user',
                'password'=>bcrypt('123456'),
            ],
            [
                'username'=>'user',
                'name'=>'user2',
                'email'=>'admin2@gmail.com',
                'level'=>'user',
                'password'=>bcrypt('123456'),
            ],
        ];

        foreach ($userdata as $key => $val){
            User::create($val);
        }
    }
}
