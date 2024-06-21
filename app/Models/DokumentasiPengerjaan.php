<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DokumentasiPengerjaan extends Model
{
    use HasFactory;
    protected $table = 'dokumentasi_pengerjaan';
    protected $fillable = ['tanggal', 'jenis_pengerjaan', 'deskripsi'];
}
