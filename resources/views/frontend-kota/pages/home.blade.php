@extends('frontend-kota.layouts.app')

@section('hero')
<section id="hero" class="hero">

    <div class="info d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 data-aos="fade-down">Selamat Datang di <br><span>LPMK Kota Malang</span></h2>
                    <p data-aos="fade-up">Website Lembaga Pemberdayaan Masyarakat Kelurahan (LPMK) Kota Malang</p>
                    <a data-aos="fade-up" data-aos-delay="200" href="/lpmk-kecamatan" class="btn-get-started">Cek LPMK</a>
                </div>
            </div>
        </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active" style="background-image: url(assets/img/lpmk-kota/banner-1.jpg)">
        </div>
        <div class="carousel-item" style="background-image: url(assets/img/lpmk-kota/banner-2.jpg)"></div>
        <div class="carousel-item" style="background-image: url(assets/img/lpmk-kota/banner-3.jpg)"></div>

        <a class="carousel-control-prev" href="#hero-carousel" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#hero-carousel" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

    </div>

</section>
@endsection

@section('content')
<!-- ======= Get Started Section ======= -->
<main id="main">
    <section id="recent-blog-posts" class="recent-blog-posts" style="margin-top: 40px !important;">
        <div class="container" data-aos="fade-up"">



                <div class=" section-header">
            <h2>Program LPMK</h2>
            <p>Daftar Program LPMK Kota Malang</p>
        </div>

        <div class="row gy- 5">

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="post-item position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/lpmk-kota/pelatihan-kepemimpinan.jpeg" class="img-fluid" alt="">
                        <span class="post-date">May 5</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Pelatihan Dasar Kepemimpinan</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-clock"></i> <span class="ps-2">2023-5-15</span>
                            </div>
                        </div>

                        <hr>

                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div><!-- End post item -->

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="post-item position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/lpmk-kota/penguatan-karakter.jpeg" class="img-fluid" alt="">
                        <span class="post-date">July 17</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Penguatan Karakter</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-clock"></i> <span class="ps-2">2023-5-15</span>
                            </div>
                        </div>

                        <hr>

                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div><!-- End post item -->

            <div class="col-xl-4 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/lpmk-kota/rapat.jpg" class="img-fluid" alt="">
                        <span class="post-date">September 05</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Rapat Rutin</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-clock"></i> <span class="ps-2">2023-5-15</span>
                            </div>
                        </div>

                        <hr>

                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                </div>

            </div><!-- End post item -->
            <div class="container mt-5 text-center justify-content-center items-center">
                <button type="button" class="btn btn-primary">Lihat Lainnya</button>
            </div>
        </div>

        </div>
    </section>

    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">



            <div class=" section-header">
                <h2>UMKM</h2>
                <p>Daftar Data UMKM LPMK Kota Malang</p>
            </div>

            <div class="row gy-5">

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="post-item position-relative h-100">

                        <div class="post-img position-relative overflow-hidden">
                            <img src="assets/img/lpmk-kota/umkm-1.jpg" class="img-fluid" alt="">
                            <span class="post-date">December 12</span>
                        </div>

                        <div class="post-content d-flex flex-column">

                            <h3 class="post-title">Keripik Patin Crispy</h3>

                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-clock"></i> <span class="ps-2">2023-5-15</span>
                                </div>
                            </div>
                            <hr>

                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>
                </div><!-- End post item -->

                <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="post-item position-relative h-100">

                        <div class="post-img position-relative overflow-hidden">
                            <img src="assets/img//lpmk-kota/umkm-2.jpg" class="img-fluid" alt="">
                            <span class="post-date">July 17</span>
                        </div>

                        <div class="post-content d-flex flex-column">

                            <h3 class="post-title">Kacang Pedas</h3>

                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-clock"></i> <span class="ps-2">2023-5-15</span>
                                </div>
                            </div>
                            <hr>

                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>
                </div><!-- End post item -->

                <div class="col-xl-4 col-md-6">
                    <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

                        <div class="post-img position-relative overflow-hidden">
                            <img src="assets/img//lpmk-kota/umkm-3.jpeg" class="img-fluid" alt="">
                            <span class="post-date">September 05</span>
                        </div>

                        <div class="post-content d-flex flex-column">

                            <h3 class="post-title">Batik Tanjungrejo</h3>

                            <div class="meta d-flex align-items-center">
                                <div class="d-flex align-items-center">
                                    <i class="bi bi-clock"></i> <span class="ps-2">2023-5-15</span>
                                </div>
                            </div>
                            <hr>

                            <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                        </div>

                    </div>
                </div><!-- End post item -->
                <div class="container mt-5 text-center justify-content-center items-center">
                    <button type="button" class="btn btn-primary">Lihat Lainnya</button>
                </div>
            </div>

        </div>
    </section>
    <!-- End Recent Blog Posts Section -->
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">



                <div class=" section-header">
            <h2>Berita Terbaru</h2>
            <p>berita lpmk kota malang</p>
        </div>

        <div class="row gy-5">

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="post-item position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                        <span class="post-date">December 12</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Giat Linmas Tanjungrejo : Peningkatan Keamanan Ketentraman dan Ketertiban Lingkungan</h3>

                        <div class="meta d-flex align-items-center">
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Kegiatan</span>
                            </div>
                        </div>

                        <hr>

                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div><!-- End post item -->

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                <div class="post-item position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                        <span class="post-date">July 17</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Pembentukan Posyandu Remaja Kelurahan Tanjungrejo</h3>

                        <div class="meta d-flex align-items-center">
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Kesehatan</span>
                            </div>
                        </div>

                        <hr>

                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div><!-- End post item -->

            <div class="col-xl-4 col-md-6">
                <div class="post-item position-relative h-100" data-aos="fade-up" data-aos-delay="300">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                        <span class="post-date">September 05</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Penyaluran BST (Bantuan Sosial Tunai) Kemensos ke 3-4 Tahun 2021</h3>

                        <div class="meta d-flex align-items-center">
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Sosial</span>
                            </div>
                        </div>

                        <hr>

                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div><!-- End post item -->
            <div class="container mt-5 text-center justify-content-center items-center">
                <button type="button" class="btn btn-primary">Lihat Lainnya</button>
            </div>
        </div>

        </div>
    </section>
    <!-- End Recent Blog Posts Section -->
</main><!-- End #main -->
@endsection