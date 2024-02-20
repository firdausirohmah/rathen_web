<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    use AuthenticatesUsers;
    public function login ()
    {
        
    // if (Auth::check()) {
    //     return redirect('dashboard');
    // }
    // else{
        return view('auth/sign-in', [
                    // "title" => "PKBM-Langgeng Ikhlas",
                    // "icon" => "Assets/img/icon.png"
            ]);
        }
    // }
    public function actionlogin(Request $request)
    {
        $credentials = $request->only('username', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            $request->session()->regenerate();
            return redirect()->intended('dashboard'); 
        } else {
            return redirect()->route('login')->with('error', 'Email atau password salah.');
        }
        if (Auth::check()) {
                dd(Auth::user()); // Check the authenticated user
                return redirect('dashboard'); // Redirect to dashboard or any other authenticated page
            } else {
                dd('User not found in session after successful login');
            }
    }
    public function daftar()
    {
        return view('auth.sign-up')
        // ->with('title', 'PKBM-Langgeng Ikhlas')
        // ->with('icon', 'Assets/img/icon.png')
        ;
    }
    public function actionlogout()
    {
        Auth::logout();
        return redirect('/');
    }
}
