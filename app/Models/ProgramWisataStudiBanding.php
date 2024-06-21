<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramWisataStudiBanding extends Model
{
    use HasFactory;
    protected $table = 'program_wisata_studi_banding';
    protected $fillable = ['judul', 'deskripsi', 'jenis', 'tanggal', 'dokumentasi'];
}
