@extends('admin-dashboard.layouts.master')

@section('title')
  Program Penelitian
@endsection

@section('content')
  <div class="content">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Data Program Penelitian</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="/admin">Home</a></li>
              <li class="breadcrumb-item active">Data Program Penelitian</li>
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
                <h3 class="card-title">Program Penelitian</h3>
              </div>
              <!-- /.card-header -->

              <div class="card-body">

                @if (session('status'))
                  <div class="alert alert-success">{{ session('status') }}</div>
                @endif

                                <div class="mb-2 w-50">
                                    <a href="{{ url('/admin/program-penelitian/create') }}"
                                        class="btn btn-primary btn-sm btn-flat">Create</a>
                                    <a href="{{ url('admin/program-penelitian/print') }}"
                                        class="btn btn-default btn-sm btn-flat" target="_blank">Print</a>
                                </div>
                                <table class="table table-bordered table-striped">
                                    <thead>
                                        <tr>
<<<<<<< HEAD
                                            <th>No</th>
=======
                                            <th>No.</th>
>>>>>>> b2ac7f02118fc7dd650991766415b5d7367c5591
                                            <th>Judul</th>
                                            <th>Deskripsi</th>
                                            <th>Tanggal</th>
                                            <th>Dokumentasi</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($programPenelitian as $item)
                                            <tr>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $item->judul }}</td>
                                                <td>{{ $item->deskripsi }}</td>
                                                <td style="width: 10%;">{{ $item->tanggal }}</td>
                                                <td>
                                                    <img src="{{ asset($item->dokumentasi) }}" style="width: 40%;"
                                                        alt="Image" />
                                                </td>
                                                <td>
                                                    <a href="{{ url('/admin/program-penelitian/' . $item->id . '/edit') }}"
                                                        class="btn btn-warning btn-sm mx-2 my-1">Edit</a>
                                                    <button type="button" class="btn btn-danger btn-sm mx-2 my-1"
                                                        data-toggle="modal" data-target="#deleteModal{{ $item->id }}">
                                                        Delete
                                                    </button>

                                                    <!-- Modal -->
                                                    <div class="modal fade" id="deleteModal{{ $item->id }}"
                                                        tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <h5 class="modal-title" id="exampleModalCenterTitle">
                                                                        Delete Confirmation</h5>
                                                                    <button type="button" class="close"
                                                                        data-dismiss="modal" aria-label="Close">
                                                                        <span aria-hidden="true">&times;</span>
                                                                    </button>
                                                                </div>
                                                                <div class="modal-body">
                                                                    Apakah anda yakin akan menghapus data
                                                                    '{{ $item->judul }}'?
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <a href="{{ url('/admin/program-penelitian/' . $item->id . '/delete') }}"
                                                                        class="btn btn-danger">Delete</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
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
