<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class BusinessesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('businesses')->delete();
        
        \DB::table('businesses')->insert(array (
            0 => 
            array (
                'banner_image' => 'images/business/6336a4a44c2a5.png',
                'banner_image_mobile' => 'images/business/6336a218082bd.png',
                'created_at' => '2022-09-19 14:36:24',
                'description_en' => '<p>Caroline is platform for buying and selling car with 3 main services which consist of buy, sell, and trade in that can be accessed online or directly offline from Caroline\'s showroom.</p><p>All cars at Caroline have passed an in-depth 150 point inspection to ensure that the unit never experiencing&nbsp; flooding or collision. Caroline\'s also provide extensive warranty to cover the engine and transmission for 1 year, and 5 day money back guarantee. With a variety of financing options available at Caroline, and additional service to easily sell cars with free inspections and direct cash guarantees is Caroline\'s commitment in providing comfort and peace of mind for customers.</p><p><a href="https://caroline.id/" target="_blank">Visit Caroline\'s Website</a></p>',
                'description_in' => '<p>Caroline merupakan platform jual beli mobil dengan tiga layanan utama yaitu jual, beli dan tukar tambah dan bisa diakses secara daring atau mengunjungi dealer Caroline terdekat.</p><p>Seluruh mobil di Caroline telah melewati inspeksi 150 titik yang mendalam sehingga unit dipastikan bebas dari banjir atau pun tabrakan. Caroline juga memberikan garansi mesin dan transmisi hingga 1 tahun serta garansi 5 hari uang kembali. Dengan beragam pilihan pembayaran yang tersedia di Caroline, fasilitas jual mobil sangat mudah dengan inspeksi secara gratis dan jaminan dana cair secara langsung merupakan komitmen Caroline dalam memberikan kenyamanan dan ketenangan bagi pelanggan.</p><p><a href="https://caroline.id" target="_blank">Kunjungi Website Caroline</a><br></p>',
                'features_description_en' => NULL,
                'features_description_in' => NULL,
                'features_title_en' => 'Caroline Services',
                'features_title_in' => 'Layanan Caroline',
                'id' => 1,
                'logo_image' => 'images/business/6343b3c3dee70.png',
                'product_image' => 'images/business/633abb39c4136.png',
                'sequence' => '1',
                'short_description_en' => '<p>Caroline is platform for buying and selling car with 3 main services which consist of buy, sell, and trade in that can be accessed online or directly offline from Caroline\'s showroom.</p>',
                'short_description_in' => '<p>Caroline merupakan platform jual beli mobil dengan tiga layanan utama yaitu jual, beli dan tukar tambah dan bisa diakses secara daring atau mengunjungi dealer Caroline terdekat.<br></p>',
                'slug' => 'caroline',
                'status' => 'active',
                'thumbnail_image' => 'images/business/633fa33793ebb.png',
                'title' => 'Caroline',
                'updated_at' => '2022-10-10 05:55:15',
            ),
            1 => 
            array (
                'banner_image' => 'images/business/6336abf9601ca.png',
                'banner_image_mobile' => 'images/business/6336abf9630e9.png',
                'created_at' => '2022-09-20 01:15:13',
                'description_en' => '<p>JBA auctions cars, motorcycles, commercial vehicles, and heavy equipment through the floor/offline auction system at the branch or can be accessed through the JBA application and website.</p><p>JBA\'s customers include over 30 corporate clients, hundreds of used vehicle dealers as consignor, and thousands of auction vehicle participants or buyers.</p><p>The JBA auction network is now present in over 15 locations throughout Indonesia.</p><p><a href="https://jba.co.id" target="_blank">Visit Our Website</a> or Download Apps at</p><p><a href="https://apps.apple.com/id/app/jba-indonesia/id1581069519?l=id" target="_blank" rel="noopener noreferrer" style=""><img src="https://autopedia.microad.co.id/assets/images/png/cta-as.png" class="img-fluid store" alt="store" style="margin: 0px 1rem 0px 0px;"></a><a href="https://play.google.com/store/apps/details?id=id.logique.jbabiddingrevamp" target="_blank" rel="noopener noreferrer" style=""><img src="https://autopedia.microad.co.id/assets/images/png/cta-ps.png" class="img-fluid store" alt="store" style="margin: 0px 1rem 0px 0px;"></a></p>',
                'description_in' => '<p>JBA melelang mobil, motor, kendaraan niaga, hingga alat berat melalui sistem lelang floor/offline di cabang atau dapat diakses melalui aplikasi dan website JBA.</p><p>Pelanggan JBA terdiri lebih dari 30 pelanggan korporasi dan ratusan dealer kendaraan bekas sebagai penitip kendaraan lelang, serta ribuan peserta atau pembeli kendaraan lelang.</p><p>Saat ini, jaringan lelang JBA sudah tersebar di lebih dari 15 kota di Indonesia.</p><p><a href="https://jba.co.id" target="_blank">Kunjungi Website</a> atau Download Apps di</p><div class="list-store" style="display: flex; flex-direction: row;"><a href="https://apps.apple.com/id/app/jba-indonesia/id1581069519?l=id" target="_blank" rel="noopener noreferrer" style=""><img src="https://autopedia.microad.co.id/assets/images/png/cta-as.png" class="img-fluid store" alt="store" style="margin: 0px 1rem 0px 0px;"></a><a href="https://play.google.com/store/apps/details?id=id.logique.jbabiddingrevamp" target="_blank" rel="noopener noreferrer" style=""><img src="https://autopedia.microad.co.id/assets/images/png/cta-ps.png" class="img-fluid store" alt="store" style="margin: 0px 1rem 0px 0px;"></a></div>',
                'features_description_en' => 'Buying and selling vehicles on JBA is more profitable with various service solutions that make it safer and more comfortable.',
                'features_description_in' => 'Jual beli kendaraan di JBA lebih untung dengan berbagai solusi layanan yang membuat Anda lebih aman dan nyaman.',
                'features_title_en' => 'Benefit JBA Indonesia',
                'features_title_in' => 'Kelebihan JBA Indonesia',
                'id' => 2,
                'logo_image' => 'images/business/6343b3e70129b.png',
                'product_image' => 'images/business/633ac292ef7f1.png',
                'sequence' => '2',
                'short_description_en' => '<p>PT JBA Indonesia is an automotive auction with a vision to become a vehicle buying and selling platform by continuously applying digital technology to auction services and operations since 2011.</p>',
                'short_description_in' => '<p>PT JBA Indonesia adalah balai lelang otomotif yang memiliki visi menjadi wadah jual beli kendaraan dengan terus mengadaptasi teknologi digital dalam pelayanan dan operasional lelang sejak tahun 2011.<br></p>',
                'slug' => 'jba-indonesia',
                'status' => 'active',
                'thumbnail_image' => 'images/business/633ab3351cdea.png',
                'title' => 'JBA Indonesia',
                'updated_at' => '2022-10-10 05:55:51',
            ),
            2 => 
            array (
                'banner_image' => 'images/business/633674aa2a36e.png',
                'banner_image_mobile' => 'images/business/6336a3a1c4f3d.png',
                'created_at' => '2022-09-20 01:36:33',
            'description_en' => '<p>Bursa Mobil Autopedia (BMA) is a used car marketplace which connecting car dealers, both as buyers and sellers with main services:</p><p>Marketplace Ads: Advertising feature provided by BMA which prioritizing in transparency, as well as to connecting car dealers from all around Indonesia.</p><p>Consignment: Sellers can hand over the car to BMA to be marketed and sold to all JBA Indonesia members. JBA Indonesia is the official partner of BMA.</p><p><a href="https://bursamobil.autopedia.id" target="_blank"><font color="#ff9c00">Visit Bursa Mobil Autopedia Website</font></a></p>',
            'description_in' => '<p>Bursa Mobil Autopedia (BMA) adalah marketplace jual beli mobil bekas yang mempertemukan dan menghubungkan dealer mobil bekas, baik sebagai pembeli maupun penjual dengan layanan:</p><p>Iklan Marketplace : Fitur pemasangan iklan di platform Bursa Mobil Autopedia yang mengedepankan transparansi dan menghubungkan berbagai dealer dari seluruh Indonesia.</p><p>Titip Jual : Penjual dapat menitipkan mobil ke BMA untuk dipasarkan dan dijual ke seluruh member JBA Indonesia. JBA Indonesia merupakan partner resmi dari BMA.</p><p><a href="https://bursamobil.autopedia.id" target="_blank">Kunjungi Website Bursa Mobil Autopedia</a></p>',
                'features_description_en' => NULL,
                'features_description_in' => NULL,
                'features_title_en' => 'Benefit Bursa Mobil Autopedia',
                'features_title_in' => 'Kelebihan Bursa Mobil Autopedia',
                'id' => 3,
                'logo_image' => 'images/business/6343b40e62ede.png',
                'product_image' => 'images/business/633cfa80c347c.png',
                'sequence' => '3',
            'short_description_en' => '<p>Bursa Mobil Autopedia (BMA) is a car buying and selling marketplace that connects used car dealers, both buyers and sellers.<br></p>',
            'short_description_in' => '<p>Bursa Mobil Autopedia (BMA) adalah marketplace jual beli mobil bekas yang mempertemukan dan menghubungkan dealer mobil bekas, baik sebagai pembeli maupun penjual.</p>',
                'slug' => 'bursa-mobil-autopedia',
                'status' => 'active',
                'thumbnail_image' => 'images/business/633ac87d9f3b8.png',
                'title' => 'Bursa Mobil Autopedia',
                'updated_at' => '2022-10-10 05:56:30',
            ),
            3 => 
            array (
                'banner_image' => 'images/business/63291de68ea61.webp',
                'banner_image_mobile' => 'images/business/63291de68eef7.webp',
                'created_at' => '2022-09-20 01:56:54',
            'description_en' => '<p><u>Autopedia Gadai is a private pawn company registered and regulated by the Financial Services Authority (OJK) with main service of giving financing facilities that acquire collateral in the form of motor vehicles.</u><br></p>',
            'description_in' => '<p>Autopedia Gadai adalah perusahaan gadai swasta yang terdaftar dan diawasi oleh Otoritas Jasa Keuangan (OJK) dengan layanan utama memberikan fasilitas pembiayaan yang menerima barang jaminan berupa kendaraan bermotor.<br></p>',
                'features_description_en' => NULL,
                'features_description_in' => NULL,
                'features_title_en' => 'Benefit Autopedia Gadai',
                'features_title_in' => 'Keuntungan Autopedia Gadai',
                'id' => 4,
                'logo_image' => 'images/business/634799c6a14a3.png',
                'product_image' => 'images/business/633a86c4e6a36.png',
                'sequence' => '5',
            'short_description_en' => '<p>Autopedia Gadai is a private pawn company registered and regulated by Financial Services Authority (OJK) with main service of giving financing facilities that acquire collateral in the form of motor vehicles.</p>',
            'short_description_in' => '<p>Autopedia Gadai adalah perusahaan gadai swasta yang terdaftar dan diawasi oleh Otoritas Jasa Keuangan (OJK) dengan layanan utama memberikan fasilitas pembiayaan yang menerima barang jaminan berupa kendaraan bermotor.<br></p>',
                'slug' => 'autopedia-gadai-ALJNcQAWks4DUFuK',
                'status' => 'inactive',
                'thumbnail_image' => 'images/business/632932e7bf7a6.png',
                'title' => 'Autopedia Gadai',
                'updated_at' => '2022-10-13 06:06:45',
            ),
            4 => 
            array (
                'banner_image' => 'images/business/633674172567a.png',
                'banner_image_mobile' => 'images/business/6336741727f18.png',
                'created_at' => '2022-09-20 03:43:45',
            'description_en' => '<p>Cartalog is a vehicle price information website equipped with innovative AI (artificial intelligence) technology. This technology is used to offer fair prices to all players in the automotive industry.</p><p>Furthermore, Cartalog strives to provide solutions for all customers in the automotive ecosystem. This includes dealers, insurance companies, finance companies, affiliated repair shops, and inspection service providers.</p><p>"Cartalog Prices" are generated by Cartalog using the aggregation of millions of data points. Cartalog believes that all decisions in the future will be data-driven. We empower all our customers to make strategic decisions by providing research information and data analysis.</p>',
            'description_in' => '<p>Cartalog merupakan situs penyedia informasi Harga kendaraan dengan dibekali teknologi revolusioner AI (Artificial Intelligence). Teknologi tersebut digunakan untuk memberikan harga adil kepada semua pemain dalam industri otomotif.</p><p>Di samping itu, Cartalog juga berusaha memberikan solusi bagi seluruh pelanggan dalam ekosistem otomotif. Meliputi dealer,perusahaan asuransi, perusahaan pembiayaan, bengkel rekanan, dan penyedia layanan inspeksi yang independen serta terpercaya.</p><p>Cartalog menggunakan akumulasi dari jutaan data untuk memperoleh “Harga Cartalog”. Cartalog percaya bahwa dalam waktu dekat seluruh keputusan akan berbasis data. Dengan menawarkan informasi riset dan kemampuan menganalisa data, seluruh pelanggan dapat mengambil keputusan strategis.&nbsp;</p>',
                'features_description_en' => NULL,
                'features_description_in' => NULL,
                'features_title_en' => 'Benefit Cartalog',
                'features_title_in' => 'Kelebihan Cartalog',
                'id' => 5,
                'logo_image' => 'images/business/6343b41d226af.png',
                'product_image' => 'images/business/633cfbd41b86b.png',
                'sequence' => '4',
            'short_description_en' => '<p>Cartalog is the only website which provides information on vehicle prices in Indonesia. This site is equipped with Artificial Intelligence (AI) technology that provides reliable information.<br></p>',
            'short_description_in' => '<p>Cartalog adalah situs penyedia informasi harga kendaraan satu-satunya di Indonesia. Situs ini dibekali dengan teknologi Artificial Intelligence (AI) yang memberikan informasi secara terpercaya.<br></p>',
                'slug' => 'cartalog',
                'status' => 'active',
                'thumbnail_image' => 'images/business/633ac8fea78a1.png',
                'title' => 'Cartalog',
                'updated_at' => '2022-10-13 04:46:38',
            ),
        ));
        
        
    }
}