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
                                <img src="{{ asset('template/front') }}/assets/images/blog/artikel_1.jpg" alt="">
                            </div>
                            <div class="our-blog-contnet">
                                <h5><a href="">Lebih Dari Sekedar Hadiah, Parsel Adalah Bahasa Cinta yang
                                        Tak Terucap.</a></h5>
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
                                <p>Pernahkah Anda menerima parsel secara tiba-tiba? Rasanya seperti mendapat kejutan yang
                                    menghangatkan hati, bukan? Lebih dari sekadar hadiah, parsel adalah cara seseorang
                                    menunjukkan perhatian tanpa perlu banyak kata.</p>
                                <p>Setiap isinya dipilih dengan cermat, dikemas dengan indah, dan dikirim dengan penuh
                                    ketulusan. Itulah mengapa, parsel selalu membawa kebahagiaan bagi siapa pun yang
                                    menerimanya. Tapi, tahukah Anda bahwa tren parsel kini semakin berkembang dengan
                                    berbagai tema dan konsep unik? Yuk, cari tahu lebih lanjut bagaimana parsel bisa menjadi
                                    media terbaik untuk mengekspresikan perasaan!</p>
                                <p>Parsel bukan sekadar hadiah biasa, tetapi juga media terbaik untuk mengekspresikan
                                    perasaan. Berikut tujuh alasan mengapa parsel sangat efektif dalam menyampaikan emosi
                                    dan perhatian:.</p>
                                <ul>
                                    <li><strong>Personal dan Bermakna</strong><br>
                                        Setiap parsel bisa disesuaikan dengan selera dan kebutuhan penerima, menjadikannya
                                        hadiah yang lebih personal dan bermakna. Memilih isi parsel dengan cermat
                                        menunjukkan bahwa Anda benar-benar peduli.
                                    </li>
                                    <li><strong>Dapat Mewakili Berbagai Perasaan</strong><br>
                                        Parsel bisa digunakan untuk berbagai situasi—mengungkapkan rasa syukur, cinta,
                                        simpati, atau bahkan sebagai bentuk permintaan maaf. Isinya bisa disesuaikan untuk
                                        menyampaikan pesan yang tepat.
                                    </li>
                                    <li><strong>Elemen Kejutan yang Menyenangkan</strong><br>
                                        Menerima parsel selalu membawa kebahagiaan karena ada unsur kejutan di dalamnya.
                                        Keingintahuan terhadap isi parsel menambah kesan spesial dan membuat momen lebih
                                        berkesan.
                                    </li>
                                    <li><strong>Menghadirkan Kenangan Manis</strong><br>
                                        Parsel sering kali berisi barang atau makanan yang mengingatkan pada kenangan
                                        tertentu. Hal ini bisa menciptakan nostalgia dan membangun ikatan emosional yang
                                        lebih kuat antara pengirim dan penerima.
                                    </li>
                                    <li><strong>Bisa Dikemas dengan Estetika yang Indah</strong><br>
                                        Selain isi yang bermakna, tampilan parsel yang menarik juga memberikan kesan
                                        eksklusif dan istimewa. Kemasan yang cantik menambah nilai emosional bagi
                                        penerimanya.
                                    </li>
                                    <li><strong>Bisa Disertai Pesan Khusus</strong><br>
                                        Parsel memungkinkan Anda menyertakan kartu ucapan atau surat pribadi yang
                                        mengungkapkan perasaan dengan lebih mendalam. Hal ini menjadikan parsel lebih dari
                                        sekadar hadiah, tetapi juga sarana komunikasi emosional.
                                    </li>
                                    <li><strong>Dapat Dikirim ke Mana Saja</strong><br>
                                        Jarak bukan lagi masalah karena parsel bisa dikirim ke mana pun. Ini menjadikannya
                                        cara terbaik untuk menunjukkan perhatian kepada orang tersayang, meskipun berada di
                                        tempat yang jauh.
                                    </li>
                                </ul>
                                <p>Dengan semua keunggulan ini, parsel bukan hanya hadiah, tetapi juga bentuk ekspresi yang
                                    penuh makna dan emosional.</p>

                            </div>




                            <blockquote class="blockquote-blog mt-30 mb-30">
                                <p>Hadiah terbaik bukan hanya tentang bentuknya, tetapi tentang makna di baliknya. Biarkan setiap bunga menyampaikan pesan terindah</p>
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
