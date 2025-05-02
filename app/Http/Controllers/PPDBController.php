<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PPDBController extends Controller
{
    public function index(){
        return view('/ppdb',[
            'link' => 'PPDB',
            'head' => 'Info PPDB SMPN 16 Kota Cirebon'
        ]) ;
    }
}
