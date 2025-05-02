<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function index(){
        return view('/profile',[
            'link' => 'Profile',
            'head' => 'Profile SMP Negeri 16 Kota Cirebon'
        ]) ;
    }
}
