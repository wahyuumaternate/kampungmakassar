<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use App\Models\SambutanLurah;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index() {
            return view('admin.index',[
                'berita'=> Berita::all()->count(),
            ]);
    }

    
}
