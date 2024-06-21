<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdvokasiKebijakan extends Model
{
    use HasFactory;

    protected $table = 'TB_AdvokasiKebijakan';

    protected $fillable = [
        'kebijakan_didukung',
        'strategi_advokasi',
        'pihak_terkait'
    ];
}
