@extends('frontend.layouts.app')

@section('content')
<!-- ======= Breadcrumbs ======= -->
<div class="breadcrumbs d-flex align-items-center" style="background-image: url('/assets/img/breadcrumbs-bg.jpg');">
  <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">

    <h2>Bantuan</h2>
    <ol>
      <li><a href="/">Home</a></li>
      <li>Bantuan</li>
    </ol>

  </div>
</div><!-- End Breadcrumbs -->

<section id="contact" class="contact">
  <div class="container" data-aos="fade-up" data-aos-delay="100">
    <div class="row gy-4">
      <div class="col-lg-6">
        <div class="info-item  d-flex flex-column justify-content-center align-items-center text-center">
          <i class="bi bi-map"></i>
          <h3>Alamat</h3>
          <p>Jln. Terusan Mergan Raya No. 1 Kelurahan Tanjungrejo Kecamatan Sukun Kota Malang</p>
        </div>
      </div><!-- End Info Item -->

      <div class="col-lg-3 col-md-6">
        <div class="info-item d-flex flex-column justify-content-center align-items-center">
          <i class="bi bi-envelope"></i>
          <h3>Alamat E-mail</h3>
          <p>kel-tanjungrejo@malangkota.go.id</p>
        </div>
      </div><!-- End Info Item -->

      <div class="col-lg-3 col-md-6">
        <div class="info-item  d-flex flex-column justify-content-center align-items-center">
          <i class="bi bi-telephone"></i>
          <h3>Hubungi Kami</h3>
          <p>(0341) 327395</p>
        </div>
      </div><!-- End Info Item -->
    </div>

    <div class="container mt-5">
      <h2 class="mb-4">Hubungi kami di whatsapp</h2>
      <div class="row">
        <div class="col-4">
          <a href="https://wa.me/1234567890" class="btn btn-success btn-lg btn-block" target="_blank">
            <i class="fab fa-whatsapp"></i> WhatsApp
          </a>
        </div>
      </div>
    </div>
  </div>
</section>
@endsection