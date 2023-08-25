<?php

namespace Database\Seeders;

use App\Models\setting_plan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingPlanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        setting_plan::create([
            'perms_tenure' => 'Yearly',
            'start_date' => '2023-08-12',
            'end_date' => '2023-12-12',
            'price' => '320',
            'note' => 'dsadsadsadsdsad',
            'user_id' => 2,
        ]);
    }
}
