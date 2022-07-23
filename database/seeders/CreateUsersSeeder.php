<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
               'fullname' => 'Data Test',
               'username'=>'Admin User',
               'email'=>'admin@itsolutionstuff.com',
               'type'=>1,
               'password'=> bcrypt('12345678'),
            ],
            [
               'fullname' => 'Data Test',
               'username'=>'Manager User',
               'email'=>'manager@itsolutionstuff.com',
               'type'=> 2,
               'password'=> bcrypt('12345678'),
            ],
            [
               'fullname' => 'Data Test',
               'username'=>'User',
               'email'=>'user@itsolutionstuff.com',
               'type'=>0,
               'password'=> bcrypt('12345678'),
            ],
            [
                'fullname' => 'Data Test',
                'username'=>'Bayu',
                'email'=>'bayu@gmail.com',
                'type'=>0,
                'password'=> bcrypt('12345678'),
            ],
            [
                'fullname' => 'Data Test',
                'username'=>'Bambang',
                'email'=>'bambang@gmail.com',
                'type'=>0,
                'password'=> bcrypt('12345678'),
            ],
            [
                'fullname' => 'Data Test',
                'username'=>'test1',
                'email'=>'test1@gmail.com',
                'type'=>0,
                'password'=> bcrypt('12345678'),
            ],
            [
                'fullname' => 'Data Test',
                'username'=>'test2',
                'email'=>'test2@gmail.com',
                'type'=>0,
                'password'=> bcrypt('12345678'),
            ],
            [
                'fullname' => 'Data Test',
                'username'=>'test3',
                'email'=>'test3@gmail.com',
                'type'=>0,
                'password'=> bcrypt('12345678'),
            ],
            [
                'fullname' => 'Data Test',
                'username'=>'test4',
                'email'=>'test4@gmail.com',
                'type'=>0,
                'password'=> bcrypt('12345678'),
            ],
            [
                'fullname' => 'Data Test',
                'username'=>'test5',
                'email'=>'test5@gmail.com',
                'type'=>0,
                'password'=> bcrypt('12345678'),
            ],
            [
                'fullname' => 'Data Test',
                'username'=>'test6',
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
