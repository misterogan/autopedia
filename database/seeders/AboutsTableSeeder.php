<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class AboutsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('abouts')->delete();
        
        \DB::table('abouts')->insert(array (
            0 => 
            array (
                'id' => 1,
                'title_en' => 'About Autopedia',
                'title_in' => 'Tentang Autopedia',
            'description_en' => '<p>PT Autopedia Sukses Lestari Tbk (“ASLC”), part of ASSA Group, engages in the automotive sector with businesses ranging from car and motorcycle auctions, online car buying and selling, and as a data provider for car and motorcycle prices.&nbsp;</p><p>Autopedia’s automotive auction business is managed by its Subsidiary, PT JBA Indonesia (JBA), one of the biggest vehicle auctions in Indonesia. On average, JBAI serves more than 100,000 customers annually and consistently maintains 40% of market share. Additionally, Autopedia has launched a brand called <a href="http://www.caroline.id" target="_blank">Caroline</a>, a platform for online and offline (O2O) car buying and selling catered to retail customers.&nbsp;</p><p>Innovation is the key for Autopedia in building the a complete car buying and selling ecosystem, and thus the Company created CARTALOG, the only website which provides information on vehicle prices in Indonesia. This site is equipped with Artificial Intelligence (AI) technology that provides reliable information.&nbsp;</p><p>In accordance with Autopedia\'s vision, which is to become the most trusted omni channel marketplace for automotive, Autopedia will continue to build an ecosystem for buying and selling used vehicles both online and offline for all consumer segments, whether corporate, small businesses or individuals.&nbsp;</p>',
            'description_in' => '<p>PT Autopedia Sukses Lestari Tbk (“ASLC”), bagian dari ASSA Group, memiliki bidang usaha otomotif mulai dari lelang mobil dan motor, jual beli mobil online, dan penyedia data harga mobil dan motor.&nbsp;</p><p>Autopedia menjalankan usaha melalui Entitas Anak yaitu PT JBA Indonesia (JBA), yang saat ini merupakan salah satu nama terbesar dalam bisnis lelang kendaraan di Indonesia. JBAI melayani lebih dari 100,000 pelanggan, dan menjaga market share sebesar 40% secara konsisten. Selain itu, Autopedia telah meluncurkan brand <a href="http://www.caroline.id" target="_blank">Caroline</a>, sebuah platform untuk jual beli mobil online dan offline (O2O) yang melayani pelanggan ritel.</p><p>Inovasi menjadi kunci Autopedia untuk menciptakan ekosistem jual beli mobil yang lengkap sehingga kemudian dikembangkanlah CARTALOG, satusatunya situs penyedia informasi harga kendaraan satu-satunya di Indonesia. Situs ini dibekali dengan teknologi Artificial Intelligence (AI) yang memberikan informasi secara terpercaya.</p><p>Dengam mengedepankan visi menjadi omni channel marketplace terpercaya untuk otomotif, Autopedia akan terus membangun ekosistem jual beli kendaraan bekas baik secara online maupun offline untuk semua segmen konsumen, baik korporasi, usaha kecil maupun individu.</p>',
                'image' => '',
                'created_at' => '2022-09-20 02:17:27',
                'updated_at' => '2022-10-13 04:47:05',
            'short_description_en' => 'PT Autopedia Sukses Lestari (Autopedia) Tbk consists of various automotive-related business fields. Starting with car and motorcycle auctions, moving on to online car buying and selling, and providing data on car and motorcycle prices.',
            'short_description_in' => 'PT Autopedia Sukses Lestari Tbk (“ASLC”) memiliki bidang usaha otomotif mulai dari lelang mobil dan motor, jual beli mobil online, dan penyedia data harga mobil dan motor.',
                'youtube_video_id' => 'txyqnV8WH2w',
            ),
        ));
        
        
    }
}