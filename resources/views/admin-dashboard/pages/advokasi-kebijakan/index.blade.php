@extends('admin-dashboard.layouts.master')

@section('title')
    Data Advokasi Kebijakan
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Advokasi Kebijakan</h3>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">

                                @if (session('status'))
                                    <div class="alert alert-success">{{ session('status') }}</div>
                                @endif

                                <div class="mb-2 w-50">
                                    <a href="{{ url('/admin/advokasi-kebijakan/create') }}"
                                        class="btn btn-primary btn-sm btn-flat">Create</a>
                                    <a href="{{ url('admin/advokasi-kebijakan/print') }}"
                                        class="btn btn-default btn-sm btn-flat" target="_blank">Print</a>
                                </div>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kebijakan Didukung</th>
                                            <th>Strategi Advokasi</th>
                                            <th>Pihak Terkait</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($advokasiKebijakan as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->kebijakan_didukung }}</td>
                                                <td>{{ $item->strategi_advokasi }}</td>
                                                <td>{{ $item->pihak_terkait }}</td>
                                                <td>
                                                    <a href="{{ url('/admin/advokasi-kebijakan/' . $item->id . '/edit') }}"
                                                        class="btn btn-warning btn-sm mx-2 my-1">Edit</a>
                                                    <a href="{{ url('/admin/advokasi-kebijakan/' . $item->id . '/delete') }}"
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
