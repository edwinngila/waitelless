<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Customer::factory(20)->create();
        \App\Models\Cancellation::factory(10)->create();
        \App\Models\WaitList::factory(10)->create();
        \App\Models\Teller::factory(5)->create();
    }
}
