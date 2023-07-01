<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Datapenduduk extends Model
{
    use HasFactory;

    protected $table = 'datapenduduks';

    protected $guarded = ['id'];

    public function rt(): BelongsTo
    {
        return $this->belongsTo(Rt::class);
    }
    
    public function rw(): BelongsTo
    {
        return $this->belongsTo(Rw::class);
    }
    
    public function pekerjaan(): BelongsTo
    {
        return $this->belongsTo(Pekerjaan::class);
    }

    public function pendidikan(): BelongsTo
    {
        return $this->belongsTo(Pendidikan::class);
    }
}
