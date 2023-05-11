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
        return view('home');
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
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('dashboard')
                        ->with('message', 'Signed in!');
        }

        return redirect('/login')->with('message', 'email atau password salah');
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
            "password_confirmation" => "same:password",
        ],[
            'password_confirmation.same'=>'Pasword tidak sama',
        ]);

        $data = $request->all();
        $check = $this->create($data);

        return redirect("login");
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

        return redirect('/login');
    }

}

