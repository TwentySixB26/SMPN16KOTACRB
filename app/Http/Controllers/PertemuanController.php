<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Pertemuan;
use App\Models\Presensi;
use Illuminate\Http\Request;

class PertemuanController extends Controller
{

    public function index(Jadwal $jadwal){
        if (auth()->user()->id !== $jadwal->guru_mapel->user_id) {
            abort(404) ;
        }

        $jadwal;

        return view('dashboard/newPertemuan',[
            'head' => 'New Pertemuan',
            'link' => 'dashboard',
            'jadwal' => $jadwal
            ]) ;
    }



    public function presensiall(Pertemuan $pertemuan){
        if (auth()->user()->id !== $pertemuan->jadwal->guru_mapel->user_id) {
            abort(404) ;
        }

        $pertemuan; //pertemuan
        $pertemuanID = $pertemuan->id ;
        $jadwal =  $pertemuan->jadwal ; //jadwal
        $presensiAll = Presensi::where('pertemuan_id' , $pertemuanID)->get() ;
        $presensiSakit = Presensi::where('pertemuan_id', $pertemuanID)->where('kehadiran', 'sakit')->get();
        $presensiIzin = Presensi::where('pertemuan_id', $pertemuanID)->where('kehadiran', 'izin')->get();
        $presensiTanpaKet = Presensi::where('pertemuan_id', $pertemuanID)->where('kehadiran', 'tanpa_keterangan')->get();

        return view('dashboard/presensiMuridAll',[
            'head' => 'Presensi murid',
            'link' => 'dashboard',
            'pertemuan' => $pertemuan,
            'jadwal' => $jadwal,
            'presensiAll' => $presensiAll,
            'totalSiswaSakit' => $presensiSakit,
            'totalSiswaIzin' => $presensiIzin,
            'totalSiswaTanpaKet' => $presensiTanpaKet,
            ]) ;
    }


    public function update(Pertemuan $pertemuan)
    {
        if (auth()->user()->id !== $pertemuan->jadwal->guru_mapel->user_id) {
            abort(404) ;
        }



        $pertemuanID = $pertemuan->id;
        $muridAll = Presensi::where('pertemuan_id', $pertemuanID)->get() ;


        foreach ($muridAll as $murid) {
            //melakukan validasi data
            request()->validate([
                'kehadiran_' . $murid->murid->id => 'required|in:hadir,tanpa_keterangan,sakit,izin'
            ]) ;

            // Ambil kehadiran dari request berdasarkan ID murid
            $kehadiran = request()->get('kehadiran_' . $murid->murid->id);


            // Set kehadiran ke model
            $murid->kehadiran = $kehadiran;

            // Simpan perubahan ke database
            $murid->save();
        }


        return redirect('/dashboard' . '/' . $pertemuan->jadwal_id);
    }


}
