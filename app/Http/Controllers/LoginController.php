<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{

    public function index(){
        return view('/portalGuru',[
            'link' => 'PortalGuru',
            'head' => 'LOG IN Guru'
        ]) ;
    }


    public function authenticate(Request $request){
        $credentials = $request->validate([
            'NIP' => 'required' ,
            "password" => 'required'
        ]) ;

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect('/dashboard');
        }
        return redirect()->back()->with('error', 'NIP/NUTPK dengan Password salah,cek kembali!');
    }

}
