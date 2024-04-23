@extends('frontend.layouts.app')

@section('hero')
<section id="hero" class="hero">

    <div class="info d-flex align-items-center">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center">
                    <h2 data-aos="fade-down">Selamat Datang di <br><span>LPMK Tanjungrejo</span></h2>
                    <h2 data-aos="fade-down">Selamat Datang di <br><span>LPMK Tanjungrejo</span></h2>
                    <p data-aos="fade-up">Lembaga Pemberdayaan Masyarakat Kelurahan (LPMK) adalah lembaga atau wadah yang dibentuk berdasarkan prakarsa masyarakat yang difasilitasi pemerintah melalui musyarawah mufakat sebagai mitra kelurahan dalam menampung dan mewujudkan aspirasi serta kebutuhan masyarakat di bidang pembangunan.</p>
                    <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
                    <a data-aos="fade-up" data-aos-delay="200" href="#get-started" class="btn-get-started">Get Started</a>
                </div>
            </div>
        </div>
    </div>

    <div id="hero-carousel" class="carousel slide" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-item active" style="background-image: url(assets/img/lpmk/banner-1.jpeg)">
        <div class="carousel-item active" style="background-image: url(assets/img/lpmk/banner-1.jpeg)">
        </div>
        <div class="carousel-item" style="background-image: url(assets/img/lpmk/banner-2.jpg)"></div>
        <div class="carousel-item" style="background-image: url(assets/img/lpmk/banner-2.jpg)"></div>
        <div class="carousel-item" style="background-image: url(assets/img/lpmk/banner-3.jpeg)"></div>
        <div class="carousel-item" style="background-image: url(assets/img/lpmk/banner-4.jpg)"></div>

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
    <!-- ======= Recent Blog Posts Section ======= -->
    <section id="recent-blog-posts" class="recent-blog-posts">
        <div class="container" data-aos="fade-up"">



                <div class=" section-header">
            <h2>Recent Blog Posts</h2>


                <div class=" section-header">
            <h2>Recent Blog Posts</h2>
            <p>In commodi voluptatem excepturi quaerat nihil error autem voluptate ut et officia consequuntu</p>
        </div>

        <div class="row gy-5">

            <div class="col-xl-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                <div class="post-item position-relative h-100">

                    <div class="post-img position-relative overflow-hidden">
                        <img src="assets/img/blog/blog-1.jpg" class="img-fluid" alt="">
                        <span class="post-date">December 12</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Eum ad dolor et. Autem aut fugiat debitis</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">Julia Parker</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Politics</span>
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
                        <img src="assets/img/blog/blog-2.jpg" class="img-fluid" alt="">
                        <span class="post-date">July 17</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Et repellendus molestiae qui est sed omnis</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">Mario Douglas</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Sports</span>
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
                        <img src="assets/img/blog/blog-3.jpg" class="img-fluid" alt="">
                        <span class="post-date">September 05</span>
                    </div>

                    <div class="post-content d-flex flex-column">

                        <h3 class="post-title">Quia assumenda est et veritati tirana ploder</h3>

                        <div class="meta d-flex align-items-center">
                            <div class="d-flex align-items-center">
                                <i class="bi bi-person"></i> <span class="ps-2">Lisa Hunter</span>
                            </div>
                            <span class="px-3 text-black-50">/</span>
                            <div class="d-flex align-items-center">
                                <i class="bi bi-folder2"></i> <span class="ps-2">Economics</span>
                            </div>
                        </div>

                        <hr>

                        <a href="blog-details.html" class="readmore stretched-link"><span>Read More</span><i class="bi bi-arrow-right"></i></a>

                    </div>

                </div>
            </div><!-- End post item -->

        </div>

        </div>
    </section>
    <!-- End Recent Blog Posts Section -->


    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
        <div class="container">

            <div class="row justify-content-between gy-4">

                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                    <div class="content">
                        <h3>Dapatkan Update Terbaru Mengenai LPMK Tanjungrejo</h3>
                        <p>Rem id rerum. Debitis deserunt quidem delectus expedita ducimus dolor. Aut iusto ipsa. Eos
                            ipsum nobis
                            ipsa soluta itaque perspiciatis fuga ipsum perspiciatis. Eum amet fugiat totam nisi possimus
                            ut delectus
                            dicta.
                        <p>Aliquam velit deserunt autem. Inventore et saepe. Tenetur suscipit eligendi labore culpa eos.
                            Deserunt
                            porro magni qui necessitatibus dolorem at animi cupiditate.</p>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade">
                    <form action="forms/quote.php" method="post" class="php-email-form">
                        <h3>Get a quote</h3>
                        <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim
                            linead sero
                            park flows.</p>
                        <div class="row gy-3">

                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>

                            <div class="col-md-12 ">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your quote request has been sent successfully. Thank you!
                                </div>

                                <button type="submit">Get a quote</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Quote Form -->

            </div>

        </div>
    </section><!-- End Get Started Section -->



    
    <!-- ======= Get Started Section ======= -->
    <section id="get-started" class="get-started section-bg">
        <div class="container">

            <div class="row justify-content-between gy-4">

                <div class="col-lg-6 d-flex align-items-center" data-aos="fade-up">
                    <div class="content">
                        <h3>Dapatkan Update Terbaru Mengenai LPMK Tanjungrejo</h3>
                        <p>Rem id rerum. Debitis deserunt quidem delectus expedita ducimus dolor. Aut iusto ipsa. Eos
                            ipsum nobis
                            ipsa soluta itaque perspiciatis fuga ipsum perspiciatis. Eum amet fugiat totam nisi possimus
                            ut delectus
                            dicta.
                        <p>Aliquam velit deserunt autem. Inventore et saepe. Tenetur suscipit eligendi labore culpa eos.
                            Deserunt
                            porro magni qui necessitatibus dolorem at animi cupiditate.</p>
                    </div>
                </div>

                <div class="col-lg-5" data-aos="fade">
                    <form action="forms/quote.php" method="post" class="php-email-form">
                        <h3>Get a quote</h3>
                        <p>Vel nobis odio laboriosam et hic voluptatem. Inventore vitae totam. Rerum repellendus enim
                            linead sero
                            park flows.</p>
                        <div class="row gy-3">

                            <div class="col-md-12">
                                <input type="text" name="name" class="form-control" placeholder="Name" required>
                            </div>

                            <div class="col-md-12 ">
                                <input type="email" class="form-control" name="email" placeholder="Email" required>
                            </div>

                            <div class="col-md-12">
                                <input type="text" class="form-control" name="phone" placeholder="Phone" required>
                            </div>

                            <div class="col-md-12">
                                <textarea class="form-control" name="message" rows="6" placeholder="Message" required></textarea>
                            </div>

                            <div class="col-md-12 text-center">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your quote request has been sent successfully. Thank you!
                                </div>

                                <button type="submit">Get a quote</button>
                            </div>

                        </div>
                    </form>
                </div><!-- End Quote Form -->

            </div>

        </div>
    </section><!-- End Get Started Section -->



</main><!-- End #main -->
@endsection