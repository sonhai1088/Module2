<?php

use Illuminate\Database\Seeder;

class student_data extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('table_student')->insert([
                'name' => str_random(10),
                'age' => mt_rand(10,80)
            ]);
        }
    }
}
