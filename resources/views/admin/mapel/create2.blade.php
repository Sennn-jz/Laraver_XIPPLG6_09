@extends('layout.admin')
@section('title', 'Tambah Mapel')

@section('content')
<div class="container">
  <h1>Tambah Mapel Baru</h1>
  <form action="{{ route('admin.mapel.store') }}" method="POST">
    @csrf
    <div class="mb-3">
      <label>Kode Mapel</label>
      <input type="text" name="kode_mapel" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Nama Mape</label>
      <input type="text" name="nama_mapel" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Nama Pengajar</label>
      <input type="text" name="nama_pengajar" class="form-control" required>
    </div>
    <div class="mb-3">
      <label>Kelas yang Diajar</label>
      <input type="text" name="kelas_yang_diajar" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-success">Simpan</button>
  </form>
</div>
@endsection
