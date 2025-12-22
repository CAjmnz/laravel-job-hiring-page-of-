<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Employer;
use App\Models\Job;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a user
        $user = User::factory()->create([
            'first_name' => 'John',
            'last_name'  => 'Doe',
            'email'      => 'test@example.com',
        ]);

        // Create an employer tied to that user
        $employer = Employer::create([
            'name' => 'Acme Corp',
            'email' => 'hr@acme.test',
            'website' => 'https://acme.test',
            'user_id' => $user->id,
        ]);

        // Create jobs linked to this employer
        Job::create([
            'title' => 'Software Engineer',
            'salary' => '$100000',
            'employer_id' => $employer->id,
        ]);

        Job::create([
            'title' => 'Data Analyst',
            'salary' => '$85000',
            'employer_id' => $employer->id,
        ]);
    }
}   
