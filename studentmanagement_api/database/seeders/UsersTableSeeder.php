<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::insert([
        [
            'name' =>  'Maruf Nishan',
            'email' => 'mdnishan102@gmail.com',
            'phone' => '01718863771',
            'password' => Hash::make('password'),
            'utype' => 'man',
        ],
        [
            'name' =>  'Student',
            'email' => 'student@gmail.com',
            'phone' => '01708582044',
            'password' => Hash::make('password'),
            'utype' => 'std',
        ],
        [
            'name' =>  'Teacher',
            'email' => 'teacher@gmail.com',
            'phone' => '01708582040',
            'password' => Hash::make('password'),
            'utype' => 'tea',
        ]
    ]);
    }
}
