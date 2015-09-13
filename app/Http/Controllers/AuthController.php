<?php

namespace Mitschool\Http\Controllers;

use Auth;
use Mitschool\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function getSignup()
    {
        return view('auth.signup');
    }

    public function postSignup(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|unique:users|email|max:255',
            'username'  => 'required|unique:users|alpha_dash|max:20',
            'password'  => 'required|min:6',
        ]);

        User::create([
            'email' => $request->input('email'),
            'username' => $request->input('username'),
            'password' => bcrypt($request->input('password')),
        ]);

        return redirect()
            ->route('home')
            ->with('info', 'Pendaftaran berhasil, anda bisa login sekarang');
    }

    public function getSignin()
    {
        return view('auth.signin');
    }

    public function postSignin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required',
            'password'  => 'required',
        ]);

        if(!Auth::attempt($request->only(['email', 'password']), $request->has('remember'))){
            return redirect()->back()->with('info', 'detail login salah');
        }

        return redirect()->route('home')->with('info', 'berhasil login');
    }

    public function getSignout()
    {
        Auth::logout();

        return redirect()->route('home')->with('info', 'anda sudah logout');
    }


}