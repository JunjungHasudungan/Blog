<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            'name'          => 'Hasudungan',
            'email'         => 'hasudungan@gmail.com',
            'password'      => bcrypt('hasudungan18'),
        ];  

        User::insert($users);
    }
}
