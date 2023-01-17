<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FeedbacksTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('feedbacks')->delete();
        
        \DB::table('feedbacks')->insert(array (
            0 => 
            array (
                'business_id' => 1,
                'created_at' => '2022-09-20 02:04:10',
                'description_en' => 'New Car Buyers',
                'description_in' => 'Pembeli Mobil Baru',
                'feedback_en' => '"I am very satisfied with the price and service offers from Caroline.id. Fast and unexpected service. Thank you and success always."',
                'feedback_in' => '"Saya sangat puas atas penawaran serta pelayanan dari Caroline.id atas permintaan kendaraan kami, diluar perkiraan sebelumnya lebih cepat, luar biasa terima kasih Caroline.id sukses selalu."',
                'id' => 1,
                'image' => 'images/feedback/63291f9a1fdea.png',
                'name' => 'Iman',
                'status' => 'active',
                'updated_at' => '2022-09-29 15:38:14',
            ),
            1 => 
            array (
                'business_id' => 1,
                'created_at' => '2022-09-20 02:05:38',
                'description_en' => 'Used Car Buyer',
                'description_in' => 'Pembeli Mobil Bekas',
                'feedback_en' => '"Car condition was good and Caroline\'s staff explanation was consistent with unit status. Staff is also friendly and service is very good."',
                'feedback_in' => '"Kondisi unitnya baik dan penjelasan dari petugas Caroline sesuai dengan kondisi unitnya. Petugasnya juga ramah dan pelayanan sangat baik."',
                'id' => 2,
                'image' => 'images/feedback/63291ff2b793e.png',
                'name' => 'Rusmanto',
                'status' => 'active',
                'updated_at' => '2022-09-29 15:31:58',
            ),
            2 => 
            array (
                'business_id' => 1,
                'created_at' => '2022-09-20 02:09:11',
                'description_en' => 'New Car Buyer',
                'description_in' => 'Pembeli Mobil Baru',
                'feedback_en' => '"It\'s Amazing for Caroline!!! Everything is as expected."',
                'feedback_in' => '"TOP for Caroline!!!  Everything is as expected."',
                'id' => 3,
                'image' => 'images/feedback/632920c789ca8.png',
                'name' => 'Gatot Trihandoko',
                'status' => 'active',
                'updated_at' => '2022-09-29 15:27:57',
            ),
            3 => 
            array (
                'business_id' => 2,
                'created_at' => '2022-09-20 02:11:47',
                'description_en' => 'JBA Customer For 4 Years',
                'description_in' => 'Pengguna JBA Selama 4 Tahun',
                'feedback_en' => '"JBA is an auction house with the most and good auction units, the price is also very competitive and even the service is also very good."',
                'feedback_in' => '"JBA ini balai lelang yang unit lelangnya terbanyak dan bagus, harganya juga sangat bersaing bahkan pelayanannya juga sangat baik."',
                'id' => 4,
                'image' => 'images/feedback/6329216351a66.png',
                'name' => 'Zuhelmi Husen',
                'status' => 'active',
                'updated_at' => '2022-09-25 06:59:29',
            ),
            4 => 
            array (
                'business_id' => 2,
                'created_at' => '2022-09-20 02:13:06',
                'description_en' => 'JBA Users For 7 Years',
                'description_in' => 'Pengguna JBA Selama 7 Tahun',
                'feedback_en' => '"I chose to auction at JBA so far because the branches are spread throughout Indonesia and I got good service."',
                'feedback_in' => '"Saya memilih lelang di JBA selama ini karena cabangnya tersebar di seluruh Indonesia dan saya mendapat pelayanan yang baik."',
                'id' => 5,
                'image' => 'images/feedback/632921b24bb97.png',
                'name' => 'Arif Syahyadi',
                'status' => 'active',
                'updated_at' => '2022-09-20 02:13:06',
            ),
            5 => 
            array (
                'business_id' => 2,
                'created_at' => '2022-09-20 02:14:19',
                'description_en' => 'JBA Users For 1 Year',
                'description_in' => 'Pengguna JBA Selama 1 Tahun',
                'feedback_en' => '"In my opinion, JBA is an auction house with a good market price and the name JBA is well known to the wider community."',
                'feedback_in' => '"Menurut saya, JBA adalah balai lelang dengan harga pasar yang baik dan nama JBA sudah dikenal masyarakat luas."',
                'id' => 6,
                'image' => 'images/feedback/632921fba8f54.png',
                'name' => 'Muhammad Windy',
                'status' => 'active',
                'updated_at' => '2022-09-20 02:14:19',
            ),
        ));
        
        
    }
}