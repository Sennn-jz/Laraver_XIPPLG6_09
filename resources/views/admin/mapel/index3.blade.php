@extends('layout.admin')

@section('title', 'Data Mapel')

@section('content')
<div class="container">
  <h1 class="mb-4">Data Mapel</h1>

  <a href="{{ route('admin.mapel.create') }}" class="btn btn-primary mb-3">+ Tambah Mapel</a>

  <table class="table table-bordered">
    <thead>
      <tr>
        <th>ID</th>
        <th>Kode Mapel</th>
        <th>Nama Mapel</th>
        <th>Nama Pengajar</th>
        <th>Kelas yang Diajar</th>
        <th>Aksi</th>
      </tr>
    </thead>

    <tbody>
      @foreach($mapels as $mapel)
      <tr>
          <td>{{ $mapel->id }}</td>
          <td>{{ $mapel->kode_mapel }}</td>
          <td>{{ $mapel->nama_mapel }}</td>
          <td>{{ $mapel->nama_pengajar }}</td>
          <td>{{ $mapel->kelas_yang_diajar }}</td>
          <td>
              <a href="{{ route('admin.mapel.show', $mapel->id) }}" class="btn btn-info btn-sm">Lihat</a>
              <a href="{{ route('admin.mapel.edit', $mapel->id) }}" class="btn btn-warning btn-sm">Edit</a>

              <form action="{{ route('admin.mapel.destroy', $mapel->id) }}" method="POST" class="d-inline"
                  onsubmit="return confirm('Apakah kamu yakin ingin menghapus data mapel ini?')">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger btn-sm">Hapus</button>
              </form>
          </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>
@endsection
