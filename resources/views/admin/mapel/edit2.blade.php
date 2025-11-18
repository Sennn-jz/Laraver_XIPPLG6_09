@extends('layout.admin')
@section('title', 'Edit Data Mapel')
@section('content')
<div class="container-fluid">
  <h2>Edit Data Mapel</h2>
  <form action="{{ route('admin.mapel.update', $mapel->id) }}" method="POST">
    @csrf
    @method('PUT')
    <div class="form-group mb-3">
      <label>Kode Mapel</label>
      <input type="text" name="kode_mapel" value="{{ $mapel->kode_mapel }}" class="form-control" required>
    </div>
    <div class="form-group mb-3">
      <label>Nama Mapel</label>
      <input type="text" name="nama_mapel" value="{{ $mapel->nama_mapel }}" class="form-control" required>
    </div>
    <div class="form-group mb-3">
      <label>Nama Pengajar</label>
      <input type="text" name="nama_pengajar" value="{{ $mapel->nama_pengajar }}" class="form-control" required>
    </div>
    <div class="form-group mb-3">
      <label>Kelas yang Diajar</label>
      <input type="text" name="kelas_yang_diajar" value="{{ $mapel->kelas_yang_diajar }}" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Update</button>
    <a href="{{ route('admin.mapel.index') }}" class="btn btn-secondary">Kembali</a>
  </form>
</div>
@endsection
