<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PortoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->sentence(mt_rand(2,6)),
            'category_id' => mt_rand(1,2),
            'user_id' => mt_rand(1,3),
            'slug' => $this->faker->slug(),
            'image' => $this->faker->imageUrl(1000, 360, 'animals', true, 'cats'),
            'place' => $this->faker->sentence(mt_rand(2,6)),
            'dateporto' => $this->faker->date(),
            'desc' => '<p>' . implode('</p><p>', $this->faker->paragraphs(mt_rand(5,10))) . '</p>' ,
            'excerpt' => $this->faker->paragraph(),
        ];
    }
}
