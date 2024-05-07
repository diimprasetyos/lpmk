<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailProgramAspirasi extends Model
{
    use HasFactory;
    protected $table = 'detail_program_aspirasi';
    protected $fillable = ['title', 'prioritas', 'rt', 'rw', 'deskripsi'];
}
