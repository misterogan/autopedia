<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class MilestonesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('milestones')->delete();
        
        \DB::table('milestones')->insert(array (
            0 => 
            array (
                'created_at' => '2022-11-01 05:10:54',
            'description_en' => '<p><span style="text-align: center;">The Company was established on November 18, 2013, as PT Adi Sarana Lelang (ASL).</span><br></p>',
            'description_in' => '<p><span style="text-align: center;">Perseroan didirikan tanggal 18 November 2013 dengan nama PT Adi Sarana Lelang (ASL).</span><br></p>',
                'id' => 1,
                'image' => 'images/milestone/6360aa5eece43.webp',
                'name' => '2013',
                'status' => 'active',
                'updated_at' => '2022-11-01 05:10:54',
            ),
            1 => 
            array (
                'created_at' => '2022-11-01 05:11:27',
                'description_en' => '<p><span style="text-align: center;">Established the car auction BidWin at Tipar Cakung, Jakarta.</span><br></p>',
            'description_in' => '<p>Mendirikan lelang mobil (car auction) BidWin yang berlokasi di Tipar Cakung, Jakarta.<br></p>',
                'id' => 2,
                'image' => 'images/milestone/6360aa7f50c4f.webp',
                'name' => '2014',
                'status' => 'active',
                'updated_at' => '2022-11-01 05:11:27',
            ),
            2 => 
            array (
                'created_at' => '2022-11-01 05:12:56',
                'description_en' => '<p><span style="text-align: center;">ASL acquired 51% of JBA’s shares, a local vehicle auction, which then merged within BidWin and became JBA Indonesia.</span><br></p>',
                'description_in' => '<p><span style="text-align: center;">ASL mengakuisisi 51% saham JBA, pemain dalam bisnis lelang kendaraan di Indonesia, yang kemudian melebur dengan BidWin dan menjadi JBA Indonesia.</span><br></p>',
                'id' => 3,
                'image' => 'images/milestone/6360aad818836.webp',
                'name' => '2019',
                'status' => 'active',
                'updated_at' => '2022-11-01 05:12:56',
            ),
            3 => 
            array (
                'created_at' => '2022-11-01 05:13:39',
                'description_en' => '<ul><li><span style="text-align: center;">JBA has more than 100,000 customers with potential buying powers across Indonesia. Every week, JBA served more than 1,500 people at the auction.</span></li><li><span style="text-align: center;">JBA’s network spreads across major cities in Indonesia through 18 branches, hubs, and pools.</span></li><li><span style="text-align: center;">ASL changed its name to PT Autopedia Sukses Lestari and became an automotive company with various fields of business including vehicle auction, vehicle sales and purchases, and vehicle information website provider.</span></li><li>Autopedia has developed a car buying and selling service through the “CAROLINE” brand, and a vehicle price information website called “CARTALOG”.</li><li>PT Autopedia Sukses Lestari increased its ownership of PT JBA Indonesia to 84.4%. The additional shares are in connection with Autopedia’s objective to improve its business and as a part of building an ecosystem of integrated used car sales.</li></ul>',
                'description_in' => '<ul><li><span style="text-align: center;">JBA telah melelang lebih dari 103.269 mobil dan 81.373 motor sejak 2011.</span></li><li><span style="text-align: center;">JBA memiliki lebih dari 100.000 pelanggan dengan daya beli potensial di seluruh Indonesia. Rata-rata jumlah peserta lelang setiap minggu mencapai lebih dari 1.500 orang.</span></li><li><span style="text-align: center;">Jaringan lelang JBA tersedia di lebih dari 18 cabang, hub, dan pool di berbagai kota-kota besar di Indonesia.</span></li><li><span style="text-align: center;">ASL berganti nama menjadi PT Autopedia Sukses Lestari dan menjadi perusahaan yang bergerak di bidang otomotif mulai dari lelang kendaraan, jual-beli kendaraan, hingga situs penyedia harga kendaraan.</span></li><li><span style="text-align: center;">Autopedia mengembangkan layanan jual beli mobil melalui merek “CAROLINE” dan situs penyedia data harga mobil dan motor “CARTALOG”. • PT Autopedia Sukses Lestari menambah porsi kepemilikan di PT JBA Indonesia menjadi 84,4%. Penambahan tersebut dilakukan dalam rangka pengembangan bisnis Autopedia dan sebagai bagian pembangunan ekosistem penjualan mobil bekas yang terintegrasi.</span></li></ul>',
                'id' => 4,
                'image' => 'images/milestone/6360ab0380328.webp',
                'name' => '2021',
                'status' => 'active',
                'updated_at' => '2022-11-01 05:13:39',
            ),
            4 => 
            array (
                'created_at' => '2022-11-01 05:14:22',
                'description_en' => '<p><span style="text-align: center;">Conducted an Initial Public Offering and listed its shares on the Indonesia Stock Exchange.</span><br></p>',
                'description_in' => '<p><span style="text-align: center;">Melakukan Penawaran Umum Saham Perdana dan mencatatkan saham Perseroan di Bursa Efek Indonesia.</span><br></p>',
                'id' => 5,
                'image' => 'images/milestone/6360ab2e3ccd3.webp',
                'name' => '2022',
                'status' => 'active',
                'updated_at' => '2022-11-01 05:14:22',
            ),
        ));
        
        
    }
}