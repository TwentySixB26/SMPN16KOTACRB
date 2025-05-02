<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KepegawaianController extends Controller
{
    public function index(){
        return view('/kepegawaian',[
            'link' => 'Kepegawaian',
            'head' => 'Tenaga Kerja SMPN 16 Kota Cirebon'
        ]) ;
    }
}
