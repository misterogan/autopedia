<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BusinessFeaturesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('business_features')->delete();
        
        \DB::table('business_features')->insert(array (
            0 => 
            array (
                'business_id' => 1,
                'created_at' => '2022-09-19 14:37:45',
                'features_description_en' => '<p>Find your dream car at Caroline with the best offer along with various payment method for your convenience.</p>',
                'features_description_in' => '<p>Temukan mobil impian anda di Caroline dan dapatkan penawaran menarik serta berbagai kemudahan pilihan pembayaran.<br></p>',
                'features_image' => 'images/business/features/633e69a5105ab.png',
                'features_status' => 'active',
                'features_title' => 'Buy',
                'features_title_in' => 'Beli',
                'id' => 1,
                'updated_at' => '2022-10-06 05:37:41',
            ),
            1 => 
            array (
                'business_id' => 1,
                'created_at' => '2022-09-19 14:39:11',
                'features_description_en' => '<p>Having trouble selling your car? Worry no more! Caroline will purchase your car with the best price and and you will receive your money under 60 minutes!<br></p>',
                'features_description_in' => '<p>Susah jual mobil? Langsung kunjungi Caroline dan mobil kamu akan langsung kami beli dengan harga terbaik dan uang akan langsung ditransfer ke rekeningmu kurang dari 60 menit!</p>',
                'features_image' => 'images/business/features/633e69af71300.png',
                'features_status' => 'active',
                'features_title' => 'Sell',
                'features_title_in' => 'Jual',
                'id' => 2,
                'updated_at' => '2022-10-06 05:37:51',
            ),
            2 => 
            array (
                'business_id' => 1,
                'created_at' => '2022-09-19 14:40:13',
                'features_description_en' => '<p>Interested to trade in your old car? No worries, Caroline will give the best offer for your vehicle!</p>',
                'features_description_in' => '<p>Ingin tukar tambah mobil lamamu dengan stok Caroline? Tentu bisa, dan pastinya mobilmu akan dihargai dengan penawaran terbaik dari Caroline!<br></p>',
                'features_image' => 'images/business/features/633e69b936126.png',
                'features_status' => 'active',
                'features_title' => 'Trade In',
                'features_title_in' => 'Tukar Tambah',
                'id' => 3,
                'updated_at' => '2022-10-06 05:38:01',
            ),
            3 => 
            array (
                'business_id' => 1,
                'created_at' => '2022-09-19 14:40:55',
                'features_description_en' => '<p>In addition to provide used cars with best quality, Caroline also provides a wide selection of new cars at the best prices!<br></p>',
                'features_description_in' => '<p>Selain menyediakan mobil bekas berkualitas, Caroline juga menyediakan berbagai pilihan mobil baru dengan harga terbaik!<br></p>',
                'features_image' => 'images/business/features/633e69c4cfdc4.png',
                'features_status' => 'active',
                'features_title' => 'New Car',
                'features_title_in' => 'Mobil Baru',
                'id' => 4,
                'updated_at' => '2022-10-06 05:38:12',
            ),
            4 => 
            array (
                'business_id' => 2,
                'created_at' => '2022-09-20 01:17:06',
                'features_description_en' => '<p>JBA Indonesia services are now available through Android and iOS applications, making it easier for customers to bid anywhere and anytime.<br></p>',
                'features_description_in' => '<p>Layanan JBA Indonesia saat ini sudah bisa diakses melalui aplikasi Android dan IOS sehingga memudahkan pelanggan untuk melakukan bidding dimanapun dan kapanpun.</p>',
                'features_image' => 'images/business/features/633cf2988c976.png',
                'features_status' => 'active',
                'features_title' => 'Live Bidding',
                'features_title_in' => 'Live Bidding',
                'id' => 5,
                'updated_at' => '2022-10-05 02:57:28',
            ),
            5 => 
            array (
                'business_id' => 2,
                'created_at' => '2022-09-20 01:26:26',
                'features_description_en' => '<p>The buying and selling process at JBA uses an auction system that is supervised by a legal entity. In addition, all JBA branches are equipped with a 24-hour security system.</p>',
                'features_description_in' => '<p>Seluruh proses jual beli di JBA hanya dengan sistem lelang yang diawasi oleh badan hukum dan seluruh cabang JBA dilengkapi sistem keamanan 24 jam.<br></p>',
                'features_image' => 'images/business/features/633cf2d24b5fb.png',
                'features_status' => 'active',
                'features_title' => 'Safe and Legal',
                'features_title_in' => 'Aman dan Legal',
                'id' => 6,
                'updated_at' => '2022-10-05 02:58:26',
            ),
            6 => 
            array (
                'business_id' => 2,
                'created_at' => '2022-09-20 01:27:22',
                'features_description_en' => '<p>JBA currently has 14 branches and 17 hubs/pools strategically located with an increasing number of auction networks in order to strengthen JBA\'s services.<br></p>',
                'features_description_in' => '<p>Saat ini JBA memiliki 14 cabang dan 17 hub/pool yang berlokasi strategis dengan jumlah jaringan lelang yang terus berkembang untuk meningkatkan layanan JBA.</p>',
                'features_image' => 'images/business/features/633cf2e0c42c2.png',
                'features_status' => 'active',
                'features_title' => 'Extensive Network',
                'features_title_in' => 'Jaringan Lelang Luas',
                'id' => 7,
                'updated_at' => '2022-10-05 02:58:40',
            ),
            7 => 
            array (
                'business_id' => 2,
                'created_at' => '2022-09-20 01:28:26',
                'features_description_en' => '<p>JBA offers a variety of programs that are easily accessible to consignors and buyers such as One JBA Membership, Flexi Pay, Instant Pay, and JBA Kredit that can meet the various needs of JBA customers.<br></p>',
                'features_description_in' => '<p>JBA membuat berbagai program yang mudah diakses untuk penitip unit maupun peserta lelang, seperti One JBA Membership, Flexi Pay, Instant Pay, dan JBA Kredit yang dapat menjadi solusi dari berbagai kebutuhan pelanggan JBA.</p>',
                'features_image' => 'images/business/features/633cf305e2be1.png',
                'features_status' => 'active',
                'features_title' => 'Customer Reward Program',
                'features_title_in' => 'Program Pelanggan',
                'id' => 8,
                'updated_at' => '2022-10-05 02:59:17',
            ),
            8 => 
            array (
                'business_id' => 2,
                'created_at' => '2022-09-20 01:30:36',
                'features_description_en' => '<p>Each vehicle auctioned on JBA goes through a taxation process and the results are attached to the vehicle information on the website, the application, and the information attached to the vehicles in the pool.<br></p>',
                'features_description_in' => '<p>Setiap kendaraan yang dilelang di JBA selalu melalui proses taksasi yang hasilnya terlampir di website, aplikasi, atau langsung menempel pada kendaraan di setiap pool.<br></p>',
                'features_image' => 'images/business/features/633cf3364a05c.png',
                'features_status' => 'active',
                'features_title' => 'Vehicle History Record',
                'features_title_in' => 'Dokumen Histori Kendaraan',
                'id' => 9,
                'updated_at' => '2022-10-05 03:00:06',
            ),
            9 => 
            array (
                'business_id' => 2,
                'created_at' => '2022-09-20 01:31:41',
                'features_description_en' => '<p>All JBA auction sites have comfortable auction rooms, as well as locker rooms for auction participants who will inspect the vehicle in the pool. Consignors are also assured that all vehicles registered in the JBA pool receive maintenance and care for vehicle safety.<br></p>',
                'features_description_in' => '<p>Di seluruh jaringan lelang JBA tersedia ruang lelang yang nyaman bagi para serta lelang. Juga, dilengkapi dengan ruang loker untuk para peserta lelang yang akan melakukan pengecekan unit lelang di pool. Bagi para pemilik kendaraan lelang juga mendapat jaminan bahwa seluruh kendaraan yang masuk pool JBA akan mendapat perawatan dan pemeliharaan keamanan kendaraan.<br></p>',
                'features_image' => 'images/business/features/633cf34177e47.png',
                'features_status' => 'active',
                'features_title' => 'Well Equipped and Comfortable Facilities',
                'features_title_in' => 'Fasilitas Lengkap dan Nyaman',
                'id' => 10,
                'updated_at' => '2022-10-05 03:00:17',
            ),
            10 => 
            array (
                'business_id' => 3,
                'created_at' => '2022-09-20 01:38:58',
                'features_description_en' => '<p>All seller registered on BMA have been verified to ensure credibility.<br></p>',
                'features_description_in' => '<p>Seluruh penjual yang terdaftar di Bursa Mobil Autopedia telah terverifikasi sehingganya pastinya kredibel.</p>',
                'features_image' => 'images/business/features/633cfab1c5d4c.png',
                'features_status' => 'active',
                'features_title' => 'Verified Seller',
                'features_title_in' => 'Penjual Mobil Terverifikasi',
                'id' => 11,
                'updated_at' => '2022-10-05 03:32:01',
            ),
            11 => 
            array (
                'business_id' => 3,
                'created_at' => '2022-09-20 01:40:06',
                'features_description_en' => '<p>Interested with a car listed at BMA? Pay the booking fee for only IDR 2 million to safely book your dream car. Applies to all unit listed on BMA.<br></p>',
                'features_description_in' => '<p>Minat dengan mobil dari Bursa Mobil? Anda cukup membayar Booking fee senilai IDR 2 juta per unit. Nominal booking fee sama untuk semua tipe unit di BMA.</p>',
                'features_image' => 'images/business/features/633cfabad95e7.png',
                'features_status' => 'active',
                'features_title' => 'Fixed Rate Booking Fee',
                'features_title_in' => 'Fixed Rate Booking Fee',
                'id' => 12,
                'updated_at' => '2022-10-05 03:32:10',
            ),
            12 => 
            array (
                'business_id' => 3,
                'created_at' => '2022-09-20 01:41:06',
                'features_description_en' => '<p>All cars listed at BMA have passed initial inspection from professional team to guarantee the best quality in every car!<br></p>',
                'features_description_in' => '<p>Seluruh mobil yang dijual telah melewati inspeksi dari tim professional sehingga kondisi mobil terjamin kualitasnya!<br></p>',
                'features_image' => 'images/business/features/633cfac3c75d4.png',
                'features_status' => 'active',
                'features_title' => 'Car Inspection With Transparent Result',
                'features_title_in' => 'Inspeksi Mobil Dengan Hasil Transparan',
                'id' => 13,
                'updated_at' => '2022-10-05 03:32:19',
            ),
            13 => 
            array (
                'business_id' => 3,
                'created_at' => '2022-09-20 01:42:00',
                'features_description_en' => '<p>Listed price does not meet the budget? No worries, BMA has a negotiation feature that will help buyer and seller get the best deal.<br></p>',
                'features_description_in' => '<p>Harganya kurang cocok? Tenang, BMA punya fitur negosiasi yang akan membantu pembeli dan penjual untuk mencapai kesepakatan harga terbaik.<br></p>',
                'features_image' => 'images/business/features/633cfacced261.png',
                'features_status' => 'active',
                'features_title' => 'Negotiate the Price According to your Wishes',
                'features_title_in' => 'Negosiasi Harga Sesuai Keinginan',
                'id' => 14,
                'updated_at' => '2022-10-05 03:32:28',
            ),
            14 => 
            array (
                'business_id' => 3,
                'created_at' => '2022-09-20 01:50:29',
                'features_description_en' => '<p>Buyers can directly inspect desired car at the nearest BMA location.<br></p>',
                'features_description_in' => '<p>Pembeli dapat melihat langsung kondisi mobil di pool BMA terdekat.<br></p>',
                'features_image' => 'images/business/features/633cfad4d6cbb.png',
                'features_status' => 'active',
                'features_title' => 'Check The Car Condition Right Away',
                'features_title_in' => 'Cek Langsung Kondisi. Mobil',
                'id' => 15,
                'updated_at' => '2022-10-05 03:32:36',
            ),
            15 => 
            array (
                'business_id' => 3,
                'created_at' => '2022-09-20 01:51:32',
                'features_description_en' => '<p>Same with the sellers, all buyers registered on BMA are credible after passing the checking and verification process.<br></p>',
                'features_description_in' => '<p>Seluruh pembeli yang terdaftar di Bursa Mobil Autopedia juga telah melalui pengecekan dan terverifikasi sehingga calon pembeli pastinya kredibel!</p>',
                'features_image' => 'images/business/features/633cfadbce462.png',
                'features_status' => 'active',
                'features_title' => 'Verified Buyers',
                'features_title_in' => 'Pembeli Telah Terverifikasi',
                'id' => 16,
                'updated_at' => '2022-10-05 03:32:43',
            ),
            16 => 
            array (
                'business_id' => 3,
                'created_at' => '2022-09-20 01:52:44',
                'features_description_en' => '<p>Low commission with fixed amount only IDR 1 million for every car sale through BMA.<br></p>',
                'features_description_in' => '<p>Komisi rendah dengan nominal fix untuk setiap penjualan mobil melalui BMA senilai IDR 1 juta rupiah.<br></p>',
                'features_image' => 'images/business/features/633cfae2a4fc6.png',
                'features_status' => 'active',
                'features_title' => 'Fix Rate Commission',
                'features_title_in' => 'Komisi Fix Rate',
                'id' => 17,
                'updated_at' => '2022-10-05 03:32:50',
            ),
            17 => 
            array (
                'business_id' => 3,
                'created_at' => '2022-09-20 01:53:38',
                'features_description_en' => '<p>With extensive list of buyers will increase the chance to sell your car quicker.<br></p>',
                'features_description_in' => '<p>Prospek Pembeli dari seluruh Indonesia memudahkan Anda untuk menjual mobil dengan cepat.<br></p>',
                'features_image' => 'images/business/features/633cfaead2404.png',
                'features_status' => 'active',
                'features_title' => 'Registered Buyers Coming From All Over Indonesia',
                'features_title_in' => 'Jaringan Pembeli Dari Seluruh Indonesia',
                'id' => 18,
                'updated_at' => '2022-10-05 03:32:58',
            ),
            18 => 
            array (
                'business_id' => 4,
                'created_at' => '2022-09-20 01:59:21',
                'features_description_en' => '<ul><li>The service can be used by car dealers who have been verified as JBA members.</li><li>Submissions are approved within the same day.</li></ul>',
                'features_description_in' => '<ul><li>Layanan langsung dapat digunakan oleh dealer mobil yang sudah terverifikasi sebagai member JBA.</li><li>Pengajuan langsung disetujui di hari yang sama.</li></ul>',
                'features_image' => 'images/business/features/632934d33dfbe.png',
                'features_status' => 'active',
                'features_title' => 'Safe, Quick, & Easy',
                'features_title_in' => 'Mudah, Cepat, & Aman',
                'id' => 19,
                'updated_at' => '2022-09-20 03:34:43',
            ),
            19 => 
            array (
                'business_id' => 4,
                'created_at' => '2022-09-20 01:59:57',
                'features_description_en' => '<p>Up to 90% of the auction price will be funded for JBA auction winners. You can buy a car from JBA Indonesia with only 10% of the forming price.<br></p>',
                'features_description_in' => '<p>Pembiayaan bagi pemenang lelang JBA hingga 90% dari harga lelang yang terbentuk. Anda&nbsp;<span style="font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">dapat melakukan pembelian mobil di JBA Indonesia hanya dengan modal 10% dari harga&nbsp;</span><span style="font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">terbentuk.</span></p>',
                'features_image' => 'images/business/features/632934987c243.png',
                'features_status' => 'active',
                'features_title' => 'High Loan Funds',
                'features_title_in' => 'Dana Pinjaman Tinggi',
                'id' => 20,
                'updated_at' => '2022-09-20 03:33:44',
            ),
            20 => 
            array (
                'business_id' => 4,
                'created_at' => '2022-09-20 02:00:37',
                'features_description_en' => '<p>With Autopedia Gadai, you may buy up to three cars on the same day for a total of 30 million.<br></p>',
                'features_description_in' => '<p>Anda dapat melakukan pembelian mobil sampai dengan 3 unit dalam 1 hari yang sama&nbsp;<span style="font-family: Nunito, -apple-system, BlinkMacSystemFont, &quot;Segoe UI&quot;, Roboto, &quot;Helvetica Neue&quot;, Arial, sans-serif, &quot;Apple Color Emoji&quot;, &quot;Segoe UI Emoji&quot;, &quot;Segoe UI Symbol&quot;, &quot;Noto Color Emoji&quot;; font-size: 1rem;">dengan layanan Autopedia Gadai, hanya dengan modal 10 juta per mobil.</span></p>',
                'features_image' => 'images/business/features/63293513738ee.png',
                'features_status' => 'active',
                'features_title' => 'Buy 3 Cars For Only IDR 30 Million',
                'features_title_in' => 'Modal 30 Juta Bisa Bawa Pulang 3 Mobil',
                'id' => 21,
                'updated_at' => '2022-09-20 03:35:47',
            ),
            21 => 
            array (
                'business_id' => 4,
                'created_at' => '2022-09-20 03:37:04',
            'features_description_en' => '<p>During the Pawn period (15 to 30 days), you can still market and sell your pawn vehicle to customers, as long as the vehicle remains in the Autopedia Gadai showroom at JBA Meruya. You can invite customers to Autopedia Gadai showroom for a car showing.<br></p>',
            'features_description_in' => '<p>Selama periode Gadai berlangsung (antara 15 – 30 hari), Anda tetap dapat memasarkan dan menjual mobil yang Anda gadaikan ke pelanggan Anda dengan catatan mobil akan tetap berada di showroom Autopedia Gadai di JBA Meruya. Anda dapat mengundang pelanggan ke showroom Autopedia Gadai untuk showing kendaraan.</p>',
                'features_image' => 'images/business/features/63293560794fc.png',
                'features_status' => 'active',
                'features_title' => 'Make Profit From Your Pawned Vehicle',
                'features_title_in' => 'Kendaraan Di Titip Di Autopedia Gadai',
                'id' => 22,
                'updated_at' => '2022-09-20 03:37:04',
            ),
            22 => 
            array (
                'business_id' => 4,
                'created_at' => '2022-09-20 03:37:44',
                'features_description_en' => '<p>The administration fee is only 1% of the loan value or the auction price formed.<br></p>',
                'features_description_in' => '<p>Biaya administrasi hanya 1% dari nilai pinjaman atau harga lelang yang terbentuk.<br></p>',
                'features_image' => 'images/business/features/63293588dff11.png',
                'features_status' => 'active',
                'features_title' => 'Low Administration Fee',
                'features_title_in' => 'Biaya Administrasi Ringan',
                'id' => 23,
                'updated_at' => '2022-09-20 03:37:44',
            ),
            23 => 
            array (
                'business_id' => 5,
                'created_at' => '2022-09-20 03:51:47',
                'features_description_en' => '<p>Artificial intelligence-based ideal pricing recommendations make it simpler for car dealers or retailers to buy and sell cars.</p>',
                'features_description_in' => '<p>Rekomendasi harga ideal berbasis teknologi Artificial Intelligence yang memudahkan individu ataupun mitra dealer dalam proses jual beli mobil.</p>',
                'features_image' => 'images/business/features/633cfbec6dcb5.png',
                'features_status' => 'active',
                'features_title' => 'Pricing Engine',
                'features_title_in' => 'Pricing Engine',
                'id' => 24,
                'updated_at' => '2022-10-05 03:37:16',
            ),
            24 => 
            array (
                'business_id' => 5,
                'created_at' => '2022-09-20 03:52:30',
                'features_description_en' => '<p>This feature is useful for listing and managing units for car sellers, both dealers and retailers.</p>',
                'features_description_in' => '<p>Dealer jual beli mobil maupun individu yang ingin menjual mobil dapat memanfaatkan fitur ini untuk listing dan mengelola stock unit.<br></p>',
                'features_image' => 'images/business/features/633cfbf6039b0.png',
                'features_status' => 'active',
                'features_title' => 'Digital Showroom',
                'features_title_in' => 'Showroom Digital',
                'id' => 25,
                'updated_at' => '2022-10-05 03:37:26',
            ),
            25 => 
            array (
                'business_id' => 5,
                'created_at' => '2022-09-20 03:53:46',
                'features_description_en' => '<p>The technology can provide optimal prices based on pricing engine data, making it easier for clients to select the best price in the car buying and selling process.</p>',
                'features_description_in' => '<p>Sistem dapat memberikan rekomendasi harga ideal yang diambil dari data pricing engine sehingga memudahkan pelanggan dalam menentukan harga ideal pada proses jual beli mobil.</p>',
                'features_image' => 'images/business/features/633cfbfec700f.png',
                'features_status' => 'active',
                'features_title' => 'Retail Market Price',
                'features_title_in' => 'Rekomendasi Harga Ideal',
                'id' => 26,
                'updated_at' => '2022-10-05 03:37:34',
            ),
        ));
        
        
    }
}