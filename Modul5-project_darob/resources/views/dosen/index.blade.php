<!-- resources/views/dosen/index.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Data Dosen</h1>
    
    <!-- Tampilkan pesan sukses -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tombol Tambah Dosen -->
    <div class="mb-3">
        <a href="{{ route('dosen.create') }}" class="btn btn-primary">Tambah Dosen</a>
    </div>

    <!-- Tabel Data Dosen -->
    <div class="card">
        <div class="card-header">
            Daftar Dosen
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Kode Dosen</th>
                        <th>Nama Dosen</th>
                        <th>NIP</th>
                        <th>Email</th>
                        <th>No. Telepon</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($dosenn as $index => $dosen)
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $dosen->kode_dosen }}</td>
                            <td>{{ $dosen->nama_dosen }}</td>
                            <td>{{ $dosen->nip }}</td>
                            <td>{{ $dosen->email }}</td>
                            <td>{{ $dosen->no_telepon }}</td>
                            <td>
                                <!-- Tautan Aksi -->
                                <a href="{{ route('dosen.show', $dosen->id) }}" class="btn btn-info btn-sm">Detail</a>
                                <a href="{{ route('dosen.edit', $dosen->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                <form action="{{ route('dosen.destroy', $dosen->id) }}" method="POST" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="text-center">Data dosen tidak ditemukan</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection