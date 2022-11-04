<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    // make index method
    public function index()
    {
        return view('login.index',[
            'title' => 'Login',
            'active' => 'login'
        ]);
    }

    // make authenticate method
    public function authenticate(Request $request)
    {
        // validate data
        $validatedData = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|min:5|max:20'
        ]);

        // check email, password, and role
        if (auth()->attempt($validatedData)) {
            $request->session()->regenerate();
            if (auth()->user()->role == 'admin') {
                return redirect('/')->content('operator');
            } else if (auth()->user()->role == 'mahasiswa') {
                return redirect('/mahasiswa')->content('mahasiswa.mahasiswa');
            } else if (auth()->user()->role == 'dosen'){
                return redirect('/dosen')->content('dosen.dosen');
            } else if (auth()->user()->role == 'departemen'){
                return redirect('/departemen-dashboard')->content('departemen.dashboard');
            }
        }

        // redirect to login page
        return back()->with('error','Login failed, please try again');
    }
    // make logout method
    public function logout(Request $request)
    {
        auth()->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        // redirect to login page
        return redirect('/login');
    }
}
