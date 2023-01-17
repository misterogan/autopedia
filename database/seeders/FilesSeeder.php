<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class FilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create Categories
        $categories = [
            [
                'category_en'   => 'Struktur Organisasi',
                'category_in'   => 'Struktur Organisasi',
                'status'        => 'active',
            ],
            [
                'category_en'   => 'Tata Kelola',
                'category_in'   => 'Tata Kelola',
                'status'        => 'active',
            ],
            [
                'category_en'   => 'Akta Perusahaan',
                'category_in'   => 'Akta Perusahaan',
                'status'        => 'active',
            ],
            [
                'category_en'   => 'Aksi Korporasi',
                'category_in'   => 'Aksi Korporasi',
                'status'        => 'active',
            ],
            [
                'category_en'   => 'CSR',
                'category_in'   => 'CSR',
                'status'        => 'active',
            ],
            [
                'category_en'   => 'Laporan Tahunan',
                'category_in'   => 'Laporan Tahunan',
                'status'        => 'active',
            ],
            [
                'category_en'   => 'Laporan Keuangan',
                'category_in'   => 'Laporan Keuangan',
                'status'        => 'active',
            ],
            [
                'category_en'   => 'Berita Investor & Korporasi',
                'category_in'   => 'Berita Investor & Korporasi',
                'status'        => 'active',
            ],
            [
                'category_en'   => 'Informasi Pemegang Saham',
                'category_in'   => 'Informasi Pemegang Saham',
                'status'        => 'active',
            ],
            [
                'category_en'   => 'Analisa Saham',
                'category_in'   => 'Analisa Saham',
                'status'        => 'active',
            ],
        ];

        foreach ($categories as $key => $category) {
            DB::table('categories')->insert([
                'category_en' => $category['category_en'],
                'category_in' => $category['category_in'],
                'status' => $category['status'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }

        // Create Subcategories
        $subcategories = [
            [
                'category_id'   => '1',
                'subcategory_name_en'   => 'Badan Organisasi',
                'subcategory_name_in'   => 'Badan Organisasi',
            ],
            [
                'category_id'   => '1',
                'subcategory_name_en'   => 'Susunan Direksi dan Dewan Komisaris',
                'subcategory_name_in'   => 'Susunan Direksi dan Dewan Komisaris',
            ],
            [
                'category_id'   => '1',
                'subcategory_name_en'   => 'Komite di bawah Dewan Komisaris',
                'subcategory_name_in'   => 'Komite di bawah Dewan Komisaris',
            ],
            [
                'category_id'   => '1',
                'subcategory_name_en'   => 'Unit Audit Internal',
                'subcategory_name_in'   => 'Unit Audit Internal',
            ],
            [
                'category_id'   => '1',
                'subcategory_name_en'   => 'Sekretaris Perusahaan',
                'subcategory_name_in'   => 'Sekretaris Perusahaan',
            ],
            [
                'category_id'   => '1',
                'subcategory_name_en'   => 'Pedoman dan Tata Tertib Kerja',
                'subcategory_name_in'   => 'Pedoman dan Tata Tertib Kerja',
            ],
            [
                'category_id'   => '2',
                'subcategory_name_en'   => 'Visi, Misi dan Tata Nilai Perusahaan',
                'subcategory_name_in'   => 'Visi, Misi dan Tata Nilai Perusahaan',
            ],
            [
                'category_id'   => '2',
                'subcategory_name_en'   => 'Laporan Terkait Tata Kelola',
                'subcategory_name_in'   => 'Laporan Terkait Tata Kelola',
            ],
            [
                'category_id'   => '2',
                'subcategory_name_en'   => 'Laporan Keberlanjutan',
                'subcategory_name_in'   => 'Laporan Keberlanjutan',
            ],
            [
                'category_id'   => '2',
                'subcategory_name_en'   => 'Indeks Laporan Tahunan',
                'subcategory_name_in'   => 'Indeks Laporan Tahunan',
            ],
            [
                'category_id'   => '2',
                'subcategory_name_en'   => 'Kebijakan Tata Kelola',
                'subcategory_name_in'   => 'Kebijakan Tata Kelola',
            ],
            [
                'category_id'   => '2',
                'subcategory_name_en'   => 'Lembaga Terkait',
                'subcategory_name_in'   => 'Lembaga Terkait',
            ],
            [
                'category_id'   => '3',
                'subcategory_name_en'   => 'Anggaran Dasar',
                'subcategory_name_in'   => 'Anggaran Dasar',
            ],
            [
                'category_id'   => '3',
                'subcategory_name_en'   => 'Akta Lainnya',
                'subcategory_name_in'   => 'Akta Lainnya',
            ],
            [
                'category_id'   => '4',
                'subcategory_name_en'   => 'RUPS',
                'subcategory_name_in'   => 'RUPS',
            ],
            [
                'category_id'   => '4',
                'subcategory_name_en'   => 'Dividen',
                'subcategory_name_in'   => 'Dividen',
            ],
            [
                'category_id'   => '5',
                'subcategory_name_en'   => 'Aktivitas CSR',
                'subcategory_name_in'   => 'Aktivitas CSR',
            ],
            [
                'category_id'   => '6',
                'subcategory_name_en'   => 'Laporan Tahunan',
                'subcategory_name_in'   => 'Laporan Tahunan',
            ],
            [
                'category_id'   => '7',
                'subcategory_name_en'   => 'Laporan Keuangan',
                'subcategory_name_in'   => 'Laporan Keuangan',
            ],
            [
                'category_id'   => '8',
                'subcategory_name_en'   => 'Berita Investor & Korporasi',
                'subcategory_name_in'   => 'Berita Investor & Korporasi',
            ],
            [
                'category_id'   => '9',
                'subcategory_name_en'   => 'Struktur Organisasi Grup',
                'subcategory_name_in'   => 'Struktur Organisasi Grup',
            ],
            [
                'category_id'   => '9',
                'subcategory_name_en'   => 'Komposisi Pemegang Saham',
                'subcategory_name_in'   => 'Komposisi Pemegang Saham',
            ],
            [
                'category_id'   => '10',
                'subcategory_name_en'   => 'Analisa Saham',
                'subcategory_name_in'   => 'Analisa Saham',
            ],  
        ];

        foreach ($subcategories as $key => $subcategory) {
            DB::table('subcategory')->insert([
                'category_id' => $subcategory['category_id'],
                'subcategory_name_en' => $subcategory['subcategory_name_en'],
                'subcategory_name_in' => $subcategory['subcategory_name_in'],
                'status' => 'active',
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
