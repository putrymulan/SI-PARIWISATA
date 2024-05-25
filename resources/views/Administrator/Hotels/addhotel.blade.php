@extends('layout.template') @section('content')

<div class="pagetitle">
    <h1>Tambah Data Hotel</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item">Hotel</li>
        <li class="breadcrumb-item"><a href="{{ route('hotel') }}"></a>Data Hotel</li>
        <li class="breadcrumb-item active">Tambah Data Hotel</li>
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
        <form class="row g-3" action="{{ route('inserthotel') }}" method="POST">
        @csrf
        <div class="col-12">
            <label for="id_pegawai" class="form-label">Nama Pegawai</label>
              <select id="id_pegawai" class="form-control" name="id_pegawai" required>
                <option value="">-- Pilih --</option>
                  @foreach ($data_pegawai as $row)
                    <option value="{{ $row->id }}">{{ $row->nama_pegawai }}</option>
                  @endforeach
              </select>
        </div>
        <div class="col-12">
            <label for="nama_hotel" class="form-label">Nama Hotel</label>
            <input type="text" class="form-control" id="nama_hotel" name="nama_hotel"required>
          </div>
        
          <div class="col-12">
            <label for="jenis_hotel" class="form-label">Jenis Hotel</label>
            <input type="text" class="form-control" id="jenis_hotel" name="jenis_hotel"required>
          </div>
          <div class="col-12">
            <label for="alamat" class="form-label">Alamat</label>
            <input type="text" class="form-control" id="alamat" name="alamat"required>
          </div>
        
           <div class="col-12">
            <label for="harga" class="form-label">Harga</label>
            <input type="text" class="form-control" id="harga" name="harga" required>
          </div>
          <div class="text-center">
            <button type="submit" class="btn btn-primary float-left" style="margin-top: 20px;" >Simpan</button>
            <button type="reset" class="btn btn-secondary float-right" style="margin-top: 20px;">Reset</button>
          </div>
        </form>
      </div>
    </div>
@endsection