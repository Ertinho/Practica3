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
            'name' => $this->fake->randomElement(['Soccer', 'Basketball', 'Tennis', 'Baseball', 'Football', 'Volleyball', 'Golf', 'Hockey', 'Cricket', 'Rugby', 'Badminton', 'Table Tennis', 'Squash', 'Polo', 'Croquet', 'Lacrosse', 'Water Polo', 'Handball', 'Racquetball', 'Softball', 'Paintball', 'Ice Hockey', 'Curling', 'Bowling', 'Billiards', 'Snooker', 'Darts', 'Chess', 'Bridge', 'Checkers', 'Backgammon', 'Go', 'Mahjong', 'Dominoes', 'Poker', 'Gin Rummy', 'Blackjack', 'Solitaire', 'Spades', 'Hearts', 'Euchre', 'Pinochle', 'Canasta', 'Cribbage', 'Rummikub', 'War', 'Crazy Eights', 'Old Maid', 'Uno', 'Go Fish', 'Bridge', 'Checkers', 'Backgammon', 'Go', 'Mahjong', 'Dominoes', 'Poker', 'Gin Rummy', 'Blackjack', 'Solitaire', 'Spades', 'Hearts', 'Euchre', 'Pinochle', 'Canasta', 'Cribbage', 'Rummikub', 'War', 'Crazy Eights', 'Old Maid', 'Uno', 'Go Fish']),
            'description' => $this->fake->sentence,

        ];
    }
}
