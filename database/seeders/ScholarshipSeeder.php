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
            [
                'title' => 'Beasiswa Laravel Foundation',
                'slug' => 'beasiswa-laravel-foundation',
                'description' => "<p>Beasiswa ini merupakan beasiswa yang diadakan tahunan oleh Laravel Foundation. Laravel Foundation merupakan yayasan yang bergerak di bidang teknologi. Yayasan tersebut merupakan pengembang utama kerangka kerja PHP terkemuka yaitu Laravel.</p><h4>Syarat</h4><ul><li>Belum lulus kuliah pada bulan Desember 2022.</li><li>Memiliki kemampuan dasar pemrograman web.</li><li>Memiliki laptop dan koneksi internet.</li><li>Bersedia mengikuti kursus hingga akhir periode.</li></ul><h4>Manfaat</h4><ul><li>Kesempatan magang di Google untuk 10 lulusan terbaik.</li><li>Mendapatkan uang saku 10 juta/pekan.</li><li><i>Job Matching </i>di akhir periode kursus.</li><li>Menjadi orang tampan dan rupawan.</li></ul><p>Beasiswa ini merupakan beasiswa yang didanai 100% oleh Laravel Foundation. Segera mendaftar karena kuota untuk beasiswa ini hanya tersedia 100 orang. Untuk informasi lebih lengkap, dapat mengunjungi alamat di bawah.</p><p><a href=\"https://laravel-foundation.org/scholarship-2022\">https://laravel-foundation.org/scholarship-2022</a></p><blockquote><p>no reliable sailor was born from his father. all born of his mother.</p></blockquote>",
                'image' => 'setup.jpeg',
                'user_id' => 1,
                'category_id' => 3,
                'start_date' => '2022-12-01',
                'end_date' => '2022-12-31',
            ],
        ];

        foreach ($scholarships as $scholarship) {
            \App\Models\Scholarship::create($scholarship);
        }
    }
}
