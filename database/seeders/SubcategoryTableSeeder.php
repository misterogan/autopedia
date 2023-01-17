<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class SubcategoryTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('subcategory')->delete();
        
        \DB::table('subcategory')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 1,
                'status' => 'active',
                'subcategory_name_en' => 'Organization Chart',
                'subcategory_name_in' => 'Bagan Organisasi',
                'updated_at' => '2022-09-26 01:51:36',
            ),
            1 => 
            array (
                'category_id' => 1,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 2,
                'status' => 'active',
                'subcategory_name_en' => 'Composition of Membership of BOD & BOC',
                'subcategory_name_in' => 'Susunan Direksi dan Dewan Komisaris',
                'updated_at' => '2022-09-26 01:52:26',
            ),
            2 => 
            array (
                'category_id' => 1,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 3,
                'status' => 'active',
                'subcategory_name_en' => 'BOD Committees',
                'subcategory_name_in' => 'Komite di bawah Dewan Komisaris',
                'updated_at' => '2022-09-26 01:52:49',
            ),
            3 => 
            array (
                'category_id' => 1,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 4,
                'status' => 'active',
                'subcategory_name_en' => 'Internal Audit Unit',
                'subcategory_name_in' => 'Unit Audit Internal',
                'updated_at' => '2022-09-26 01:53:08',
            ),
            4 => 
            array (
                'category_id' => 1,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 5,
                'status' => 'active',
                'subcategory_name_en' => 'Corporate Secretary',
                'subcategory_name_in' => 'Sekretaris Perusahaan',
                'updated_at' => '2022-09-26 01:53:25',
            ),
            5 => 
            array (
                'category_id' => 1,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 6,
                'status' => 'active',
                'subcategory_name_en' => 'Board Manual',
                'subcategory_name_in' => 'Pedoman dan Tata Tertib Kerja',
                'updated_at' => '2022-09-26 01:53:53',
            ),
            6 => 
            array (
                'category_id' => 2,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 7,
                'status' => 'active',
                'subcategory_name_en' => 'Vission, Mission and Corporate Value',
                'subcategory_name_in' => 'Visi, Misi dan Tata Nilai Perusahaan',
                'updated_at' => '2022-09-26 02:18:03',
            ),
            7 => 
            array (
                'category_id' => 2,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 8,
                'status' => 'active',
                'subcategory_name_en' => 'Corporate Governance Report',
                'subcategory_name_in' => 'Laporan Terkait Tata Kelola',
                'updated_at' => '2022-09-26 02:18:27',
            ),
            8 => 
            array (
                'category_id' => 2,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 9,
                'status' => 'active',
                'subcategory_name_en' => 'Sustainability Report',
                'subcategory_name_in' => 'Laporan Keberlanjutan',
                'updated_at' => '2022-09-26 02:20:55',
            ),
            9 => 
            array (
                'category_id' => 2,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 10,
                'status' => 'inactive',
                'subcategory_name_en' => 'Annual Index Report',
                'subcategory_name_in' => 'Indeks Laporan Tahunan',
                'updated_at' => '2022-10-03 08:41:23',
            ),
            10 => 
            array (
                'category_id' => 2,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 11,
                'status' => 'inactive',
                'subcategory_name_en' => 'Corporate Governance Policy',
                'subcategory_name_in' => 'Kebijakan Tata Kelola',
                'updated_at' => '2022-09-26 02:21:54',
            ),
            11 => 
            array (
                'category_id' => 2,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 12,
                'status' => 'active',
                'subcategory_name_en' => 'Supporting Institutions',
                'subcategory_name_in' => 'Lembaga Terkait',
                'updated_at' => '2022-09-26 02:22:07',
            ),
            12 => 
            array (
                'category_id' => 3,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 13,
                'status' => 'active',
                'subcategory_name_en' => 'Articles of Association',
                'subcategory_name_in' => 'Akta Anggaran Dasar',
                'updated_at' => '2022-09-26 02:30:59',
            ),
            13 => 
            array (
                'category_id' => 3,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 14,
                'status' => 'inactive',
                'subcategory_name_en' => 'Others Deed',
                'subcategory_name_in' => 'Akta Lainnya',
                'updated_at' => '2022-09-26 02:31:15',
            ),
            14 => 
            array (
                'category_id' => 4,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 15,
                'status' => 'active',
                'subcategory_name_en' => 'General Shareholders Meeting',
                'subcategory_name_in' => 'RUPS',
                'updated_at' => '2022-09-26 02:33:27',
            ),
            15 => 
            array (
                'category_id' => 4,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 16,
                'status' => 'inactive',
                'subcategory_name_en' => 'Dividend',
                'subcategory_name_in' => 'Dividen',
                'updated_at' => '2022-09-26 02:33:35',
            ),
            16 => 
            array (
                'category_id' => 5,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 17,
                'status' => 'active',
                'subcategory_name_en' => 'CSR Activities',
                'subcategory_name_in' => 'Aktivitas CSR',
                'updated_at' => '2022-09-26 02:37:18',
            ),
            17 => 
            array (
                'category_id' => 6,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 18,
                'status' => 'active',
                'subcategory_name_en' => 'Annual Reports',
                'subcategory_name_in' => 'Laporan Tahunan',
                'updated_at' => '2022-09-26 02:43:10',
            ),
            18 => 
            array (
                'category_id' => 7,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 19,
                'status' => 'active',
                'subcategory_name_en' => 'Financial Report',
                'subcategory_name_in' => 'Laporan Keuangan',
                'updated_at' => '2022-09-26 02:43:56',
            ),
            19 => 
            array (
                'category_id' => 8,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 20,
                'status' => 'active',
                'subcategory_name_en' => 'Investor & Corporate News',
                'subcategory_name_in' => 'Berita Investor & Korporasi',
                'updated_at' => '2022-09-26 02:46:15',
            ),
            20 => 
            array (
                'category_id' => 9,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 21,
                'status' => 'inactive',
                'subcategory_name_en' => 'Autopedia\'s Shareholders',
                'subcategory_name_in' => 'Struktur Organisasi Grup',
                'updated_at' => '2022-10-03 12:30:03',
            ),
            21 => 
            array (
                'category_id' => 9,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 22,
                'status' => 'active',
                'subcategory_name_en' => 'Shareholders Composition',
                'subcategory_name_in' => 'Komposisi Pemegang Saham',
                'updated_at' => '2022-10-07 02:41:34',
            ),
            22 => 
            array (
                'category_id' => 10,
                'created_at' => '2022-09-23 06:51:14',
                'id' => 23,
                'status' => 'active',
                'subcategory_name_en' => 'Stock Analysis',
                'subcategory_name_in' => 'Analisa Saham',
                'updated_at' => '2022-09-26 06:57:35',
            ),
            23 => 
            array (
                'category_id' => 11,
                'created_at' => '2022-10-03 03:15:20',
                'id' => 24,
                'status' => 'active',
                'subcategory_name_en' => 'Organizational Structure',
                'subcategory_name_in' => 'Struktur Organisasi',
                'updated_at' => '2022-10-06 07:41:14',
            ),
            24 => 
            array (
                'category_id' => 11,
                'created_at' => '2022-10-06 09:41:15',
                'id' => 25,
                'status' => 'active',
                'subcategory_name_en' => 'Corporate Structure',
                'subcategory_name_in' => 'Struktur Korporasi',
                'updated_at' => '2022-10-06 09:41:15',
            ),
        ));
        
        
    }
}