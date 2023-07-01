<?php

namespace App\Http\Controllers;

use App\Models\Rt;
use App\Models\Rw;
use Illuminate\Http\Request;

class RtRwController extends Controller
{
    public function index() {
        return view('admin.kependudukan.rt_rw',[
            'rt' => Rt::all(),
            'rw' => Rw::all()
        ]);
    }
}
