<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramPembangunanKelurahan extends Model
{
    use HasFactory;
    protected $table = 'program_pembangunan_kelurahan';
    protected $fillable = ['deskripsi'];
}
