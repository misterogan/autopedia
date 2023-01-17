<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Blog;

class BlogFactory extends Factory
{
    protected $model = Blog::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title_en' => $this->faker->sentence(),
            'title_in' => $this->faker->sentence(),
            'thumbnail' => '',
            'image' => '',
            'description_en' => $this->faker->paragraphs(3,true),
            'description_in' => $this->faker->paragraphs(3,true),
            'status' => 'active',
            'slug' => $this->faker->word(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
