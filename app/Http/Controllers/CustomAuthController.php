<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class CustomAuthController extends Controller
{
    public function home()
    {
        return view('homepage');
    }

    public function index()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ],[
            'email.required'=>'email harus di isi',
            'password.required'=>'password harus di isi',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->with('successlgn', 'Signed in!');
        }

        return redirect('/login')->with('message', 'email / password Salah!!!')->withInput();
    }

    public function signup()
    {
        return view('registration');
    }

    public function signupsave(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            "password_confirmation" => "required|same:password",
        ],[
            'name.required'=>'nama harus di isi',
            'email.required'=>'email harus di isi',
            'email.unique'=>'email sudah terdaftar',
            'password.required'=>'password harus di isi',
            'password_confirmation.same'=>'Password tidak sama',
            'password_confirmation.required'=>'Password konfirmasi harus di isi',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("login")->with('success', 'berhasil registrasi');
        }
    public function create(array $data)
    {
      return User::create([
        'name' => $data['name'],
        'email' => $data['email'],
        'password' => Hash::make($data['password'])
      ]);
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('index');
        }
        return redirect('/login');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return redirect('/login')->with('logout','Anda telah logout');
    }

}

