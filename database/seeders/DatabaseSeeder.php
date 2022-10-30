<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create([
            'name' => 'Dzakiya Ishmatul',
            'email' => 'dishmatul@google.com',
            'password' => bcrypt('12345678'),
        ]);

        $this->call([
            CategorySeeder::class,
            ScholarshipSeeder::class,
        ]);
    }
}
