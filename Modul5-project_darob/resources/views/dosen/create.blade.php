@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="mb-4">{{ $title }}</h1> <!-- Menggunakan $title untuk judul -->

    <!-- Form Tambah Dosen -->
    <div class="card">
        <div class="card-header">
            Form Tambah Dosen
        </div>
        <div class="card-body">
            <form action="{{ route('dosen.store') }}" method="POST">
                @csrf
                
                <!-- Kode Dosen -->
                <div class="mb-3">
                    <label for="kode_dosen" class="form-label">Kode Dosen</label>
                    <input type="text" name="kode_dosen" id="kode_dosen" class="form-control @error('kode_dosen') is-invalid @enderror" value="{{ old('kode_dosen') }}" required>
                    @error('kode_dosen')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Nama Dosen -->
                <div class="mb-3">
                    <label for="nama_dosen" class="form-label">Nama Dosen</label>
                    <input type="text" name="nama_dosen" id="nama_dosen" class="form-control @error('nama_dosen') is-invalid @enderror" value="{{ old('nama_dosen') }}" required>
                    @error('nama_dosen')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- NIP -->
                <div class="mb-3">
                    <label for="nip" class="form-label">NIP</label>
                    <input type="text" name="nip" id="nip" class="form-control @error('nip') is-invalid @enderror" value="{{ old('nip') }}" required>
                    @error('nip')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Email -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                    @error('email')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Nomor Telepon -->
                <div class="mb-3">
                    <label for="no_telepon" class="form-label">No. Telepon</label>
                    <input type="text" name="no_telepon" id="no_telepon" class="form-control @error('no_telepon') is-invalid @enderror" value="{{ old('no_telepon') }}" required>
                    @error('no_telepon')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>

                <!-- Tombol Simpan -->
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Simpan</button>
                    <a href="{{ route('dosen.index') }}" class="btn btn-secondary">Kembali</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection