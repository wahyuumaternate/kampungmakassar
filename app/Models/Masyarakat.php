<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Model;

class Masyarakat extends Model
{
    use HasFactory;

    protected $table ='masyarakats';

    protected $fillable = [
        'nama',
        'nik',
        'email',
        'password',
    ];
}
