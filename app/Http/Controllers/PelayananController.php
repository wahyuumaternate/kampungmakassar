<?php

namespace App\Http\Controllers;

use App\Models\JenisPelayanan;
use App\Models\Pelayanan;
use Illuminate\Http\Request;

class PelayananController extends Controller
{
    public function front() {
        return view('pages.pelayannan.index',[
            'jenis_pelayanan' => JenisPelayanan::all()
        ]);
    }

    public function store(Request $request) {

        // dd($request->all());
        $rules = $request->validate([
            'fc_kk'=> 'required|mimes:doc,docx,pdf|max:2048',
            'fc_ktp' => 'required|mimes:doc,docx,pdf|max:2048',
            'pengantar_rt_rw' => 'required|mimes:doc,docx,pdf|max:2048',
            'surat_pernyataan' => 'mimes:doc,docx,pdf|max:2048',
            'masyarakat_id' => 'required',
            'jenis_pelayanan_id' => 'required',
        ]);
        
        $rules['fc_kk'] = $request->file('fc_kk')->store('pelyananFile');
        $rules['fc_ktp'] = $request->file('fc_ktp')->store('pelyananFile');
        $rules['pengantar_rt_rw'] = $request->file('pengantar_rt_rw')->store('pelyananFile');

        if ($request->file('surat_pernyataan')) {
            $rules['surat_pernyataan'] = $request->file('surat_pernyataan')->store('pelyananFile');
        }

        Pelayanan::create($rules);
        return redirect()->route('pelayanan')->with('success','Berhasil Di Kirim');
    }

}
