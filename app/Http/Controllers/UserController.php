<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Portofolio;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    function signin(){
        return view('form_login');
    }

    function auth(Request $req){
        $credential = $req->only('email', 'password');
        if (Auth::attempt($credential)){
            return redirect()->intended('admin');
        }
        return redirect()->back();
    }

    function register(){
        return view('register');
    }

    function signup(Request $req){
        User::create([
            'name'=>$req->name,
            'email'=>$req->email,
            'password'=>bcrypt($req->password),
            'desc'=>$req->desc
        ]);
        return redirect('admin');
    }

    function user(){
        $data['project']=Portofolio::all();
        return view('dashboard', $data);
    }


}
