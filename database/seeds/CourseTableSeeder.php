<?php

use Illuminate\Database\Seeder;

class CourseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert(
            [
                'name' => 'Matematika',
                'description' => 'Hitung menghitung',
            ],
            [
                'name' => 'Bahasa Inggris',
                'description' => 'Belajar bahasa asing',
            ],
            [
                'name' => 'Kimia',
                'description' => 'Belajar unsur kimia',
            ],
            [
                'name' => 'Fisika',
                'description' => 'Belajar fisika',
            ]
        );
    }
}
