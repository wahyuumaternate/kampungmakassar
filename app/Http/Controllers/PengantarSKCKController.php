<?php

namespace App\Http\Controllers;

use App\Models\PengantarSKCK;
use Illuminate\Http\Request;

class PengantarSKCKController extends Controller
{
    public function front() {
        return view('pages.pelayannan.skck');
    }

    public function store(Request $request) {

        // dd($request->all());
        $rules = $request->validate([
            'fc_kk'=> 'required|mimes:doc,docx,pdf|max:2048',
            'fc_ktp' => 'required|mimes:doc,docx,pdf|max:2048',
            'pengantar_rt_rw' => 'required|mimes:doc,docx,pdf|max:2048',
            'masyarakat_id' => 'required',
        ]);
        
        $rules['fc_kk'] = $request->file('fc_kk')->store('pelyananFile');
        $rules['fc_ktp'] = $request->file('fc_ktp')->store('pelyananFile');
        $rules['pengantar_rt_rw'] = $request->file('pengantar_rt_rw')->store('pelyananFile');

        PengantarSKCK::create($rules);
        return redirect()->route('skck.front')->with('success','Berhasil Di Kirim');
    }


}
