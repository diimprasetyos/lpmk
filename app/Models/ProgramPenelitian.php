<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProgramPenelitian extends Model
{
    use HasFactory;
    protected $table = 'program_penelitian';
    protected $fillable = ['judul', 'deskripsi', 'dokumentasi'];
}
