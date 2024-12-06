<!-- resources/views/mahasiswa/show.blade.php -->

@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Detail Mahasiswa</h1>
    <div class="card mt-4">
        <div class="card-header">
            Informasi Mahasiswa
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <th>NIM</th>
                        <td>{{ $mahasiswa->nim }}</td>
                    </tr>
                    <tr>
                        <th>Nama Mahasiswa</th>
                        <td>{{ $mahasiswa->nama_mahasiswa }}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{ $mahasiswa->email }}</td>
                    </tr>
                    <tr>
                        <th>Jurusan</th>
                        <td>{{ $mahasiswa->jurusan }}</td>
                    </tr>
                    <tr>
                        <th>Dosen ID</th>
                        <td>{{ $mahasiswa->dosen_id }}</td>
                    </tr>
                </