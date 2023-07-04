<?php

namespace App\Http\Controllers;

use App\Models\Pengaduan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;


class PengaduanController extends Controller
{

  
    function index() {
        
    }

    function frontEnd() {
            return view('pages.pengaduan.index');
    }

    public function store(Request $request) {

        // $rules = $request->validate([
        //     // 'nama'=> 'required',
        //     // 'nik'=> 'required',
        //     // 'email'=> 'required',
        //     // 'jenis_pengaduan'=> 'required',
        //     // 'deskripsi'=> 'required',
        //     // 'lampiran'=> 'required|mimes:doc,docx,pdf,jpeg,png,jpg|max:2048',
        //     'captcha'=> 'required|captcha_check',
        // ]);
        $rules = ['captcha' => 'required|captcha'];
        $validator = validator()->make(request()->all(), $rules);
        if ($validator->fails()) {
            return response()->json([
                'message' => 'invalid captcha',
            ]);
    
        } else {
            //do the job
            return redirect()->route('pengaduan')->with('success','Berhasil Di Kirim');
        }
        // if ($request->file('lampiran')) {
        //     $rules['lampiran'] = $request->file('lampiran')->store('lampiranPengaduan');
        // }
  
        // Pengaduan::create($rules);
    }
}
