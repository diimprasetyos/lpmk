@extends('admin-dashboard.layouts.master')

@section('title')
  Users
@endsection

@section('content')
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Data User</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="/admin">Home</a></li>
            <li class="breadcrumb-item active">Data User</li>
          </ol>
        </div>
      </div>
    </div>

    <div class="card-body">

      @if (session('status'))
        <div class="alert alert-success">{{ session('status') }}</div>
      @endif

      <div class="mb-2 w-50">
        <a href="#" class="btn btn-primary btn-sm btn-flat">Create</a>
        <a href="#" class="btn btn-default btn-sm btn-flat" target="_blank">Print</a>
      </div>
      @include('admin-dashboard.pages.users.table')
    </div>
  </section>
@endsection
