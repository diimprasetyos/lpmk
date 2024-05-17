<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProgramAspirasi extends Model
{
    use HasFactory;
    protected $table = 'program_aspirasi';
    protected $fillable = ['perantara', 'status', 'detail_program_aspirasi_id'];

    public function detailProgramAspirasi()
    {
        return $this->belongsTo(DetailProgramAspirasi::class);
    }
}
