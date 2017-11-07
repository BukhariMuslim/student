<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class PaymentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payments')->insert(
            [
                'code' => str_random(10),
                'student_id' => 1,
                'course_id' => 1,
                'instructor_id' => 1,
                'amount' => 300000,
                'date' => new Carbon(),
            ],
            [
                'code' => str_random(10),
                'student_id' => 3,
                'course_id' => 2,
                'instructor_id' => 3,
                'amount' => 350000,
                'date' => new Carbon(),
            ],
            [
                'code' => str_random(10),
                'student_id' => 1,
                'course_id' => 2,
                'instructor_id' => 3,
                'amount' => 350000,
                'date' => new Carbon(),
            ],
            [
                'code' => str_random(10),
                'student_id' => 2,
                'course_id' => 2,
                'instructor_id' => 3,
                'amount' => 350000,
                'date' => new Carbon(),
            ],
            [
                'code' => str_random(10),
                'student_id' => 1,
                'course_id' => 2,
                'instructor_id' => 4,
                'amount' => 320000,
                'date' => new Carbon(),
            ]
        );
    }
}
