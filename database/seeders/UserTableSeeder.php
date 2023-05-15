<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        DB::table('users')->insert([
            ['name' => 'Ali Humdard', 'email' => 'alihumdard125@gmail.com', 'role'=>'Client', 'password' => Hash::make('12345')],
            ['name' => 'Admin', 'email' => 'admin@gmail.com', 'role'=>'Admin', 'password' => Hash::make('12345')]
        ]);
    }
}
