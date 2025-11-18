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
      @foreach($mapels as $mapels)
      <tr>
        <td>{{ $mapels->id }}</td>
        <td>{{ $mapels->kode_mapel }}</td>
        <td>{{ $mapels->nama_mapel }}</td>
        <td>{{ $mapels->nama_pengajar }}</td>
        <td>{{ $mapels->kelas_yang_diajar }}</td>
        <td>
          <a href="{{ route('admin.mapel.show', $mapels->id) }}" class="btn btn-info btn-sm">Lihat</a>
          <a href="{{ route('admin.mapel.edit', $mapels->id) }}" class="btn btn-warning btn-sm">Edit</a>

          <form action="{{ route('admin.mapel.destroy', $mapels->id) }}" method="POST" class="d-inline"
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
