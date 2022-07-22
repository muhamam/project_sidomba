<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

// teestere
class CreateUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin User',
               'email'=>'admin@itsolutionstuff.com',
               'type'=>1,
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'Manager User',
               'email'=>'manager@itsolutionstuff.com',
               'type'=> 2,
               'password'=> bcrypt('12345678'),
            ],
            [
               'name'=>'User',
               'email'=>'user@itsolutionstuff.com',
               'type'=>0,
               'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'Bayu',
                'email'=>'bayu@gmail.com',
                'type'=>0,
                'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'Bambang',
                'email'=>'bambang@gmail.com',
                'type'=>0,
                'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'test1',
                'email'=>'test1@gmail.com',
                'type'=>0,
                'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'test2',
                'email'=>'test2@gmail.com',
                'type'=>0,
                'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'test3',
                'email'=>'test3@gmail.com',
                'type'=>0,
                'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'test4',
                'email'=>'test4@gmail.com',
                'type'=>0,
                'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'test5',
                'email'=>'test5@gmail.com',
                'type'=>0,
                'password'=> bcrypt('12345678'),
            ],
            [
                'name'=>'test6',
                'email'=>'test6@gmail.com',
                'type'=>0,
                'password'=> bcrypt('12345678'),
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
