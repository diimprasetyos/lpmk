@extends('admin-dashboard.layouts.master')

@section('title')
    Program Aspirasi
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
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Program Aspirasi</h3>
                            </div>
                            <!-- /.card-header -->

                            <div class="card-body">

                                @if (session('status'))
                                    <div class="alert alert-success">{{ session('status') }}</div>
                                @endif

                                <div class="mb-2 w-50">
                                    <a href="{{ url('/admin/program-aspirasi/create') }}"
                                        class="btn btn-primary btn-sm btn-flat">Create</a>
                                    <a href="{{ url('admin/program-aspirasi/print') }}"
                                        class="btn btn-default btn-sm btn-flat" target="_blank">Print</a>
                                </div>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Judul</th>
                                            <th>Prioritas</th>
                                            <th>RT</th>
                                            <th>RW</th>
                                            <th>Deskripsi</th>
                                            <th>Perantara</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($programAspirasi as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->detailProgramAspirasi->title }}</td>
                                                <td>{{ $item->detailProgramAspirasi->prioritas }}</td>
                                                <td>{{ $item->detailProgramAspirasi->rt }}</td>
                                                <td>{{ $item->detailProgramAspirasi->rw }}</td>
                                                <td>{{ $item->detailProgramAspirasi->deskripsi }}</td>
                                                <td>{{ $item->perantara }}</td>
                                                <td>
                                                    <form
                                                        action="{{ url('/admin/program-aspirasi/' . $item->id . '/update-status') }}"
                                                        method="POST">
                                                        @csrf
                                                        @method('PUT')
                                                        <select name="status"
                                                            class="custom-select form-control-border border-width-2"
                                                            onchange="this.form.submit()">
                                                            <option value="pending"
                                                                {{ $item->status == 'pending' ? 'selected' : '' }}>Pending
                                                            </option>
                                                            <option value="accepted"
                                                                {{ $item->status == 'accepted' ? 'selected' : '' }}>
                                                                Accepted</option>
                                                            <option value="rejected"
                                                                {{ $item->status == 'rejected' ? 'selected' : '' }}>
                                                                Rejected</option>
                                                        </select>
                                                    </form>
                                                </td>
                                                <td>
                                                    <a href="{{ url('/admin/program-aspirasi/' . $item->id . '/edit') }}"
                                                        class="btn btn-warning btn-sm mx-2 my-1">Edit</a>
                                                    <a href="{{ url('/admin/program-aspirasi/' . $item->id . '/delete') }}"
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
