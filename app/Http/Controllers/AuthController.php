<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Biodata;
use RealRashid\SweetAlert\Facades\Alert;

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
            Alert::alert()->error('username atau password salah!');
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
            'nama' => ['required','string',"alpha"],
            'nohp' => ['required',"digits:12"],
            'username' => ['required', 'unique:users'],
            'password' => ['required', 'min:8'],
            'alamat' => ['required',"max:100"]
        ],
    [
        "nama.required"=>"nama tidak boleh kosong",
        "nohp.required"=>"no telepon tidak boleh kosong",
        "nohp.digits"=>"no telepon harus 12 digit",
        "password.required"=>"password tidak boleh kosong",
        "password.min"=>"password minimal 8 caracter",
        "alamat.required"=>"alamat tidak boleh kosong",
        "alamat.max"=>"alamat tidak boleh lebih dari 100 caracter",
        ]
    );

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
