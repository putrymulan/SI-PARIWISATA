@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Pegawai</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Pegawai</li>
        <li class="breadcrumb-item"><a href="{{ route('pegawai') }}"></a>Data Pegawai</li>
        <li class="breadcrumb-item active">Tambah Data Pegawai</li>
      </ol>
    </nav>
</div><!-- End Page Title -->
{{-- Alert Success Delete --}}
@if (session()->has('danger'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
    {{ session('danger') }}
</div>
@endif
<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('insertpegawai') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai"  required>
          </div>
          <div class="col-12">
            <label for="username" class="form-label">UserName</label>
            <input type="text" class="form-control" id="username" name="username"required>
          </div>
          <div class="col-12">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password"  required>
          </div>
           <div class="col-12">
            <label for="no_telp" class="form-label">No Telp</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" required>
          </div>
          <div class="col-12">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="margin-top: 20px;" >Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="margin-top: 20px;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection