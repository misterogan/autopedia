<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Job;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Job>
 */
class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->sentence(),
            'location' => $this->faker->sentence(),
            'job_type' => $this->faker->word(),
            'description_en' => $this->faker->paragraphs(3,true),
            'description_in' => $this->faker->paragraphs(3,true),
            'status' => 'active',
            'slug' => $this->faker->word(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
