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
            'name' => 'Syahrul Ramadhan',
            'email' => 'syahrul@gmail.com',
            'password' => bcrypt('password'),
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Hilmi Almuhtade',
            'email' => 'hilmi@gmail.com',
            'password' => bcrypt('password'),
        ]);

        $this->call([
            CategorySeeder::class,
            ScholarshipSeeder::class,
        ]);
    }
}
