<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mou extends Model
{
    use HasFactory;
    protected $table = 'mou';
    protected $fillable = ['judul', 'nama_mitra', 'deskripsi', 'dokumen'];
}
