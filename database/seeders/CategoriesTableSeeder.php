<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'category_en' => 'Organizational Structure',
                'category_in' => 'Struktur Organisasi',
                'created_at' => '2022-09-23 06:51:14',
                'icon' => 'images/category/6334f75a2a56b.svg',
                'id' => 1,
                'menu' => 'tata-kelola-perusahaan',
                'sequence' => 1,
                'slug' => 'struktur-organisasi',
                'status' => 'active',
                'updated_at' => '2022-09-29 01:39:38',
            ),
            1 => 
            array (
                'category_en' => 'Good Corporate Governance',
                'category_in' => 'Tata Kelola',
                'created_at' => '2022-09-23 06:51:14',
                'icon' => 'images/category/6334f8dd0c19f.svg',
                'id' => 2,
                'menu' => 'tata-kelola-perusahaan',
                'sequence' => 2,
                'slug' => 'tata-kelola',
                'status' => 'active',
                'updated_at' => '2022-09-29 01:46:05',
            ),
            2 => 
            array (
                'category_en' => 'Deed of Company',
                'category_in' => 'Akta Perusahaan',
                'created_at' => '2022-09-23 06:51:14',
                'icon' => 'images/category/6334f8ec60878.svg',
                'id' => 3,
                'menu' => 'tata-kelola-perusahaan',
                'sequence' => 3,
                'slug' => 'akta-perusahaan',
                'status' => 'active',
                'updated_at' => '2022-09-29 01:46:20',
            ),
            3 => 
            array (
                'category_en' => 'Corporate Action',
                'category_in' => 'Aksi Korporasi',
                'created_at' => '2022-09-23 06:51:14',
                'icon' => 'images/category/6334f8fd21e6a.svg',
                'id' => 4,
                'menu' => 'tata-kelola-perusahaan',
                'sequence' => 4,
                'slug' => 'aksi-korporasi',
                'status' => 'active',
                'updated_at' => '2022-09-29 01:46:37',
            ),
            4 => 
            array (
                'category_en' => 'Corporate Social Responsibility',
                'category_in' => 'Corporate Social Responsibility',
                'created_at' => '2022-09-23 06:51:14',
                'icon' => 'images/category/6334f907ca924.svg',
                'id' => 5,
                'menu' => 'tata-kelola-perusahaan',
                'sequence' => 5,
                'slug' => 'csr',
                'status' => 'active',
                'updated_at' => '2022-09-29 01:46:47',
            ),
            5 => 
            array (
                'category_en' => 'Annual Reports',
                'category_in' => 'Laporan Tahunan',
                'created_at' => '2022-09-23 06:51:14',
                'icon' => 'images/category/6334f86dde44c.svg',
                'id' => 6,
                'menu' => 'hubungan-investor',
                'sequence' => 1,
                'slug' => 'laporan-tahunan',
                'status' => 'active',
                'updated_at' => '2022-09-29 01:44:13',
            ),
            6 => 
            array (
                'category_en' => 'Financial Report',
                'category_in' => 'Laporan Keuangan',
                'created_at' => '2022-09-23 06:51:14',
                'icon' => 'images/category/6334f8971264c.svg',
                'id' => 7,
                'menu' => 'hubungan-investor',
                'sequence' => 2,
                'slug' => 'laporan-keuangan',
                'status' => 'active',
                'updated_at' => '2022-10-03 07:38:52',
            ),
            7 => 
            array (
                'category_en' => 'Investor & Corporate News',
                'category_in' => 'Berita Investor & Korporasi',
                'created_at' => '2022-09-23 06:51:14',
                'icon' => 'images/category/6334f8a055414.svg',
                'id' => 8,
                'menu' => 'hubungan-investor',
                'sequence' => 3,
                'slug' => 'berita-investor-korporasi',
                'status' => 'active',
                'updated_at' => '2022-10-03 07:39:12',
            ),
            8 => 
            array (
                'category_en' => 'Shareholders Information',
                'category_in' => 'Informasi Pemegang Saham',
                'created_at' => '2022-09-23 06:51:14',
                'icon' => 'images/category/6334f8be5c9f3.svg',
                'id' => 9,
                'menu' => 'hubungan-investor',
                'sequence' => 4,
                'slug' => 'informasi-pemegang-saham',
                'status' => 'active',
                'updated_at' => '2022-10-03 07:39:33',
            ),
            9 => 
            array (
                'category_en' => 'Stock Analysis',
                'category_in' => 'Analisa Saham',
                'created_at' => '2022-09-23 06:51:14',
                'icon' => 'images/category/6334f8caa3e03.svg',
                'id' => 10,
                'menu' => 'hubungan-investor',
                'sequence' => 5,
                'slug' => 'analisa-saham',
                'status' => 'active',
                'updated_at' => '2022-10-03 07:39:51',
            ),
            10 => 
            array (
                'category_en' => 'Organizational Structure & Corporation',
                'category_in' => 'Struktur Organisasi & Korporasi',
                'created_at' => '2022-10-03 03:14:25',
                'icon' => 'images/category/633a5391b719b.svg',
                'id' => 11,
                'menu' => 'info-perusahaan',
                'sequence' => 1,
                'slug' => 'organization-structure-corporation-BXnUW1HDLXhMVtew',
                'status' => 'active',
                'updated_at' => '2022-10-06 07:41:31',
            ),
        ));
        
        
    }
}