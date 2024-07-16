<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DashboardDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('dashboard_data')->insert([
            [
                'metric_name' => 'Total Customers Served Today',
                'metric_value' => 29,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'metric_name' => 'Total cancelled Customers',
                'metric_value' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'metric_name' => 'Waiting in line',
                'metric_value' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'metric_name' => 'Active Tellers',
                'metric_value' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'metric_name' => 'Weekly Served Customers',
                'metric_value' => 53,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'metric_name' => 'Monthly Customers',
                'metric_value' => 120,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
