<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Employer;

class EmployerFactory extends Factory
{
    protected $model = Employer::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->company(),
            'user_id' => \App\Models\User::factory(),
            'email' => $this->faker->unique()->companyEmail(),
            'website' => $this->faker->url(),
        ];
    }
}
