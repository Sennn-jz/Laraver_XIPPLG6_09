@extends('layout.admin')

@section('title', 'Detail Mapel')

@section('content')
<div class="container-fluid">
  <h1 class="mb-3">Detail Mapel</h1>

  <div class="card">
    <div class="card-body">
      <table class="table table-bordered">
        <tr>
          <th>ID</th>
          <td>{{ $mapel->id }}</td>
        </tr>
        <tr>
          <th>Kode Mapel</th>
          <td>{{ $mapel->kode_mapel }}</td>
        </tr>
        <tr>
          <th>Nama Mapel</th>
          <td>{{ $mapel->nama_mapel }}</td>
        </tr>
        <tr>
          <th>Nama Pengajar</th>
          <td>{{ $mapel->nama_pengajar }}</td>
        </tr>
        <tr>
          <th>Kelas yang Diajar</th>
          <td>{{ $mapel->kelas_yang_diajar }}</td>
        </tr>
      </table>

      <a href="{{ route('admin.mapel.index') }}" class="btn btn-secondary">Kembali</a>
      <a href="{{ route('admin.mapel.edit', $mapel->id) }}" class="btn btn-warning">Edit</a>
    </div>
  </div>
</div>
@endsection
