@extends('frontend.layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>Tupoksi</h2>
        <ol>
            <li><a href="/profil">Profil</a></li>
            <li>Tupoksi</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->

<!-- ======= Features Section ======= -->
<section id="features" class="features section-bg">
    <div class="container" data-aos="fade-up">

        <ul class="nav nav-tabs row  g-2 d-flex">

            <li class="nav-item col-2">
                <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
                    <h4>Lurah</h4>
                </a>
            </li><!-- End tab nav item -->

            <li class="nav-item col-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
                    <h4>Seklur</h4>
                </a><!-- End tab nav item -->

            <li class="nav-item col-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
                    <h4>Tahtrantib</h4>
                </a>
            </li><!-- End tab nav item -->

            <li class="nav-item col-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                    <h4>PMP</h4>
                </a>
            </li><!-- End tab nav item -->

            <li class="nav-item col-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                    <h4>Kesmas</h4>
                </a>
            </li><!-- End tab nav item -->

            <li class="nav-item col-2">
                <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
                    <h4>Yanum</h4>
                </a>
            </li><!-- End tab nav item -->

        </ul>

        <div class="tab-content">

            <div class="tab-pane active show" id="tab-1">
                <div class="row">
                    <div class="justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <h3>Tugas pokok Lurah</h3>
                        <ol>
                            <li>menyelenggarakan urusan pemerintahan, pembangunan, kemasyarakatan;</li>
                            <li>mengkoordinasikan dan melakukan pengawasan melekat terhadap unit kerja bawahannya</li>
                        </ol>

                        <h3>Fungsi Lurah</h3>
                        <ol>
                            <li>penyusunan dan pelaksanaan Rencana Strategis (Renstra) dan Rencana Kerja (Renja);</li>
                            <li>pelaksanaan kegiatan pemerintahan Kelurahan;</li>
                            <li>penyelenggaraan kegiatan peningkatan kesejahteraan masyarakat;</li>
                            <li>pengkoordinasian kegiatan pembangunan;</li>
                            <li>pemberdayaan masyarakat;</li>
                            <li>pelayanan masyarakat;</li>
                            <li>penyelenggaraan ketentraman dan ketertiban umum;</li>
                            <li>pemeliharaan sarana dan prasarana pelayanan umum;</li>
                            <li>pembinaan lembaga kemasyarakatan;</li>
                            <li>pelaksanaan penerapan dan penegakan peraturan perundang-undangan di Kelurahan;</li>
                            <li>pelaksanaan Standar Pelayanan Minimal (SPM);</li>
                            <li>penyusunan dan pelaksanaan Standar Pelayanan Publik (SPP);</li>
                            <li>pelaksanaan fasilitasi pengukuran Indeks Kepuasan Masyarakat (IKM) dan/atau pelaksanaan pengumpulan pendapat pelanggan secara periodik yang bertujuan untuk memperbaiki kualitas layanan;</li>
                            <li>pengelolaan pengaduan masyarakat;</li>
                            <li>pengelolaan administrasi umum meliputi penyusunan program, ketatalaksanaan, ketatausahaan, keuangan, kepegawaian, rumah tangga, perlengkapan, kehumasan, kepustakaan dan kearsipan;</li>
                            <li>penyampaian data hasil pembangunan dan informasi lainnya terkait layanan publik secara berkala melalui web site Pemerintah Daerah;</li>
                            <li>pengevaluasian dan pelaporan pelaksanaan tugas pokok dan fungsi;</li>
                            <li>pelaksanaan tugas lain yang diberikan oleh Walikota sesuai tugas dan fungsinya.</li>
                        </ol>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center" data-aos="fade-up" data-aos-delay="200">
                        <img src="assets/img/features-1.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div><!-- End tab content item -->

            <div class="tab-pane" id="tab-2">
                <div class="row">
                    <div class="justify-content-center">
                        <h3>Tugas Pokok Sekretaris Lurah</h3>
                        <ol>
                            <li>Pengelolaan administrasi umum meliputi penyusunan program, ketatalaksanaan, ketatausahaan, keuangan, kepegawaian, urusan rumah tangga, perlengkapan, kehumasan dan kepustakaan serta kearsipan.</li>
                        </ol>

                        <h3>Fungsi Sekretaris Lurah</h3>
                        <ol>
                            <li>pelaksanaan penyusunan Rencana Strategis (Renstra) dan Rencana Kerja (Renja);</li>
                            <li>pelaksanaan penyusunan Rencana Kerja dan Anggaran (RKA) dan Dokumen Pelaksanaan Anggaran (DPA);</li>
                            <li>penyusunan Penetapan Kinerja (PK);</li>
                            <li>penyusunan dan pelaksanaan Standar Pelayanan Publik (SPP);</li>
                            <li>pelaksanaan dan pembinaan ketatausahaan, ketatalaksanaan dan kearsipan;</li>
                            <li>pengelolaan urusan kehumasan, keprotokolan, dan kepustakaan;</li>
                            <li>pelaksanaan administrasi dan pembinaan kepegawaian;</li>
                            <li>pengelolaan anggaran dan retribusi;</li>
                            <li>pelaksanaan administrasi keuangan dan pembayaran gaji pegawai;</li>
                            <li>pelaksanaan verifikasi Surat Pertanggungjawaban (SPJ) keuangan;</li>
                            <li>pelaksanaan inventarisasi aset /kekayaan daerah yang ada di Kelurahan;</li>
                            <li>pelaksanaan urusan rumah tangga dan perlengkapan;</li>
                            <li>pelaksanaan fasilitasi pengukuran Indeks Kepuasan Masyarakat (IKM) dan/atau pelaksanaan pengumpulan pendapat pelanggan secara periodik yang bertujuan untuk memperbaiki kualitas layanan;</li>
                            <li>penyampaian data hasil pembangunan dan informasi lainnya terkait layanan publik secara berkala melalui web site Pemerintah Daerah;</li>
                            <li>pengevaluasian dan pelaporan pelaksanaan tugas pokok dan fungsi;</li>
                            <li>pelaksanaan tugas lain yang diberikan oleh Lurah sesuai tugas dan fungsinya.</li>
                        </ol>
                    </div>
                    <div class="col-lg-6 order-1 order-lg-2 text-center">
                        <img src="assets/img/features-2.jpg" alt="" class="img-fluid">
                    </div>
                </div>
            </div><!-- End tab content item -->

            <div class="tab-pane" id="tab-3">
                <div class="row">
                    <div class="justify-content-center">
                        <h3>Tugas Pokok Sekretaris Lurah</h3>
                        <p class="fst-italic">
                            Pengelolaan administrasi umum meliputi penyusunan program, ketatalaksanaan, ketatausahaan, keuangan, kepegawaian, urusan rumah tangga, perlengkapan, kehumasan dan kepustakaan serta kearsipan.
                        </p>

                        <h3>Fungsi Sekretaris Lurah</h3>
                        <ol>
                            <li>pelaksanaan penyusunan Rencana Strategis (Renstra) dan Rencana Kerja (Renja);</li>
                            <li>pelaksanaan penyusunan Rencana Kerja dan Anggaran (RKA) dan Dokumen Pelaksanaan Anggaran (DPA);</li>
                            <li>penyusunan Penetapan Kinerja (PK);</li>
                            <li>penyusunan dan pelaksanaan Standar Pelayanan Publik (SPP);</li>
                            <li>pelaksanaan dan pembinaan ketatausahaan, ketatalaksanaan dan kearsipan;</li>
                            <li>pengelolaan urusan kehumasan, keprotokolan, dan kepustakaan;</li>
                            <li>pelaksanaan administrasi dan pembinaan kepegawaian;</li>
                            <li>pengelolaan anggaran dan retribusi;</li>
                            <li>pelaksanaan administrasi keuangan dan pembayaran gaji pegawai;</li>
                            <li>pelaksanaan verifikasi Surat Pertanggungjawaban (SPJ) keuangan;</li>
                            <li>pelaksanaan inventarisasi aset /kekayaan daerah yang ada di Kelurahan;</li>
                            <li>pelaksanaan urusan rumah tangga dan perlengkapan;</li>
                            <li>pelaksanaan fasilitasi pengukuran Indeks Kepuasan Masyarakat (IKM) dan/atau pelaksanaan pengumpulan pendapat pelanggan secara periodik yang bertujuan untuk memperbaiki kualitas layanan;</li>
                            <li>penyampaian data hasil pembangunan dan informasi lainnya terkait layanan publik secara berkala melalui web site Pemerintah Daerah;</li>
                            <li>pengevaluasian dan pelaporan pelaksanaan tugas pokok dan fungsi;</li>
                            <li>pelaksanaan tugas lain yang diberikan oleh Lurah sesuai tugas dan fungsinya.</li>
                        </ol>
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