<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramPerawatan extends Model
{
    use HasFactory;
    protected $table = 'program_perawatan';
    protected $fillable = ['judul', 'deskripsi', 'tanggal', 'dokumentasi'];
}
