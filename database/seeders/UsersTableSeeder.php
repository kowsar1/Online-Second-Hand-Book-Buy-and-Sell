<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::create([

            'name'=>'kowsar sorkar',
            'email'=>'kowsar2@gmail.com',
            'password'=>bcrypt('1234'),
            'mobile'=>'01973889923',
            'role'=>'admin'
        ]);
    }
}
