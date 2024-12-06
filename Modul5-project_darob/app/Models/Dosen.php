<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Dosen extends Model
{   
    public $timestamps = false ;
    protected $fillable = [
        'kode_dosen', 'nama_dosen', 'nip', 'email', 'no_telepon',
    ];
    public function mahasiswas(): HasMany
    {
        return $this->hasMany(Mahasiswas::class);
    }
}