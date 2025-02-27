@extends('front.layouts.app')
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">

<style>
    .testimonial-item {
        position: relative;
        overflow: hidden;
        transition: transform 0.3s ease;
        cursor: pointer;
    }

    .testimonial-item:hover {
        transform: scale(1.05);
    }

    .testimonial-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.7);
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .testimonial-item:hover .testimonial-overlay {
        opacity: 1;
    }

    .testimonial-img {
        width: 100%;
        height: 300px;
        object-fit: cover;
    }

    .modal-img {
        width: 100%;
        max-height: 500px;
        object-fit: contain;
    }
</style>


@section('content')
    <!-- breadcrumb-area start -->
    <div class="breadcrumb-area section-ptb"
        style="background-image: url('https://images.unsplash.com/photo-1599666805921-c468c04cbfc4?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D');">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2 class="breadcrumb-title">Blog</h2>
                    <!-- breadcrumb-list start -->
                    <ul class="breadcrumb-list">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active">Blog</li>
                    </ul>
                    <!-- breadcrumb-list end -->
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb-area end -->


    <!-- main-content-wrap start -->
    <div class="main-content-wrap shop-page section-ptb">
        <div class="container">
            <div class="row">

                <div class="col-lg-12 order-lg-2 oreder-2">

                    <div class="row">

                        <div class="col-lg-12 blog-details-area">
                            <div class="blog-details-image text-center">
                                <img src="{{ asset('template/front') }}/assets/images/blog/artikel_2.jpg" alt="">
                            </div>
                            <div class="our-blog-contnet">
                                <h5><a href="">7 Tips Memilih Parsel Anti Gagal.</a></h5>
                                <div class="post_meta">
                                    <ul>
                                        <li>
                                            <p>By: <a href="#">Admin</a></p>
                                        </li>
                                        <li>
                                            <p>10 Feb 2025</p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="description">
                                    <p>Ada banyak cara untuk menunjukkan rasa peduli, tetapi tidak ada yang lebih
                                        menyenangkan daripada menerima parsel penuh kejutan. Dari kemasan yang menarik
                                        hingga isi yang bermanfaat, parsel selalu punya daya tarik tersendiri.</p>

                                    <p>Baik untuk momen spesial seperti Lebaran, ulang tahun, atau sekadar menyampaikan
                                        ucapan terima kasih, parsel selalu berhasil menyampaikan pesan dengan cara yang
                                        istimewa. Tak heran, kini banyak orang memilih parsel sebagai hadiah favorit mereka.
                                    </p>

                                    <p>Tapi, bagaimana cara memilih parsel yang tepat agar semakin berkesan? Simak tipsnya
                                        di sini!</p>

                                    <h3>7 Tips Memilih Parsel yang Sempurna</h3>
                                    <ol>
                                        <li><strong>Sesuaikan dengan Kebutuhan dan Selera Penerima</strong><br>
                                            Pastikan isi parsel sesuai dengan kesukaan, kebutuhan, atau gaya hidup penerima.
                                            Misalnya, untuk seseorang yang suka kopi, pilih parsel berisi berbagai jenis
                                            kopi premium.
                                        </li>
                                        <li><strong>Pilih Tema yang Sesuai dengan Momen</strong><br>
                                            Sesuaikan parsel dengan acara atau peristiwa tertentu. Parsel Lebaran bisa
                                            berisi kue kering dan kurma, sementara parsel ulang tahun bisa berisi cokelat,
                                            bunga, atau barang personal lainnya.
                                        </li>
                                        <li><strong>Perhatikan Kualitas Produk dalam Parsel</strong><br>
                                            Pastikan isi parsel berkualitas baik, terutama jika berisi makanan atau minuman.
                                            Pilih produk dari merek terpercaya agar penerima merasa dihargai.
                                        </li>
                                        <li><strong>Pilih Kemasan yang Menarik dan Eksklusif</strong><br>
                                            Kemasan yang cantik dan rapi akan membuat parsel terlihat lebih premium. Gunakan
                                            kotak kayu, anyaman bambu, atau kemasan unik lainnya agar tampilannya semakin
                                            elegan.
                                        </li>
                                        <li><strong>Tambahkan Sentuhan Personal</strong><br>
                                            Sisipkan kartu ucapan dengan pesan khusus atau pilih barang yang bisa
                                            dipersonalisasi, seperti mug dengan nama penerima atau handuk bordir. Ini akan
                                            menambah nilai sentimental pada parsel.
                                        </li>
                                        <li><strong>Sesuaikan dengan Anggaran yang Dimiliki</strong><br>
                                            Parsel tidak harus mahal untuk berkesan. Sesuaikan pilihan dengan anggaran yang
                                            ada, tetapi tetap pastikan kualitas dan isi parsel tetap menarik serta
                                            bermanfaat.
                                        </li>
                                        <li><strong>Pilih Vendor atau Toko yang Terpercaya</strong><br>
                                            Jika membeli parsel dari toko atau layanan online, pastikan mereka memiliki
                                            reputasi baik. Periksa ulasan pelanggan agar tidak kecewa dengan kualitas produk
                                            dan pengirimannya.
                                        </li>
                                    </ol>

                                    <p>Dengan memperhatikan ketujuh tips ini, parsel yang Anda pilih akan terasa lebih
                                        personal, berkesan, dan memberikan kebahagiaan bagi penerimanya!</p>
                                </div>


                            </div>




                            <blockquote class="blockquote-blog mt-30 mb-30">
                                <p>Hadiah terbaik bukan hanya tentang bentuknya, tetapi tentang makna di baliknya. Biarkan
                                    setiap bunga menyampaikan pesan terindah</p>
                                <h5>MONERA</h5>
                            </blockquote>


                        </div>


                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- main-content-wrap end -->
@endsection
