<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(StudentTableSeeder::class);
        $this->call(CourseTableSeeder::class);
        $this->call(InstructorTableSeeder::class);
        $this->call(PaymentTableSeeder::class);
    }
}
