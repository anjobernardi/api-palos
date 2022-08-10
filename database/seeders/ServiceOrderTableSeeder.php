<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ServiceOrder;

class ServiceOrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ServiceOrder::create([
            'id' => 1,
            'asset_id' => '1',
            'user_id' => '1',
            'description' => 'teste',
            'priority' => 'P',
            'status' => 'S',
            'created_at' => '2022-08-08',
            'updated_at' => '2022-08-08',
            'tenant_id' => 'abcdefgh'
        ]);
    }
}
