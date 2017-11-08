<?php

use Illuminate\Database\Seeder;

class StudentTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            [
                'name' => 'Budi',
                'email' => 'budi'.'@gmail.com',
                'password' => bcrypt('budi'),
                'gender' => 'male',
                'active' => 1,
            ],
            [
                'name' => 'Anto',
                'email' => 'anto'.'@gmail.com',
                'password' => bcrypt('anto'),
                'gender' => 'male',
                'active' => 1,
            ],
            [
                'name' => 'Susi',
                'email' => 'susi'.'@gmail.com',
                'password' => bcrypt('susi'),
                'gender' => 'female',
                'active' => 1,
            ],
            [
                'name' => 'Bruno',
                'email' => 'bruno'.'@gmail.com',
                'password' => bcrypt('bruno'),
                'gender' => 'male',
                'active' => 0,
            ],
            [
                'name' => 'Lusiana',
                'email' => 'lusiana'.'@gmail.com',
                'password' => bcrypt('lusiana'),
                'gender' => 'female',
                'active' => 0,
            ],
            [
                'name' => 'Joni',
                'email' => 'joni'.'@gmail.com',
                'password' => bcrypt('joni'),
                'gender' => 'male',
                'active' => 1,
            ],
            [
                'name' => 'Butet',
                'email' => 'butet'.'@gmail.com',
                'password' => bcrypt('butet'),
                'gender' => 'female',
                'active' => 1,
            ],
            [
                'name' => 'Joko',
                'email' => 'joko'.'@gmail.com',
                'password' => bcrypt('joko'),
                'gender' => 'male',
                'active' => 1,
            ]
        ]);
    }
}
