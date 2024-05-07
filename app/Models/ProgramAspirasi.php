<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramAspirasi extends Model
{
    use HasFactory;
    protected $table = 'program_aspirasi';
    protected $fillable = ['prioritas', 'rt', 'rw', 'deskripsi', 'file', 'perantara'];
    protected $cast = [
        'prioritas' => 'string',
    ];
}
