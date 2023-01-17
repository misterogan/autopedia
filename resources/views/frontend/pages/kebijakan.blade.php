@extends('frontend.layouts.app')

@section('page-title') {{__("Kebijakan Privasi")}} - Autopedia @endsection

@section('content')
<style>
    .text-content {
        white-space: pre-line !impoertant;
    }
</style>

<div class="other-page">
    <section class="kebijakan">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="content-box" data-aos="zoom-in-up" data-aos-easing="ease-in-sine" data-aos-duration="400"
                        data-aos-delay="300">
                        <h1 class="title common-bold">
                            {{__("Kebijakan Privasi")}}
                        </h1>
                        <div class="box-item">
                            <div class="subtitle">
                                {{__("Tinjauan")}}
                            </div>
                            <div class="text-content">
                                {{__("Website ini dimiliki dan dikontrol oleh PT. Autopedia Sukses Lestari Tbk. Terdaftar di Republik Indonesia, selanjutnya disebut sebagai “Autopedia” atau juga disebut “Kami”. Dalam kebijakan privasi ini, Kami membantu Anda untuk memahami kegunaan data pribadi Anda yang telah Kami kumpulkan.\n Informasi yang telah Kami terima berupa nama, alamat e-mail, dan nomor telepon digunakan untuk memenuhi permintaan, pertanyaan atau kebutuhan kerjasama atas layanan dan/atau kebutuhan bisnis lainnya. Kami tidak menjual atau memberikan informasi yang ada kepada pihak lain tanpa persetujuan Anda.\n Kebijakan Privasi ini hanya mencakup informasi yang diperoleh melalui website ini dan tidak mencakup informasi yang kemungkinan diperoleh melalui peranti lunak yang diunduh dari situs atau yang diperoleh dari situs-situs lainnya yang ditautkan kepada situs ini.")}}
                            </div>
                        </div>

                        <div class="box-item">
                            <div class="subtitle">
                                {{__("Informasi yang Kami kumpulkan")}}
                            </div>
                            <div class="text-content">
                                {{__("Kami menyimpan informasi dari data pribadi Anda termasuk nama, nomor telepon, atau alamat e-mail Anda. Kami juga mengumpulkan informasi yang tak dapat diidentifikasi secara pribadi, yang mungkin tertaut pada data pribadi Anda, termasuk alamat IP Anda, serta preferensi pencarian terkait pada pencarian spesifik.\n Data akan Kami gunakan untuk memproses kebutuhan Anda dan menjawab pertanyaan serta memenuhi permintaan layanan Anda.")}}
                            </div>
                        </div>
                        
                        <div class="box-item">
                            <div class="subtitle">
                                {{__("Keamanan")}}
                            </div>
                            <div class="text-content">
                                {{__("Seluruh informasi yang terkumpul dilindungi melalui cara dan prosedur keamanan yang wajar untuk mencegah akses dan penggunaan data yang tidak sah. Rekan Kami dan penyedia layanan pihak ketiga telah berkomitmen untuk mengelola informasi sesuai dengan persyaratan Kami untuk keamaan dan privasi sesuai ketentuan berlaku dalam undang-undang dan peraturan Republik Indonesia.")}}
                            </div>
                        </div>

                        <div class="box-item">
                            <div class="subtitle">
                                {{__("Cookie")}}
                            </div>
                            <div class="text-content">
                                {{__("Cookie adalah berkas berisi sejumlah informasi kecil yang ditempatkan di browser komputer atau perangkat seluler Anda. Dengan cookie, situs web Kami dapat mengingat tindakan dan preferensi Anda dari waktu ke waktu.\n Kami menggunakan cookie untuk mempelajari cara Anda berinteraksi dengan konten Kami serta untuk menyesuaikan produk, layanan dan situs web Kami sesuai dengan minat dan kebutuhan Anda. Cookie juga berfungsi mengumpulkan data perilaku Anda di situs web Kami untuk menayangkan iklan yang ditargetkan di situs web pihak ketiga dalam rangka mengingatkan dan memasarkan kembali produk dan layanan Kami kepada Anda.\n Pada sebagian besar situs web, penerimaan cookie diatur secara otomatis. Anda dapat memilih untuk menolak atau memblokir cookie berdasarkan kunjungan Anda ke situs Kami dengan mengubah pengaturan browser Anda sehingga Anda menerima peringatan sebelum cookie tertentu tersimpan, memilih cookie tertentu dari pihak ketiga atau dengan cookie dengan menghapus cookie yang sudah tersimpan.")}} 
                            </div>
                        </div>

                        <div class="box-item">
                            <div class="subtitle">
                                {{__("Tautan ke situs lain")}}
                            </div>
                            <div class="text-content">
                                {{__("Situs Kami dapat menyediakan tautan menuju ke situs web lain atau aplikasi lainnya. Jika Anda mengirimkan informasi pribadi ke situs-situs tersebut, informasi Anda diatur oleh kebijakan privasi mereka dan sepenuhnya bukan menjadi tanggung jawab Kami.")}}
                            </div>
                        </div>

                        <div class="box-item">
                            <div class="subtitle">
                                {{__("Perubahan Kebijakan Privasi")}}
                            </div>
                            <div class="text-content">
                                {{__("Kami dapat memperbaharui kebijakan privasi ini sewaktu-waktu dan Anda disarankan untuk memeriksa halaman ini dari waktu ke waktu. Dengan melanjutkan menggunakan situs dan layanan Kami, Anda menegaskan persetujuan untuk melanjutkan penggunaan layanan atas setiap pembaruan dari Kebijakan privasi ini.")}}
                            </div>
                        </div>

                        <div class="box-item">
                            <div class="subtitle">
                                {{__("Hubungi Kami")}}
                            </div>
                            <div class="text-content">
                                {{__("Penting bagi Anda meluangkan waktu untuk membaca, memahami dan menerima persyaratan dari kebijakan privasi ini. Jika Anda memiliki pertanyaan tentang penanganan informasi pribadi Kami, Anda dapat menulis surat elektronik kepada Kami di info@autopedia.id")}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

@stop