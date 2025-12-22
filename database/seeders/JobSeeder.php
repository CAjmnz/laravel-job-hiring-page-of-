<?php

namespace Database\Seeders;

use App\Models\Job; // ✅ Import Job model
use Illuminate\Database\Seeder;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Job::factory(200)->create(); // ✅ Now works if JobFactory exists
    }
}
