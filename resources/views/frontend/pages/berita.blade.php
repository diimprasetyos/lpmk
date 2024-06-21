@extends('frontend.layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Berita</h2>
    <ol>
      <li><a href="/">Home</a></li>
      <li>Berita</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->

<section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up">



                <div class=" section-header">
            <h2>Berita Terbaru</h2>
            <p>berita lpmk kelurahan tanjungrejo</p>
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
    </section><!-- End Blog Section -->
@endsection