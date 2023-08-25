<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'name' => 'John ',
            'surname'=>'Doe',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456789'),
            'city'=>'Rajkot',
            'student'=>'student',
            'gender'=>'male',
            'active'=>'1',
            'telephone'=>'0123456789',
            'fitness'=>'labour',
            'card_number'=>'234534342343',
            'card_code'=>'012',
            'role'=>'admin',
            'email_verified_at'=>'2023-08-05 20:52:18',
        ]);
        \App\Models\User::factory()->create([
            'name' => 'user',
            'surname'=>'yadav',
            'email' => 'user@gmail.com',
            'password' => bcrypt('123456789'),
            'city'=>'Rajkot',
            'student'=>'student',
            'gender'=>'male',
            'active'=>'1',
            'telephone'=>'0123456789',
            'fitness'=>'other',
            'card_number'=>'234534342343',
            'card_code'=>'012',
            'dob'=>'2023-08-11',
            'role'=>'user',
            'email_verified_at'=>'2023-08-05 20:52:18',
        ]);
        \App\Models\setting_plan::create([

            'start_date'=>'2023-08-12',
            'end_date'=>'2023-12-12',
            'price'=>'320',
            'no_entries'=>'20',
            'solarium_min'=>'200',
            'user_id'=>2,

        ]);
    }
}
