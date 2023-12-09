<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Framework>
 */
class FrameworkFactory extends Factory
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
            'name' => fake()->randomElement(['Laravel', 'Symfony', 'Django', 'Ruby on Rails', 'Spring', 'Express', 'Flask', 'ASP.NET', 'Meteor', 'Vue.js', 'Angular', 'React', 'Ember.js', 'Backbone.js', 'Node.js', 'Django REST', 'Flask REST', 'Spring REST', 'ASP.NET REST', 'Laravel REST', 'Symfony REST', 'Ruby on Rails REST', 'Express REST', 'Meteor REST', 'Vue.js REST', 'Angular REST', 'React REST', 'Ember.js REST', 'Backbone.js REST', 'Node.js REST', 'Django GraphQL', 'Flask GraphQL', 'Spring GraphQL', 'ASP.NET GraphQL', 'Laravel GraphQL', 'Symfony GraphQL', 'Ruby on Rails GraphQL', 'Express GraphQL', 'Meteor GraphQL', 'Vue.js GraphQL', 'Angular GraphQL', 'React GraphQL', 'Ember.js GraphQL', 'Backbone.js GraphQL', 'Node.js GraphQL']),
            'level' => fake()->randomElement(['Principiante', 'Intermedio', 'Avanzado']),
            'year' => fake()->year(),
        ];
    }
}
