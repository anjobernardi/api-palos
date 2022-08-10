<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Assets;

class AssetsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Assets::create([
            'id' =>  1,
            'code' => 'Asset 01',
            'qrcode' => '12345678',
            'description' => 'Descrição equipamento 01',
            'active' => 1,
            'created_at' => '2022-08-08',
            'updated_at' => '2022-08-08',
            'tenant_id' => 'abcdefgh',
        ]);
    }
}
