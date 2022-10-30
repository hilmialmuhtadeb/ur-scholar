<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ScholarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $scholarships = [
            [
                'title' => 'Beasiswa Pertamina 2022',
                'slug' => 'beasiswa-pertamina-2022',
                'description' => 'Beasiswa Pertamina 2022 adalah beasiswa yang diberikan oleh PT Pertamina kepada mahasiswa/i yang memiliki prestasi akademik yang baik dan memiliki minat untuk mengembangkan diri di bidang teknologi.',
                'image' => 'pertamina.jpg',
                'user_id' => 1,
                'category_id' => 1,
                'start_date' => '2022-01-01',
                'end_date' => '2022-01-31',
            ],
            [
                'title' => 'Beasiswa IDCamp 2022',
                'slug' => 'beasiswa-idcamp-2022',
                'description' => 'Beasiswa IDCamp 2022 diselenggarakan oleh Indonsat Oreedoo dan bekerja sama dengan Dicoding untuk mengembangkan kemampuan para pelajar di bidang teknologi.',
                'image' => 'idcamp.jpg',
                'user_id' => 1,
                'category_id' => 2,
                'start_date' => '2022-02-01',
                'end_date' => '2022-02-14',
            ],
            [
                'title' => 'Pelatihan Digital Marketing',
                'slug' => 'pelatihan-digital-marketing',
                'description' => 'Pelatihan Digital Marketing diselenggarakan oleh Dicoding untuk mengembangkan kemampuan para pelajar di bidang teknologi.',
                'image' => 'default.jpg',
                'user_id' => 1,
                'category_id' => 3,
                'start_date' => '2022-01-01',
                'end_date' => '2022-01-31',
            ],
        ];

        foreach ($scholarships as $scholarship) {
            \App\Models\Scholarship::create($scholarship);
        }
    }
}
