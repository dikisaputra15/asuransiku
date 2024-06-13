<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $users = [
            [
               'name'=>'Admin',
               'email'=>'admin@admin.com',
               'password'=> hash::make('admin12345'),
               'roles'=>0,
            ],
            [
               'name'=>'User',
               'email'=>'user@user.com',
               'password'=> hash::make('user12345'),
               'roles'=> 1,
            ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
