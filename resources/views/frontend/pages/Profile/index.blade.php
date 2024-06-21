@extends('frontend.layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Profil</h2>
        <ol>
            <li><a href="/">Beranda</a></li>
            <li>Profil</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->

<!-- ======= About Section ======= -->
<section id="about" class="about">
    <div class="container" data-aos="fade-up">

        <div class="row position-relative">

            <div class="col-lg-7 about-img" style="background-image: url(assets/img/lpmk/banner-1.jpeg);"></div>

            <div class="col-lg-7">
                <h2>LPMK Tanjungrejo</h2>
                <div class="our-story">
                    <h4>Est 1988</h4>
                    <h3>Our Story</h3>
                    <p>Lembaga Pemberdayaan Masyarakat Kelurahan (LPMK) Tanjungrejo merupakan sebuah lembaga yang bertujuan untuk memberdayakan masyarakat di wilayah Tanjungrejo. LPMK ini berperan dalam mengembangkan potensi masyarakat, meningkatkan kesejahteraan, dan memperkuat jaringan komunitas di lingkungan tersebut.</p>
                    <p>LPMK Tanjungrejo biasanya melakukan berbagai kegiatan yang meliputi penyuluhan, pelatihan keterampilan, program pengembangan ekonomi lokal, kegiatan sosial, dan kegiatan-kegiatan lainnya yang bertujuan untuk meningkatkan kualitas hidup masyarakat. Selain itu, LPMK juga menjadi wadah bagi masyarakat untuk mengajukan aspirasi dan memperoleh bantuan dalam memecahkan masalah yang dihadapi.</p>

                    <div class="watch-video d-flex align-items-center position-relative">
                        <i class="bi bi-play-circle"></i>
                        <a href="https://www.youtube.com/watch?v=LXb3EKWsInQ" class="glightbox stretched-link">Watch Video</a>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- End About Section -->


</main><!-- End #main -->
@endsection