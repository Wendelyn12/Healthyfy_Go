<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\User;

class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       User::create([
       'name'   => 'Wendy',
       'email'   => 'prettywendy749@gmail.com',
       'password'   => Hash::make('password'),
       'remember_token' => str_random(10),
       ]);
    }
}
