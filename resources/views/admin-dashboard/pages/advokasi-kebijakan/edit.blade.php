@extends('admin-dashboard.layouts.master')

@section('title')
    Edit Data Advokasi Kebijakan
@endsection

@section('content')
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Advokasi Kebijakan</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Data Advokasi Kebijakan</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <!-- general form elements -->
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Ubah Advokasi Kebijakan
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ url('/admin/advokasi-kebijakan/' . $advokasiKebijakan->id . '/edit') }}"
                        method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="mb-3">
                                <a href="{{ url('/admin/advokasi-kebijakan') }}" class="btn btn-sm btn-primary">Back</a>
                            </div>
                            <div class="form-group">
                                <label>Kebijakan Didukung</label>
                                <input type="text" name="kebijakan_didukung" class="form-control"
                                    placeholder="Masukkan Kebijakan yang Didukung"
                                    value="{{ $advokasiKebijakan->kebijakan_didukung }}">
                                @error('kebijakan_didukung')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Strategi Advokasi</label>
                                <textarea name="strategi_advokasi" class="form-control" rows="3" placeholder="Masukkan Strategi Advokasi">{{ $advokasiKebijakan->strategi_advokasi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Pihak Terkait</label>
                                <textarea name="pihak_terkait" class="form-control" rows="3" placeholder="Masukkan Pihak Terkait">{{ $advokasiKebijakan->pihak_terkait }}</textarea>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Update</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
