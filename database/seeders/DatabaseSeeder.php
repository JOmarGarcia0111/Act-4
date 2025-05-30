<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Superheroe
;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        $this->call([
            GenderSeeder::class,
            UniverseSeeder::class,
            UserSeeder::class
        ]); 

       /* User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);*/

        Superheroe::factory(100)->create();
    }
}