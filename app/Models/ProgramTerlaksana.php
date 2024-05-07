<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramTerlaksana extends Model
{
    use HasFactory;
    protected $table = 'program_sudah_dilaksanakan';
    protected $fillable = ['pihak_pelaksana', 'deskripsi'];
}
