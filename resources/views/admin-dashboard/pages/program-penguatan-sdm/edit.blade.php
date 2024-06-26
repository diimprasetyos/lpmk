@extends('admin-dashboard.layouts.master')

@section('title')
    Edit Data Program Penguatan SDM
@endsection

@section('content')
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Program Penguatan SDM</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Data Program Penguatan SDM</li>
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
                        <h3 class="card-title">Ubah Program Penguatan SDM</h3>
                    </div>
                    <!-- /.card-header -->

                    <!-- form start -->
                    <form action="{{ url('/admin/program-penguatan-sdm/' . $programPenguatanSDM->id . '/edit') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="mb-3">
                                <a href="{{ url('/admin/program-penguatan-sdm') }}" class="btn btn-sm btn-primary">Back</a>
                            </div>
                            <div class="form-group">
                                <label>Judul</label><br>
                                <input type="text" name="judul" class="form-control"
                                    placeholder="Masukkan Judul Program Penguatan SDM"
                                    value="{{ $programPenguatanSDM->judul }}">
                                @error('judul')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" rows="3" placeholder="Masukkan Deskripsi">{{ $programPenguatanSDM->deskripsi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Tanggal</label>
                                <input type="date" name="tanggal" class="form-control"
                                    value="{{ $programPenguatanSDM->tanggal }}">
                                @error('tanggal')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Dokumentasi</label><br>
                                <input type="file" name="dokumentasi" id="formFile">
                                @error('dokumentasi')
                                    <br><span class="text-danger">{{ $message }}</span>
                                @enderror
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
