<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('users')->delete();
        
        \DB::table('users')->insert(array (
            0 => 
            array (
                'created_at' => '2022-09-19 06:25:20',
                'email' => 'dev@microad.co.id',
                'email_verified_at' => NULL,
                'id' => 1,
                'name' => 'Dev',
                'password' => '$2y$10$TMqscrXzeQlfzpij46Rq5OobyMBngMILg8ii9Ff.TEbhq.Q1wt5Sa',
                'remember_token' => '7WST77QTUJHFcCYLqoOTiD9LhjZ623scqurUraW5nvVk0icNP3LJRb1IFuTh',
                'updated_at' => '2022-09-19 06:25:20',
            ),
        ));
        
        
    }
}