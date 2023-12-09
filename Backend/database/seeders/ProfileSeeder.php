<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Profile;
use App\Models\Hobbies;
use App\Models\Frameworks;


class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Profile::factory()
        ->count(1)
        ->has(Hobbies::factory()->count(1))
        ->hasFrameworks(1)
        ->create();
    }
}
