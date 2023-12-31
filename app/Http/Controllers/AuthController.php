<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function register(Request $request){
        $validate = $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|unique:users',
            'phone' => 'required',
            'password' => 'required'
        ]);

       //replace 0 menjadi kode nomer 62
       if (substr($validate['phone'], 0, 1) === "0") {
            $validate['phone'] = "62". substr($validate['phone'], 1);
        }

        if($validate['password'] ==  $request->confirm_password){
            $password = bcrypt($validate['password']);
        }else{
            return redirect('/register')->with('failed','Akun anda gagal didaftarkan ');
        }

        $user = User::create([
            'id_role' => 3,
            'name' => $validate['first_name'],
            'first_name' => $validate['first_name'],
            'last_name' => $validate['last_name'],
            'phone_number' => $validate['phone'],
            'email' => $validate['email'],
            'image' => 'default.jpg',
            'password' => $password

        ]);


        return redirect('/login')->with('success','Akun anda berhasil didaftarkan silahkan login');


    }



    public function login(Request $request){
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            // Jika berhasil login, alihkan ke halaman yang sesuai
            return redirect('/profile');
           
        }else{
            return redirect()->back()->with('failed', 'Login gagal silahkan cek ulang');
        }
    }

    // public function cekUser(){
    //     $user = Auth::user();
    //     dd($user);
    // }

    
}
