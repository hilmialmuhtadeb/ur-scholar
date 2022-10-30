<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'id' => 1,
                'name' => 'Pendidikan',
            ],
            [
                'id' => 2,
                'name' => 'Kursus',
            ],
            [
                'id' => 3,
                'name' => 'Workshop',
            ],
            [
                'id' => 4,
                'name' => 'Lainnya',
            ],
        ];

        foreach ($categories as $category) {
            \App\Models\Category::create($category);
        }
    }
}
