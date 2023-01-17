<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AdditionalUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert(array (
            0 => 
            array (
                'name' => 'Autopedia HRD',
                'email' => 'recruitment@autopedia.id',
                'email_verified_at' => NULL,
                'password' => '$2y$10$TMqscrXzeQlfzpij46Rq5OobyMBngMILg8ii9Ff.TEbhq.Q1wt5Sa', // password
                'remember_token' => '7WST77QTUJHFcCYLqoOTiD9LhjZ623scqurUraW5nvVk0icNP3LJRb1IFuTh',
                'created_at' => now(),
                'updated_at' => now(),
            ),
        ));
    }
}
