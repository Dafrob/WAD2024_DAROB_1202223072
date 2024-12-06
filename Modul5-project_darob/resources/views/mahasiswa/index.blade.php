@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Daftar Mahasiswa</h1>
    <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary mb-3">Tambah Mahasiswa</a>

    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>No</th>
                    <th>NIM</th>
                    <th>Nama Mahasiswa</th>
                    <th>Email</th>
                    <th>Jurusan</th>
                    <th>Dosen ID</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($mahasiswa as $index => $data)
                <tr>
                    <td>{{ $index + 1 }}</td>
                    <td>{{ $data->nim }}</td>
                    <td>{{ $data->nama_mahasiswa }}</td>
                    <td>{{ $data->email }}</td>
                    <td>{{ $data->jurusan }}</td>
                    <td>{{ $data->dosen_id }}</td>
                    <td>
                        <a href="{{ route('mahasiswa.show', $data->id) }}" class="btn btn-info btn-sm">Detail</a>
                        <a href="{{ route('mahasiswa.edit', $data->id) }}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{ route('mahasiswa.destroy', $data->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">Data mahasiswa belum tersedia</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection