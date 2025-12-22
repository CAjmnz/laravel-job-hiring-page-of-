<?php

namespace Database\Factories;

use App\Models\Job;
use Illuminate\Database\Eloquent\Factories\Factory;

class JobFactory extends Factory
{
    protected $model = Job::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->jobTitle(),
            'salary' => '$' . $this->faker->numberBetween(40000, 120000),
            'employer_id' => 1, // or factory(User::class) if you want random employers
        ];
    }
}
