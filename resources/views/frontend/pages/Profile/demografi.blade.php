@extends('frontend.layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Kondisi Demografi</h2>
        <ol>
            <li><a href="/profil">Profil</a></li>
            <li>Kondisi Demografi</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Features Section ======= -->
<section id="features" class="features section-bg">
    <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row  g-2 d-flex justify-content-center">

            <li class="nav-item col-3 text-center">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                    <h4>Jumlah Penduduk</h4>
                </a>
            </li><!-- End tab nav item -->

            <li class="nav-item col-3 text-center">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                    <h4>Jumlah Penduduk berdasarkan mata pencaharian</h4>
                </a><!-- End tab nav item -->
            </li>

            <li class="nav-item col-3 text-center">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                    <h4>Jumlah Penduduk berdasarkan mata tingkat pendidikan</h4>
                </a><!-- End tab nav item -->
            </li>
        </ul>

        <div class="tab-content">

            <div class="tab-pane active show" id="tab-1">
                <div class="row">
                    <div class="justify-content-center" data-aos="fade-up" data-aos-delay="100">
                    <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Jenis Kelamin</th>
                                        <th scope="col">Jumlah</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Laki-laki</td>
                                        <td>14.647 Jiwa</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Perempuan</td>
                                        <td>15.524 Jiwa</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jumlah (Laki-laki & Perempuan)</td>
                                        <td>30.171 Jiwa, 8.019 KK</td>
                                    </tr>
                                </tbody>
                            </table>
                    </div>
                    <!-- <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="/assets/img/features-1.jpg" alt="" class="img-fluid">
                    </div> -->
                </div>
            </div><!-- End tab content item -->

            <div class="tab-pane" id="tab-2">
                <div class="row">
                    <div class="justify-content-center">
                        <div class="container">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <th scope="col">No</th>
                                        <th scope="col">Jenis Pekerjaan</th>
                                        <th scope="col">Jumlah Orang</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>Pegawai Negeri Sipil</td>
                                        <td>552 orang</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>TNI/POLRI</td>
                                        <td>211 orang</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Swasta</td>
                                        <td>9.352 orang</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Wiraswasta/Pedagang</td>
                                        <td>4.143 orang</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Petani</td>
                                        <td>15 orang</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Pertukangan</td>
                                        <td>214 orang</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>Pensiunan</td>
                                        <td>252 orang</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Pemulung</td>
                                        <td>15 orang</td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Jasa</td>
                                        <td>275 orang</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
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