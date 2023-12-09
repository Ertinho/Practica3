<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hobbies>
 */
class HobbiesFactory extends Factory
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
            'name' => fake()->randomElement(['Fútbol','Baloncesto','Tenis','Béisbol','Voleibol','Golf','Bádminton','Tenis de mesa','Bolos','Billar','Dardos','Ajedrez','Damas','Mahjong','Dominó','Póker','Blackjack','Solitario','Guerra','Uno','Tenis de mesa','Balonmano','Hockey sobre hielo','Rugby','Ir a pescar']),
            'description' => fake()->sentence(),
        ];
    }
}
