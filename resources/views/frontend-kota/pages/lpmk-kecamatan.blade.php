@extends('frontend-kota.layouts.app')

@section('content')

<style>
    /* Style tag <a> */
    .card-kelurahan {
        text-decoration: none;
        /* Menghapus dekorasi default (biasanya garis bawah) */
        color: black;
        /* Warna teks hitam */
        transition: color 0.3s;
        /* Efek transisi untuk warna teks saat hover */
    }

    /* Efek animasi saat hover */
    .card-kelurahan:hover {
        color: black;
        background-color: #f8f9fa;
        cursor: pointer;
    }
</style>
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('assets/img/breadcrumbs-bg.jpg');">
    <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

        <h2>LPMK Kecamatan</h2>
        <ol>
            <li><a href="/">Home</a></li>
            <li>LPMK Kecamatan</li>
        </ol>

    </div>
</div><!-- End Breadcrumbs -->

<div class="container mt-5">
    <!-- Dropdown Pilihan Kecamatan -->
    <div class="form-group mb-5">
        <label for="selectKecamatan">Pilih Kecamatan:</label>
        <select class="form-control" id="selectKecamatan">
            <option value="blimbing">Blimbing</option>
            <option value="kedungkandang">Kedungkandang</option>
            <option value="klojen">Klojen</option>
            <option value="lowokwaru">Lowokwaru</option>
            <option value="sukun">Sukun</option>
        </select>
    </div>

    <!-- Konten Kecamatan -->
    <div id="kontenKecamatan">
        <!-- Blimbing -->
        <div id="blimbing" class="kecamatan">
            <div class="card mb-4">
                <div class="card-header">
                    <h2>Blimbing</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <a href="#Arjosari" class="card card-kelurahan">
                            <div class="card-body">Arjosari</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Balearjosari</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Blimbing</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Bunulrejo</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Jodipan</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Kesatrian</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Pandanwangi</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Polehan</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Polowijen</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Purwantoro</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Purwodadi</div>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Kedungkandang -->
        <div id="kedungkandang" class="kecamatan" style="display:none;">
            <div class="card mb-4">
                <div class="card-header">
                    <h2>Kedungkandang</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <a href="#Arjosari" class="card card-kelurahan">
                            <div class="card-body">Arjowinangun</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Bumiayu</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Buring</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Cemorokandang</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Kedungkandang</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Kotalama</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Lesanpuro</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Madyopuro</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Mergosono</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Sawojajar</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Tlogowaru</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Wonokoyo</div>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Klojen -->
        <div id="klojen" class="kecamatan" style="display:none;">
            <div class="card mb-4">
                <div class="card-header">
                    <h2>Klojen</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <a href="#Arjosari" class="card card-kelurahan">
                            <div class="card-body">Bareng</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Gadingasri</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Kasin</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Kauman</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Kiduldalem</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Klojen</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Oro-Oro Dowo</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Penanggungan</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Rampal Celaket</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Samaan</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Sukoharjo</div>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lowokwaru -->
        <div id="lowokwaru" class="kecamatan" style="display:none;">
            <div class="card mb-4">
                <div class="card-header">
                    <h2>Lowokwaru</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <a href="#Arjosari" class="card card-kelurahan">
                            <div class="card-body">Dinoyo</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Jatimulyo</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Ketawanggede</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Lowokwaru</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Merjosari</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Mojolangu</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Sumbersari</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Tasikmadu</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Tlogomas</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Tulusrejo</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Tunggulwulung</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Tunjungsekar</div>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sukun -->
        <div id="sukun" class="kecamatan" style="display:none;">
            <div class="card mb-4">
                <div class="card-header">
                    <h2>Sukun</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-6 mb-3">
                        <a href="#Arjosari" class="card card-kelurahan">
                            <div class="card-body">Bakalankrajan</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Bandulan</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Bandungrejosari</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Ciptomulyo</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Gadang</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Karangbesuki</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Kebonsari</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Mulyorejo</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Pisangcandi</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="#Balearjosari" class="card card-kelurahan">
                            <div class="card-body">Sukun</div>
                        </a>
                    </div>
                    <div class="col-md-6 mb-3">
                        <a href="/kecamatan" class="card card-kelurahan">
                            <div class="card-body">Tanjungrejo</div>
                        </a>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap JS and dependencies -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
    $(document).ready(function() {
        $("#selectKecamatan").change(function() {
            var selectedKecamatan = $(this).val();
            $(".kecamatan").hide(); 
            $("#" + selectedKecamatan).show();
        });
    });
</script>

@endsection
