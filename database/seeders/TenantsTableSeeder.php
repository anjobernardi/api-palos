<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Tenants;

class TenantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tenants::create([
            'id' => 'abcdefgh',
            'created_at' => '2022-08-08',
            'updated_at' => '2022-08-08'
        ]);
    }
}
