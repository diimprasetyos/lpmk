@extends('admin-dashboard.layouts.master')

@section('title')
    Create Data Program Aspirasi
@endsection

@section('content')
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Program Aspirasi</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Data Program Aspirasi</li>
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
                        <h3 class="card-title">Ubah Program Aspirasi</h3>
                    </div>
                    <!-- /.card-header -->
                    <!-- form start -->
                    <form action="{{ url('/admin/program-aspirasi/' . $programAspirasi->id . '/edit') }}" method="POST">
                        @csrf
                        @method('PUT')

                        <div class="card-body">
                            <div class="mb-3">
                                <a href="{{ url('/admin/program-aspirasi') }}" class="btn btn-sm btn-primary">Back</a>
                            </div>
                            <div class="form-group">
                                <label>Title</label>
                                <input type="text" name="title" class="form-control" placeholder="Masukkan Title"
                                    value="{{ $programAspirasi->detailProgramAspirasi->title }}">
                                @error('title')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Prioritas</label>
                                <select class="custom-select form-control-border border-width-2" name="prioritas">
                                    <option @selected($programAspirasi->detailProgramAspirasi->prioritas == 'P1')>P1</option>
                                    <option @selected($programAspirasi->detailProgramAspirasi->prioritas == 'P2')>P2</option>
                                    <option @selected($programAspirasi->detailProgramAspirasi->prioritas == 'P3')>P3</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>RT</label>
                                <input type="text" name="rt" class="form-control" placeholder="Masukkan RT"
                                    value="{{ $programAspirasi->detailProgramAspirasi->rt }}">
                                @error('rt')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>RW</label>
                                <input type="text" name="rw" class="form-control" placeholder="Masukkan RW"
                                    value="{{ $programAspirasi->detailProgramAspirasi->rw }}">
                                @error('rw')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label>Deskripsi</label>
                                <textarea name="deskripsi" class="form-control" rows="3" placeholder="Masukkan Deskripsi">{{ $programAspirasi->detailProgramAspirasi->deskripsi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label>Perantara</label>
                                <input type="text" name="perantara" class="form-control" placeholder="Masukkan Perantara"
                                    value="{{ $programAspirasi->perantara }}">
                                @error('perantara')
                                    <span class="text-danger">{{ $message }}</span>
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
