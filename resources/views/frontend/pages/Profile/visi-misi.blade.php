@extends('frontend.layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Visi Misi</h2>
        <ol>
            <li><a href="/profil">Profil</a></li>
            <li>Visi Misi</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Features Section ======= -->
<section id="features" class="features section-bg">
    <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row  g-2 d-flex justify-content-center">

            <li class="nav-item col-3">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                    <h4>Visi</h4>
                </a>
            </li><!-- End tab nav item -->

            <li class="nav-item col-3">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                    <h4>Misi</h4>
                </a><!-- End tab nav item -->

        </ul>

        <div class="tab-content">

            <div class="tab-pane active show" id="tab-1">
                <div class="row">
                    <div class="justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <!-- <h3>Voluptatem dignissimos provident</h3> -->
                        <p class="fst-italic">
                        “Terwujudnya Pelayanan Masyarakat Melalui pelayanan publik yang Prima.”
                        </p>
                        <!-- <ul>
                            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                                pariatur.</li>
                        </ul> -->
                    </div>
                    <!-- <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="/assets/img/features-1.jpg" alt="" class="img-fluid">
                    </div> -->
                </div>
            </div><!-- End tab content item -->

            <div class="tab-pane" id="tab-2">
                <div class="row">
                    <div class="justify-content-center">
                        <!-- <h3>Neque exercitationem debitis</h3> -->
                        <!-- <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore
                            magna aliqua.
                        </p> -->
                        <ol>
                            <li>Mewujudkan pelayanan masyarakat yang berkualitas, transparan dan akuntabel;</li>
                            <li>Mewujudkan pelaksanaan pembangunan yang berbasis partisipasi masyarakat dan berwawasan lingkungan.</li>
                        </ol>
                    </div>
                    <!-- <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="/assets/img/features-2.jpg" alt="" class="img-fluid">
                    </div> -->
                </div>
            </div><!-- End tab content item -->

            <div class="tab-pane" id="tab-3">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                        <h3>Voluptatibus commodi accusamu</h3>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check2-all"></i> Provident mollitia neque rerum asperiores dolores quos qui a.
                                Ipsum neque dolor voluptate nisi sed.</li>
                        </ul>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore
                            magna aliqua.
                        </p>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/features-3.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div><!-- End tab content item -->

            <div class="tab-pane" id="tab-4">
                <div class="row">
                    <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0 d-flex flex-column justify-content-center">
                        <h3>Omnis fugiat ea explicabo sunt</h3>
                        <p class="fst-italic">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et
                            dolore
                            magna aliqua.
                        </p>
                        <ul>
                            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
                            <li><i class="bi bi-check2-all"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
                            <li><i class="bi bi-check2-all"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis
                                aute irure dolor in reprehenderit in voluptate trideta storacalaperda mastiro dolore eu fugiat nulla
                                pariatur.</li>
                        </ul>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/features-4.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div><!-- End tab content item -->

        </div>

    </div>
</section><!-- End Features Section -->
@endsection