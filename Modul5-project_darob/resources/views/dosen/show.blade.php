<!-- resources/views/dosen/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">Detail Data Dosen</h1>

    <!-- Menampilkan pesan sukses jika ada -->
    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <!-- Tampilkan detail data dosen -->
    <div class="card">
        <div class="card-header">
            Detail Dosen
        </div>
        <div class="card-body">
            <div class="mb-3">
                <strong>Kode Dosen:</strong>
                <p>{{ $dosen->kode_dosen }}</p>
            </div>

            <div class="mb-3">
                <strong>Nama Dosen:</strong>
                <p>{{ $dosen->nama_dosen }}</p>
            </div>

            <div class="mb-3">
                <strong>NIP:</strong>
                <p>{{ $dosen->nip }}</p>
            </div>

            <div class="mb-3">
                <strong>Email:</strong>
                <p>{{ $dosen->email }}</p>
            </div>

            <div class="mb-3">
                <strong>No. Telepon:</strong>
                <p>{{ $dosen->no_telepon }}</p>
            </div>

            <!-- Tombol Kembali -->
            <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali ke Daftar Dosen</a>
        </div>
    </div>
</div>
@endsection