<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    public function logout(){
        auth()->logout() ;                      //melakukan logut
        request()->session()->invalidate();     //menghapus semua sesion yang ada
        request()->session()->regenerateToken();    //mengenarate ulang token

        return redirect('/login')->with('success', 'logout telah berhasil!') ;
    }
}
