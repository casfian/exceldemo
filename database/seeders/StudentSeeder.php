<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create();

         for ($loop = 0; $loop < 5; $loop++) {
            DB::table("students")->insert([
                "name" => $faker->name(),
                "term1_marks" => $faker->numberBetween(10, 100),
                "term2_marks" => $faker->numberBetween(10, 100),
                "term3_marks" => $faker->numberBetween(10, 100),
                "term4_marks" => $faker->numberBetween(10, 100),
                "term5_marks" => $faker->numberBetween(10, 100),
                "remark" => $faker->randomElement(["Good", "Excellent", "Stupid", "Not bad"])
            ]);
         }       
        
    }
}
