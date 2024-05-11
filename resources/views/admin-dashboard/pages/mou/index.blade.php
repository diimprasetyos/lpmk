@extends('admin-dashboard.layouts.master')

@section('title')
    MOU
@endsection

@section('content')
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data MOU</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Data MOU</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">MOU</h3>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">

                                @if (session('status'))
                                    <div class="alert alert-success">{{ session('status') }}</div>
                                @endif

                                <div class="mb-2 w-50">
                                    <a href="{{ url('/admin/mou/create') }}"
                                        class="btn btn-primary btn-sm btn-flat">Create</a>
                                </div>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Nama Mitra</th>
                                            <th>Deskripsi</th>
                                            <th>File</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($MOU as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ $item->nama_mitra }}</td>
                                                <td>{{ $item->deskripsi }}</td>
                                                <td>
                                                    <a href="{{ route('download.file', ['id' => $item->id]) }}"
                                                        download>Download</a>
                                                </td>
                                                <td>
                                                    <a href="{{ url('/admin/mou/' . $item->id . '/edit') }}"
                                                        class="btn btn-warning btn-sm mx-2 my-1">Edit</a>
                                                    <a href="{{ url('/admin/mou/' . $item->id . '/delete') }}"
                                                        class="btn btn-danger btn-sm mx-2 my-1"
                                                        onclick="return confirm('Apakah anda yakin?')">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@endsection
