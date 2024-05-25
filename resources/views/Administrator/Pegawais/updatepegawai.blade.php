@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Pegawai</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Pegawai</li>
        <li class="breadcrumb-item"><a href="{{ route('pegawai') }}"></a>Pegawai</li>
        <li class="breadcrumb-item active">Ubah Data Pegawai</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updatepegawai', $data->id) }}" method="POST">
        @csrf
          <div class="col-12">
            <label for="nama_pegawai" class="form-label">Nama Pegawai</label>
            <input type="text" class="form-control" id="nama_pegawai" name="nama_pegawai" value="{{ $data->nama_pegawai }}" required>
          </div>
          <div class="col-12">
            <label for="username" class="form-label">UserName</label>
            <input type="text" class="form-control" id="username" name="username" value="{{ $data->username }}" required>
          </div>
          <div class="col-12">
            <label for="password" class="form-label">Password</label>
            <input type="text" class="form-control" id="password" name="password" value="{{ $data->password }}" required>
          </div>
           <div class="col-12">
            <label for="no_telp" class="form-label">No Telp</label>
            <input type="text" class="form-control" id="no_telp" name="no_telp" value="{{ $data->no_telp }}" required>
          </div>
          <div class="col-12">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat" value="{{ $data->alamat }}" required>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <button type="submit" class="btn btn-success float-left">Update</button>
          </div>
        </form>
      </div>
    </div>
@endsection