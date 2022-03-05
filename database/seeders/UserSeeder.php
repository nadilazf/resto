<?php

namespace Database\Seeders;
use App\Models\User;
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
            [
                'name' => 'admin1',
                'username' => 'admin1',
                'password' => bcrypt('123'),
                'pass' => '123',
                'role' => 'admin',
            ],

        ];
        User::insert($users);
    }
}