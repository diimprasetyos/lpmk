@extends('frontend.layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Kondisi Geografi</h2>
        <ol>
            <li><a href="/profil">Profil</a></li>
            <li>Kondisi Geografi</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Alt Services Section ======= -->
<section id="alt-services" class="alt-services">
    <div class="container" data-aos="fade-up">

        <div class="row justify-content-around gy-4">
            <div class="col-lg-6 img-bg" data-aos="zoom-in" data-aos-delay="100">
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7902.209946701309!2d112.612542!3d-7.9880949999999995!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7882a3943991e5%3A0xc2f6a01db8859b26!2sKantor%20Kelurahan%20Tanjungrejo!5e0!3m2!1sen!2sus!4v1713792489480!5m2!1sen!2sus" width="600" height="650" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="col-lg-5 d-flex flex-column justify-content-center mb-auto">
                <h3>Kelurahan Tanjungrejo memiliki kondisi geografis sebagai berikut</h3>
                <p>112,34” – 1141,34” BT – 7,54’52” – 8,03’05” LS</p>
                <p>Kelurahan Tanjungrejo Kecamatan Sukun memiliki ketinggian rata-rata 440-660 m dari permukaan air laut, dengan batas:</p>
                <p>Disebelah Utara : Kelurahan Bareng</p>
                <p>Disebelah Selatan : Kelurahan Bandungrejosari</p>
                <p>Disebelah Timur : Kelurahan Sukun</p>
                <p>Disebelah Barat : Kelurahan Bandulan</p>
                <p>Dan Memiliki Topologi : </p>
                <ol>
                    <li>Persawahan</li>
                    <li>Perladangan</li>
                    <li>Perkebunan</li>
                    <li>Peternakan</li>
                    <li>Kerajinan dan Industri Kecil</li>
                    <li>Industri sedang dan besar</li>
                    <li>Jasa dan Perdagangan</li>
                </ol>

            </div>
        </div>

    </div>
</section><!-- End Alt Services Section -->
@endsection