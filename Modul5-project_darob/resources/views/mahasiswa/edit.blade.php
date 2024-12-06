<!-- resources/views/mahasiswa/edit.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edit Mahasiswa</h1>
    <div class="card mt-4">
        <div class="card-header">
            Form Edit Mahasiswa
        </div>
        <div class="card-body">
            <form action="{{ route('mahasiswa.update', $mahasiswa->id) }}" method="POST">
                @csrf
                @method('PUT')
                
                <!-- NIM -->
                <div class="form-group mb-3">
                    <label for="nim">NIM</label>
                    <input type="text" id="nim" name="nim" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim', $mahasiswa->nim) }}" required>
                    @error('nim')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Nama Mahasiswa -->
                <div class="form-group mb-3">
                    <label for="nama_mahasiswa">Nama Mahasiswa</label>
                    <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" class="form-control @error('nama_mahasiswa') is-invalid @enderror" value="{{ old('nama_mahasiswa', $mahasiswa->nama_mahasiswa) }}" required>
                    @error('nama_mahasiswa')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email -->
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email', $mahasiswa->email) }}" required>
                    @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Jurusan -->
                <div class="form-group mb-3">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" id="jurusan" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" value="{{ old('jurusan', $mahasiswa->jurusan) }}" required>
                    @error('jurusan')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Dosen ID -->
                <div class="form-group mb-3">
                    <label for="dosen_id">Dosen ID</label>
                    <input type="number" id="dosen_id" name="dosen_id" class="form-control @error('dosen_id') is-invalid @enderror" value="{{ old('dosen_id', $mahasiswa->dosen_id) }}" required>
                    @error('dosen_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Submit Button -->
                <button type="submit" class="btn btn-success">Update</button>
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection