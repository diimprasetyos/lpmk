@extends('admin-dashboard.layouts.master')

@section('title')
    Program Wisata/Studi Banding
@endsection

@section('content')
    <div class="content">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Data Program Wisata/Studi Banding</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                            <li class="breadcrumb-item active">Data Program Wisata/Studi Banding</li>
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
                                <h3 class="card-title">Program Wisata/Studi Banding</h3>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">

                                @if (session('status'))
                                    <div class="alert alert-success">{{ session('status') }}</div>
                                @endif

                                <div class="mb-2 w-50">
                                    <a href="{{ url('/admin/program-wisata-sb/create') }}"
                                        class="btn btn-primary btn-sm btn-flat">Create</a>
                                    <a href="{{ url('admin/program-wisata-sb/print') }}"
                                        class="btn btn-default btn-sm btn-flat" target="_blank">Print</a>
                                </div>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Jenis</th>
                                            <th>Tanggal</th>
                                            <th>Dokumentasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($programWisataSB as $item)
                                            <tr>
                                                <td>{{ $item->ID }}</td>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ $item->deskripsi }}</td>
                                                <td>{{ $item->jenis }}</td>
                                                <td style="width: 10%;">{{ $item->tanggal }}</td>
                                                <td>
                                                    <img src="{{ asset($item->dokumentasi) }}" style="width: 40%;"
                                                        alt="Image" />
                                                </td>
                                                <td>
                                                    <a href="{{ url('/admin/program-wisata-sb/' . $item->id . '/edit') }}"
                                                        class="btn btn-warning btn-sm mx-2 my-1">Edit</a>
                                                    <a href="{{ url('/admin/program-wisata-sb/' . $item->id . '/delete') }}"
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
