<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Biodata;


class AuthController extends Controller
{
    public function LoginUI()
    {
        return view('authenticate.login');
    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attempt(["username" => $request->username, "password" => $request->password, "role" => "admin"])) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        } else if (Auth::attempt(["username" => $request->username, "password" => $request->password, "role" => "user"])) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        } else {
            return redirect()->back()->with("error", "gagal login");
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function RegisterUI()
    {
        return view('authenticate.register');
    }

    public function Registration(Request $request)
    {
        $request->validate([
            'nama' => ['required'],
            'nohp' => ['required'],
            'username' => ['required', 'unique:users'],
            'password' => ['required'],
            'alamat' => ['required']
        ]);

        $user = Biodata::create([
            "nama" => $request->nama,
            "nohp" => $request->nohp,
            "alamat" => $request->alamat
        ]);

        User::create([
            "username" => $request->username,
            "password" => bcrypt($request->password),
            "biodata_id" => $user->id
        ]);

        return redirect('/login');
    }
}
