<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramTspTematik extends Model
{
    use HasFactory;
    protected $table = 'program_tsp_tematik';
    protected $fillable = ['tema', 'deskripsi'];
}
