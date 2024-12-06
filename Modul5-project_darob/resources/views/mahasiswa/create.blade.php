<!-- resources/views/mahasiswa/create.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Tambah Mahasiswa</h1>
    <div class="card mt-4">
        <div class="card-header">
            Form membuat data Mahasiswa
        </div>
        <div class="card-body">
            <form action="{{ route('mahasiswa.store') }}" method="POST">
                @csrf

                <!-- NIM -->
                <div class="form-group mb-3">
                    <label for="nim">NIM</label>
                    <input type="text" id="nim" name="nim" class="form-control @error('nim') is-invalid @enderror" value="{{ old('nim') }}" required>
                    @error('nim')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Nama Mahasiswa -->
                <div class="form-group mb-3">
                    <label for="nama_mahasiswa">Nama Mahasiswa</label>
                    <input type="text" id="nama_mahasiswa" name="nama_mahasiswa" class="form-control @error('nama_mahasiswa') is-invalid @enderror" value="{{ old('nama_mahasiswa') }}" required>
                    @error('nama_mahasiswa')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Email -->
                <div class="form-group mb-3">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" required>
                    @error('email')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Jurusan -->
                <div class="form-group mb-3">
                    <label for="jurusan">Jurusan</label>
                    <input type="text" id="jurusan" name="jurusan" class="form-control @error('jurusan') is-invalid @enderror" value="{{ old('jurusan') }}" required>
                    @error('jurusan')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>

                <!-- Dosen ID -->
                <div class="form-group mb-3">
                    <label for="dosen_id">Dosen ID</label>
                    <select id="dosen_id" name="dosen_id" class="form-control @error('dosen_id') is-invalid @enderror" required>
                        <option value="" disabled selected>Pilih Dosen</option>
                        @foreach($dosens as $dosen)
                            <option value="{{ $dosen->id }}" {{ old('dosen_id') == $dosen->id ? 'selected' : '' }}>
                                {{ $dosen->nama_dosen }}
                            </option>
                        @endforeach
                    </select>
                    @error('dosen_id')
                        <span class="invalid-feedback">{{ $message }}</span>
                    @enderror
                </div>


                <!-- Submit Button -->
                <button type="submit" class="btn btn-primary">Simpan</button>
                <a href="{{ route('mahasiswa.index') }}" class="btn btn-secondary">Batal</a>
            </form>
        </div>
    </div>
</div>
@endsection