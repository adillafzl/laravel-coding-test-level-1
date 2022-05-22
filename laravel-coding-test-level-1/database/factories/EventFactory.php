<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class EventFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $name = $this->faker->sentence();
        $slug = Str::slug($name, '-');

        return [
                'name' => $name,
                'slug' => $slug,
                'startAt' => now(),
                'endAt' => $this->faker->dateTimeBetween('now', '+05 days'),
        ];
    }
}
