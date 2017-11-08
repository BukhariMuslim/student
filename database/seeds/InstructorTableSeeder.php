<?php

use Illuminate\Database\Seeder;

class InstructorTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('instructors')->insert([
            [
                'name' => 'Dodi',
                'gender' => 'male',
            ],
            [
                'name' => 'Deni',
                'gender' => 'male',
            ],
            [
                'name' => 'Ani',
                'gender' => 'female',
            ],
            [
                'name' => 'Juni',
                'gender' => 'female',
            ],
            [
                'name' => 'Andi',
                'gender' => 'male',
            ]
        ]);
    }
}
