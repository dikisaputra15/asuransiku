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
               'email'=>'admin@gmail.com',
               'password'=> hash::make('admin12345'),
               'roles'=>'admin',
            ],
            [
               'name'=>'Peternak',
               'email'=>'peternak@gmail.com',
               'password'=> hash::make('peternak12345'),
               'roles'=> 'peternak',
            ],
            [
                'name'=>'Staff Bagian Bencana',
                'email'=>'staff@gmail.com',
                'password'=> hash::make('staff12345'),
                'roles'=> 'staff',
             ],
             [
                'name'=>'Kepala Bagian',
                'email'=>'kepala@gmail.com',
                'password'=> hash::make('kepala12345'),
                'roles'=> 'kepala',
             ],
        ];

        foreach ($users as $key => $user) {
            User::create($user);
        }
    }
}
