<?php

namespace Database\Seeders;

use App\Models\Article;
use App\Models\Greeting;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
//         User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        Greeting::create([
            'text' => 'Hello',
        ]);
        Greeting::create([
            'text' => 'Hi',
        ]);
        Greeting::create([
            'text' => 'ሰላም',
        ]);
        Greeting::create([
            'text' => 'Hola',
        ]);
        Article::factory()->count(10)->create();
    }
}
