<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\myblog>
 */
class MyblogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        return [
            'Post_title' =>fake()->title(),
            'Post_content'=>fake()->sentence(3,true),
            'Author_name'=>fake()->name(),
            'Publication_Date'=>fake()->dateTime()

        ];
    }
}
