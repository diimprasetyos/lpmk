<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramPenguatanSdm extends Model
{
    use HasFactory;
    protected $table = 'program_penguatan_sdm';
    protected $fillable = ['judul', 'deskripsi', 'tanggal', 'dokumentasi'];
}
