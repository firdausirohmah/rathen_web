<?php

namespace App\Http\Controllers;

use App\Models\registerModel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class registerController extends Controller
{
    public function daftar()
    {
        return view('auth.sign-up', [
            "title" => "PKBM-Langgeng Ikhlas",
            "icon" => "Assets/img/icon.png"
        ]);
    }
    
    public function actionregister(Request $request)
    {
        // $str = Str::random(100);
        
        $user = registerModel::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'super user',
            // 'verify_key' => $str
        ]);
    //    dd($user);


        Session::flash('message', 'Akun Berhasil Dibuat');
        return redirect('/login');
    }
}
