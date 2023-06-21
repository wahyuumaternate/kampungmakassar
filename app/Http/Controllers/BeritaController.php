<?php

namespace App\Http\Controllers;

use App\Models\Berita;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class BeritaController extends Controller
{
    public function index() {
        return view('admin.berita.index',[
            'beritas' => Berita::latest()->get()
        ]);
    }

    public function create() {
        return view('admin.berita.tambah');
    }

    public function store(Request $request) {

        // dd($request);
        $rules = $request->validate([
            'judul'=>['required','unique:beritas'],
            'gambar' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'isi' => 'required',
        ]);
        
        if ($request->file('gambar')) {
            $rules['gambar'] = $request->file('gambar')->store('beritaGambar');
        }
        $rules['slug'] = Str::slug($request->judul, '-');
        $rules['excerp']= Str::limit(strip_tags($request->isi),150);


        Berita::create($rules);
        return redirect()->route('berita.index')->with('success','Data Berhasil Di Tambahkan');
    }

    
}
