<?php

namespace App\Http\Controllers;

use App\Models\StrukturOrganisasi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class StrukturOrganisasiController extends Controller
{
    public function index() {
        return view('admin.profilKelurahan.strukturorganisasi',[
            'struktur_organisasi' => StrukturOrganisasi::latest()->get()
        ]);
    }

    public function create() {
        return view('admin.profilKelurahan.strukturorganisasi');
    }

    public function store(Request $request) {

        // dd($request);
        $rules = $request->validate([
            'nama'=>['required','unique:struktur_organisasi'],
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'jabatan' => 'required',
        ]);
        
        if ($request->file('gambar')) {
            $rules['gambar'] = $request->file('gambar')->store('struktur_organisasiGambar');
        }
        $rules['slug'] = Str::slug($request->nama, '-');


        StrukturOrganisasi::create($rules);
        return redirect()->route('organisasi.index')->with('success',$request->nama.' Berhasil Di Tambahkan');
    }

    public function edit(StrukturOrganisasi $struktur_organisasi) {
        return view('admin.struktur_organisasi.edit',[
            'struktur_organisasi' => $struktur_organisasi
        ]);
    }

    public function update(Request $request, StrukturOrganisasi $struktur_organisasi)
    {
        // dd($request->gambar);
        $rules = $request->validate([
            'nama'=>['required','unique:struktur_organisasi'],
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'jabatan' => 'required',
        ]);

        if ($request->file('gambar')) {
            if ($request->gambar) {
                Storage::delete($request->gambarlama);
            }
            
            $rules['gambar'] = $request->file('gambar')->store('struktur_organisasiGambar');
        }

        $rules['slug'] = Str::slug($request->nama, '-');


        $struktur_organisasi->where('id', $struktur_organisasi->id)->update($rules);
        return redirect()->route('organisasi.index')->with('success',$struktur_organisasi->nama.' Berhasil Di Ubah');
    }

    public function destroy(StrukturOrganisasi $struktur_organisasi)
    {
        if ($struktur_organisasi->gambar) {
            Storage::delete($struktur_organisasi->gambar);
        }
        StrukturOrganisasi::destroy($struktur_organisasi->id);
        return redirect()->route('organisasi.index')->with('success',$struktur_organisasi->nama.' Berhasil Di Hapus');
    }
}
