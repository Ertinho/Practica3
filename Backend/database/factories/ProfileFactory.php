<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => $this->fake->name,
            'lastname' => $this->fake->lastName,
            'email' => $this->fake->unique()->safeEmail,
            'city' => $this->fake->city,
            'country' => $this->fake->country,
            'summary' => $this->fake->sentence,
        ];
    }
}
