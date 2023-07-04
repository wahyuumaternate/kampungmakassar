<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;



class PengaduanController extends Controller
{

  
    function index() {
        return view('admin.pengaduan.index',[
            'pengaduan'=> Pengaduan::all(),
        ]);
    }

    function frontEnd() {
            return view('pages.pengaduan.index');
    }

    public function store(Request $request) {

        $rules = $request->validate([
            'nama'=> 'required',
            'nik'=> 'required',
            'email'=> 'required',
            'jenis_pengaduan'=> 'required',
            'deskripsi'=> 'required',
            'lampiran'=> 'required|mimes:doc,docx,pdf,jpeg,png,jpg|max:2048',
        ]);
    
        if ($request->file('lampiran')) {
            $rules['lampiran'] = $request->file('lampiran')->store('lampiranPengaduan');
        }
  
        Pengaduan::create($rules);
        return redirect()->route('pengaduan')->with('success','Berhasil Di Kirim');
    }
}
