<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BlogCategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('blog_categories')->delete();
        
        \DB::table('blog_categories')->insert(array (
            0 => 
            array (
                'category_en' => 'Blog',
                'category_in' => 'Blog',
                'created_at' => '2022-09-20 06:24:32',
                'id' => 1,
                'slug' => 'blog',
                'status' => 'active',
                'updated_at' => '2022-09-23 08:06:53',
            ),
            1 => 
            array (
                'category_en' => 'News',
                'category_in' => 'Berita',
                'created_at' => '2022-09-20 06:24:40',
                'id' => 2,
                'slug' => 'news',
                'status' => 'active',
                'updated_at' => '2022-09-23 08:07:01',
            ),
            2 => 
            array (
                'category_en' => 'Press Release',
                'category_in' => 'Press Release',
                'created_at' => '2022-09-20 06:25:03',
                'id' => 3,
                'slug' => 'press-release',
                'status' => 'active',
                'updated_at' => '2022-09-23 08:07:08',
            ),
            3 => 
            array (
                'category_en' => 'Latest News',
                'category_in' => 'Berita Terkini',
                'created_at' => '2022-09-25 06:55:15',
                'id' => 4,
                'slug' => 'Latest-News',
                'status' => 'active',
                'updated_at' => '2022-09-25 06:56:23',
            ),
        ));
        
        
    }
}