@extends('admin-dashboard.layouts.master')

@section('title')
    Create Data Advokasi Kebijakan
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
                        <h3 class="card-title">Tambahkan Advokasi Kebijakan
                        </h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ url('admin/advokasi-kebijakan/create') }}" method="POST">
                        @csrf

                        <div class="card-body">
                            <div class="mb-3">
                                <a href="{{ url('/admin/advokasi-kebijakan') }}" class="btn btn-sm btn-primary">Back</a>
                            </div>
                            <div class="form-group">
                                <label>Kebijakan Didukung</label>
                                <input type="text" name="kebijakan_didukung" class="form-control"
                                    placeholder="Masukkan Kebijakan yang Didukung" value="{{ old('kebijakan_didukung') }}">
                                @error('kebijakan_didukung')
                                    <span class="text-danger">Data kebijakan yang didukung harus diisi.</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Strategi Advokasi</label>
                                <textarea name="strategi_advokasi" class="form-control" rows="3" placeholder="Masukkan Strategi Advokasi">{{ old('strategi_advokasi') }}</textarea>
                                @error('strategi_advokasi')
                                    <span class="text-danger">Data strategi advokasi harus diisi.</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Pihak Terkait</label>
                                <textarea name="pihak_terkait" class="form-control" rows="3" placeholder="Masukkan Pihak Terkait">{{ old('pihak_terkait') }}</textarea>
                                @error('pihak_terkait')
                                    <span class="text-danger">Data pihak terkait harus diisi.</span>
                                @enderror
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
                <!-- /.card -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
