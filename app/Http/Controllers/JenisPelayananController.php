<?php

namespace App\Http\Controllers;

use App\Models\JenisPelayanan;
use App\Models\Pelayanan;
use Illuminate\Http\Request;

class JenisPelayananController extends Controller
{
    public function index() {
        return view('admin.pelayanan.jenis_pelayanan',[
            'jenis_pelayanan' => JenisPelayanan::all()
        ]);
    }

    public function store(Request $request) {

        $rules = $request->validate([
            'nama_pelayanan' => 'required',
        ]);
        JenisPelayanan::create($rules);
        return redirect()->route('jenis_pelayanan.index')->with('success','Pelayanan Berhasil Di Tambahkan');
    }

    public function destroy(JenisPelayanan $jenis_pelayanan)
    {
        try {
            JenisPelayanan::destroy($jenis_pelayanan->id);
            return redirect()->route('jenis_pelayanan.index')->with('success','Pelayanan Berhasil Di Hapus');
        }
        catch (\Exception $e) {
            return redirect()->route('jenis_pelayanan.index')->with('error','Pelayanan Tidak Dapat Di Hapus Mungkin Data Dingunakan Di Tabel Lain');
        }
    }
}
