<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Sentinel;

class AuthController extends Controller
{
    public function login()
    {
        return view('panel.login');
    }

    public function register()
    {
        # code...
        return view('panel.register');
    }

    public function postuser(Request $request)
    {
        $validator = Validator::make($request->all(),
            ['first_name' => 'required',
             'email' => 'required|unique:users',
             'password' => 'required',
            ]);

        if ($validator->fails()){
            return redirect()->back()->withErrors($validator)->withInput($request->all());
        }else{
            Sentinel::registerAndActivate($request->all());
            return redirect('register')->with('success', 'Berhasil didaftarkan!');
        }
    }

    public function postlogin(Request $request)
    {
        Sentinel::disableCheckpoints();
        $credentials = (Sentinel::authenticate($request->all()));
        if (Sentinel::check($credentials)) {
            return redirect('dasbor');
        } elseif (Sentinel::check($credentials)) {
            Sentinel::login($credentials);
            return redirect('dasbor');
        } else {
            return redirect()->back()->with('error', 'Maaf email atau password salah!');
        }
    }

    public function logout()
    {
        Sentinel::logout();
        return redirect('login');
    }
}
