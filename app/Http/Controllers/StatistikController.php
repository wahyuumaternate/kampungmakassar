<?php

namespace App\Http\Controllers;

use App\Models\Datapenduduk;
use App\Models\Pekerjaan;
use Illuminate\Http\Request;

class StatistikController extends Controller
{
    public function jenis_kelamin () {
        return view('pages.statistik_kelurahan.jenis_kelamin');
    }

    public  function agama () {
        return view('pages.statistik_kelurahan.agama',[
            'pekerjaan' => Pekerjaan::with("datapenduduk")->get(),
            'penduduk' => Datapenduduk::with(['pekerjaan'])->get(),
        ]);
    }
}
