<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('clients')->insert([
            [
                'identify' => 9999999999999,
                'identify_type' => 'VENTA A CONSUMIDOR FINAL',
                'name' => 'CONSUMIDOR FINAL',
                'email' => 'consumidorfinal@consumidorfinal.com',
                'phone_number' => 9999999999999,
                'address' => 'VENTA A CONSUMIDOR FINAL',
                'updated_at' => \Carbon\Carbon::now()->toIso8601String(),
                'created_at' => \Carbon\Carbon::now()->toIso8601String()
            ]
        ]);
    }
}
