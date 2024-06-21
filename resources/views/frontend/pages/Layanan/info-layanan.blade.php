@extends('frontend.layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Layanan Kelurahan</h2>
    <ol>
      <li><a href="/">Home</a></li>
      <li>Layanan Kelurahan</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->


<!-- ======= Features Section ======= -->
<section id="features" class="features section-bg">
  <div class="container" data-aos="fade-up">

    <ul class="nav nav-tabs row  g-2 d-flex justify-content-center">

      <li class="nav-item col-3 text-center">
        <a class="nav-link active show" data-bs-toggle="tab" data-bs-target="#tab-1">
          <h4>Seksi Kesmas</h4>
        </a>
      </li><!-- End tab nav item -->

      <li class="nav-item col-3 text-center">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-2">
          <h4>Seksi Yanmum</h4>
        </a><!-- End tab nav item -->
      </li>

      <li class="nav-item col-3 text-center">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-3">
          <h4>Seksi Tantib</h4>
        </a><!-- End tab nav item -->
      </li>

      <li class="nav-item col-3 text-center">
        <a class="nav-link" data-bs-toggle="tab" data-bs-target="#tab-4">
          <h4>Seksi PMP</h4>
        </a><!-- End tab nav item -->
      </li>
    </ul>

    <div class="tab-content">

      <div class="tab-pane active show" id="tab-1">
        <div class="row">
          <div class="justify-content-center">
            <div>
              <!-- content 1 -->
              <div class="mb-2">
                <a href="#akte-kelahiran" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat Keterangan Kelahiran dan akte kelahiran
                </a>
                <div class="collapse m-4" id="akte-kelahiran">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>Surat Keterangan/ Pengantar dari RT & RW</li>
                    <li>Foto copy KK & KTP Suami-Istri</li>
                    <li>Menunjukkan KK & KTP Asli Pemohon</li>
                    <li>Foto Copy Surat Nikah</li>
                    <li>Surat Keterangan Kelahiran dari Dokter atau Bidan</li>
                  </ol>
                  <div class="">
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pembetulan-akta.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 1 -->

              <!-- content 2 -->
              <div class="mb-2">
                <a href="#akte-kematian" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat Keterangan Kematian dan akte Kematian
                </a>
                <div class="collapse m-4" id="akte-kematian">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>Surat Keterangan/ Pengantar dari RT & RW</li>
                    <li>Foto copy KK & KTP Almarhum</li>
                    <li>Foto copy KK & KTP Pelapor</li>
                    <li>Fotocopi Surat Kematian dari Rumah Sakit jika meninggal di RS</li>
                  </ol>
                  <div>
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pencatatan-kematian_2.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 2 -->

              <!-- content 2 -->
              <div class="mb-2">
                <a href="#surat-nikah" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat Pengantar Pernikahan Dan Perceraian
                </a>
                <div class="collapse m-4" id="surat-nikah">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>...</li>

                  </ol>
                  <div>
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pencatatan-kematian_2.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 2 -->

              <!-- content 2 -->
              <div class="mb-2">
                <a href="#surat-miskin" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat Keterangan Tidak Mampu/ Miskin
                </a>
                <div class="collapse m-4" id="surat-miskin">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>...</li>

                  </ol>
                  <div>
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pencatatan-kematian_2.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 2 -->

              <!-- content 2 -->
              <div class="mb-2">
                <a href="#surat-imigrasi" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat Keterangan Keluar Negeri/Imigrasi
                </a>
                <div class="collapse m-4" id="surat-imigrasi">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>...</li>

                  </ol>
                  <div>
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pencatatan-kematian_2.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 2 -->

              <!-- content 2 -->
              <div class="mb-2">
                <a href="#surat-sosial" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat-surat yang berkaitan dengan sosial dan kesejateraan masyarakat
                </a>
                <div class="collapse m-4" id="surat-sosial">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>...</li>

                  </ol>
                  <div>
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pencatatan-kematian_2.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 2 -->

            </div>
          </div>
        </div>
      </div><!-- End tab content item -->

      <div class="tab-pane" id="tab-2">
        <div class="row">
          <div class="justify-content-center">
            <div>
              <!-- content 1 -->
              <div class="mb-2">
                <a href="#akte-kelahiran" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat Pengantar KK dan KTP
                </a>
                <div class="collapse m-4" id="akte-kelahiran">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>Surat Keterangan/ Pengantar dari RT & RW</li>
                    <li>Foto copy KK & KTP Suami-Istri</li>
                    <li>Menunjukkan KK & KTP Asli Pemohon</li>
                    <li>Foto Copy Surat Nikah</li>
                    <li>Surat Keterangan Kelahiran dari Dokter atau Bidan</li>
                  </ol>
                  <div class="">
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pembetulan-akta.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 1 -->

              <!-- content 2 -->
              <div class="mb-2">
                <a href="#akte-kematian" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat Pengantar SKCK
                </a>
                <div class="collapse m-4" id="akte-kematian">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>Surat Keterangan/ Pengantar dari RT & RW</li>
                    <li>Foto copy KK & KTP Almarhum</li>
                    <li>Foto copy KK & KTP Pelapor</li>
                    <li>Fotocopi Surat Kematian dari Rumah Sakit jika meninggal di RS</li>
                  </ol>
                  <div>
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pencatatan-kematian_2.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 2 -->

              <!-- content 2 -->
              <div class="mb-2">
                <a href="#surat-nikah" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat Pengantar Pindah Domisili Penduduk
                </a>
                <div class="collapse m-4" id="surat-nikah">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>...</li>

                  </ol>
                  <div>
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pencatatan-kematian_2.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 2 -->

              <!-- content 2 -->
              <div class="mb-2">
                <a href="#surat-miskin" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat Boro Kerja
                </a>
                <div class="collapse m-4" id="surat-miskin">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>...</li>

                  </ol>
                  <div>
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pencatatan-kematian_2.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 2 -->

              <!-- content 2 -->
              <div class="mb-2">
                <a href="#surat-imigrasi" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat Keterangan Domisili Penduduk
                </a>
                <div class="collapse m-4" id="surat-imigrasi">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>...</li>

                  </ol>
                  <div>
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pencatatan-kematian_2.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 2 -->

              <!-- content 2 -->
              <div class="mb-2">
                <a href="#surat-sosial" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat Model "C" dengan administrasi kependudukan
                </a>
                <div class="collapse m-4" id="surat-sosial">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>...</li>

                  </ol>
                  <div>
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pencatatan-kematian_2.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 2 -->

            </div>
          </div>
        </div>
      </div><!-- End tab content item -->

      <div class="tab-pane" id="tab-3">
        <div class="row">
          <div class="justify-content-center">
            <div>
              <!-- content 1 -->
              <div class="mb-2">
                <a href="#akte-kelahiran" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat Ijin Keramaian
                </a>
                <div class="collapse m-4" id="akte-kelahiran">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>Surat Keterangan/ Pengantar dari RT & RW</li>
                    <li>Foto copy KK & KTP Suami-Istri</li>
                    <li>Menunjukkan KK & KTP Asli Pemohon</li>
                    <li>Foto Copy Surat Nikah</li>
                    <li>Surat Keterangan Kelahiran dari Dokter atau Bidan</li>
                  </ol>
                  <div class="">
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pembetulan-akta.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 1 -->

              <!-- content 2 -->
              <div class="mb-2">
                <a href="#akte-kematian" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat Domisili Usaha
                </a>
                <div class="collapse m-4" id="akte-kematian">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>Surat Keterangan/ Pengantar dari RT & RW</li>
                    <li>Foto copy KK & KTP Almarhum</li>
                    <li>Foto copy KK & KTP Pelapor</li>
                    <li>Fotocopi Surat Kematian dari Rumah Sakit jika meninggal di RS</li>
                  </ol>
                  <div>
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pencatatan-kematian_2.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 2 -->

              <!-- content 2 -->
              <div class="mb-2">
                <a href="#surat-nikah" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat Keterangan Waris/Akte Jual Beli/Akte Hibah Tanah dan Bangunan
                </a>
                <div class="collapse m-4" id="surat-nikah">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>...</li>

                  </ol>
                  <div>
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pencatatan-kematian_2.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 2 -->

              <!-- content 2 -->
              <div class="mb-2">
                <a href="#surat-miskin" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat Keterangan Ijin Usaha (HO)/IMB
                </a>
                <div class="collapse m-4" id="surat-miskin">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>...</li>

                  </ol>
                  <div>
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pencatatan-kematian_2.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 2 -->

              <!-- content 2 -->
              <div class="mb-2">
                <a href="#surat-imigrasi" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat Keterangan Pajak Bumi dan Bangunan
                </a>
                <div class="collapse m-4" id="surat-imigrasi">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>...</li>

                  </ol>
                  <div>
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pencatatan-kematian_2.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 2 -->

              <!-- content 2 -->
              <div class="mb-2">
                <a href="#surat-sosial" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat-surat yang berkaitan dengan Ketertiban dan Keamanan Lingkungan
                </a>
                <div class="collapse m-4" id="surat-sosial">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>...</li>

                  </ol>
                  <div>
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pencatatan-kematian_2.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 2 -->

            </div>
          </div>
        </div>
      </div><!-- End tab content item -->

      <div class="tab-pane" id="tab-4">
        <div class="row">
          <div class="justify-content-center">
            <div>
              <!-- content 1 -->
              <div class="mb-2">
                <a href="#akte-kelahiran" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat Pengantar Kredit Usaha
                </a>
                <div class="collapse m-4" id="akte-kelahiran">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>Surat Keterangan/ Pengantar dari RT & RW</li>
                    <li>Foto copy KK & KTP Suami-Istri</li>
                    <li>Menunjukkan KK & KTP Asli Pemohon</li>
                    <li>Foto Copy Surat Nikah</li>
                    <li>Surat Keterangan Kelahiran dari Dokter atau Bidan</li>
                  </ol>
                  <div class="">
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pembetulan-akta.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 1 -->

              <!-- content 2 -->
              <div class="mb-2">
                <a href="#surat-sosial" class="btn p-0 m-0" data-bs-toggle="collapse" role="button" aria-expanded="false" aria-controls="surat-sosial">
                  <i class="fas fa-plus"></i> Surat-surat yang berkaitan dengan sosial dan kesejateraan masyarakat
                </a>
                <div class="collapse m-4" id="surat-sosial">
                  <p><b>Berkas Persyaratan:</b></p>
                  <ol>
                    <li>...</li>

                  </ol>
                  <div>
                    <a href="http://keltanjungrejo.malangkota.go.id/wp-content/uploads/sites/61/2016/06/pencatatan-kematian_2.pdf" class="btn btn-primary m-4" target="_blank">
                      Unduh Formulir
                    </a>
                  </div>
                </div>
              </div>
              <!-- end content 2 -->

            </div>
          </div>
        </div>
      </div><!-- End tab content item -->


    </div>

  </div>
</section><!-- End Features Section -->
@endsection