<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('dosens', function (Blueprint $table) {
            $table->id()->primay();
            $table->string('kode_dosen', length: 3)->unique();
            $table->string('nama_dosen');
            $table->string('nip')->unique();
            $table->string('email')->unique();
            $table->string('no_telepon');
        });

        schema::create('mahasiswas',function (Blueprint $table) {
            $table->id()->primary();
            $table->string('nim')->unique();
            $table->string('nama_mahasiswa');
            $table->string('email')->unique();
            $table->string('jurusan');
            $table->string('dosen_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dosen');
        schema::dropIfExists('mahasiswa');
    }
};
