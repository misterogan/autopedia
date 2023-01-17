<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BannersTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('banners')->delete();
        
        \DB::table('banners')->insert(array (
            0 => 
            array (
                'created_at' => '2022-09-19 08:08:55',
                'id' => 1,
                'image' => 'images/banner/632922268733f.webp',
                'link' => 'https://caroline.id',
                'mobile_image' => 'images/banner/633299171f78a.webp',
                'sequence' => NULL,
                'status' => 'active',
                'updated_at' => '2022-09-27 06:32:55',
            ),
            1 => 
            array (
                'created_at' => '2022-09-19 10:30:33',
                'id' => 2,
                'image' => 'images/banner/6329223d4b3e6.webp',
                'link' => 'https://jba.co.id',
                'mobile_image' => 'images/banner/633299375b767.webp',
                'sequence' => NULL,
                'status' => 'active',
                'updated_at' => '2022-09-27 06:33:27',
            ),
            2 => 
            array (
                'created_at' => '2022-09-20 02:15:52',
                'id' => 3,
                'image' => 'images/banner/6329225880af9.webp',
                'link' => 'https://bursamobil.autopedia.id',
                'mobile_image' => 'images/banner/6336748584fca.png',
                'sequence' => NULL,
                'status' => 'active',
                'updated_at' => '2022-09-30 04:45:57',
            ),
            3 => 
            array (
                'created_at' => '2022-09-20 02:16:12',
                'id' => 4,
                'image' => 'images/banner/6329226c873e8.webp',
                'link' => '/product/cartalog',
                'mobile_image' => 'images/banner/6336738c84c78.png',
                'sequence' => '4',
                'status' => 'active',
                'updated_at' => '2022-09-30 13:37:50',
            ),
        ));
        
        
    }
}