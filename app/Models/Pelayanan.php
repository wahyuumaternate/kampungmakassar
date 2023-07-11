<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelayanan extends Model
{
    use HasFactory;

    protected $fillable = [
        'fc_kk',
        'fc_ktp',
        'surat_pernyataan',
        'pengantar_rt_rw',
        'masyarakat_id',
        'jenis_pelayanan_id',
    ];
}
