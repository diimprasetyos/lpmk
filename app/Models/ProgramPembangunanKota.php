<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramPembangunanKota extends Model
{
    use HasFactory;
    protected $table = 'program_pembangunan_kota';
    protected $fillable = ['deskripsi', 'jumlah_keuangan'];
}
