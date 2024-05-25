@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Ubah Data Hotel</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Hotel</li>
        <li class="breadcrumb-item"><a href="{{ route('hotel') }}"></a>Hotel</li>
        <li class="breadcrumb-item active">Ubah Data Hotel</li>
      </ol>
    </nav>
</div><!-- End Page Title -->

<div class="col-lg-12">

    <div class="card">
      <div class="card-body"><br>
        <form class="row g-3" action="{{ route('updatehotel', $data->id) }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="nama_hotel" class="form-label">Nama Hotel</label>
            <input type="text" class="form-control" id="nama_hotel" name="nama_hotel"  required>
          </div>
          <div class="col-12">
            <label for="jenis_hotel" class="form-label">Jenis Hotel</label>
            <input type="text" class="form-control" id="jenis_hotel" name="username"required>
          </div>
          <div class="col-12">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat"  required>
          </div>
           <div class="col-12">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" required>
          </div>
          <div class="text-center" style="margin-top: 20px;">
            <button type="submit" class="btn btn-success float-left">Update</button>
          </div>
        </form>
      </div>
    </div>
@endsection