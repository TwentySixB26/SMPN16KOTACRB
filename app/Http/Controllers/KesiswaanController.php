<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\Jadwal;
use Illuminate\Http\Request;

class KesiswaanController extends Controller
{


    public function index(){

        return view('/kesiswaan',[
            'link' => 'Kesiswaan',
            'head' => 'Semua tentang Siswa SMPN 16',
        ]) ;
    }
}
