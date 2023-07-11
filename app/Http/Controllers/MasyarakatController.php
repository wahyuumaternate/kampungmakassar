<?php

namespace App\Http\Controllers;

use App\Models\Masyarakat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

class MasyarakatController extends Controller
{

    public function login() {
        return view('login_mas.login');
    }

    public function prosesLogin(Request $request) : RedirectResponse {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::guard('masyarakat')->attempt($credentials)) {

            $request->session()->regenerate();
            return redirect('/');
        }
        

        return back()->withErrors([
            'email' => 'Email atau Password Salah',
        ])->onlyInput('email');
    
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('masyarakat')->logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/');
    }

    public function register()
    {
        return view('login_mas.register');
    }
    public function store(Request $request)
    {
        $rules = $request->validate([
            'nama' => ['required'],
            'email' => ['required', 'email:rfc,dns','unique:masyarakats'],
            'nik' => ['required','unique:masyarakats','digits:16','numeric'],
            'password' => ['required','min:8','confirmed'],
        ]);
    
        $rules['password'] = Hash::make( $rules['password']);

        Masyarakat::create($rules);
        return redirect('/masyarakat/login')->with('success','berhasil membuat akun, silahkan masuk');
    }
    
}
