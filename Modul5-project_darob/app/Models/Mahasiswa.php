<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Mahasiswa extends Model
{
    public $timestamps = false ;
    protected $guarded = [
        'id'
    ];
    public function dosen(): BelongsTo
    {
        return $this->belongsTo(Dosen::class);
    }
}