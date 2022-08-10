<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

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
            'name' => 'André',
            'email' => 'anjobernardi@msn.com',
            'password' => bcrypt('12345678'),
            'created_at' => '2022-08-08',
            'updated_at' => '2022-08-08'
        ]);
    }
}
