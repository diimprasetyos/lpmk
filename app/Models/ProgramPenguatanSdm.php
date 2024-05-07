<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramPenguatanSdm extends Model
{
    use HasFactory;
    protected $table = 'program_penguatan_sdm';
    protected $fillable = ['deskripsi'];
}
