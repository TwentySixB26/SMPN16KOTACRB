<?php

namespace App\Http\Controllers;

use App\Models\Murid;
use App\Models\User;
use App\Models\Jadwal;
use App\Models\Presensi;
use App\Models\GuruMapel;
use App\Models\Pertemuan;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userLogin = auth()->user()->id;
        $guruMapelID = GuruMapel::where('user_id', $userLogin)->pluck('id');
        $totalJadwal = Jadwal::whereIn('guru_mapel_id', $guruMapelID)->count();
        $daftarKelas = Jadwal::whereIn('guru_mapel_id', $guruMapelID)->with('kelas','guru_mapel')->orderBy('kelas_id', 'asc')->get();

        return view('dashboard/dashboard',[
            'head' => 'Dashboard Guru',
            'link' => 'dashboard',
            'totalJadwal' => $totalJadwal,
            'daftarKelas' => $daftarKelas,
        ]) ;

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'content' => 'required|max:120',
            'jadwal_id' => 'required|exists:jadwals,id'
        ]);

        $todayDate = now()->toDateString();

        $existingPertemuan = Pertemuan::where('jadwal_id', $validated['jadwal_id'])
                                        ->whereDate('created_at', $todayDate)
                                        ->first();

        if ($existingPertemuan) {
            return redirect()->back()->with('error', 'Anda sudah melakukan pertemuan pada hari ini maksimal pertemuan 1x sehari,Cobalah lakukan pertemuan kembali besok!');
        }

        //memasukan data ke db
        $pertemuan = Pertemuan::create($validated);



        $jadwal = $validated['jadwal_id'] ; //id jadwal
        $jadwalGet = Jadwal::where('id', $jadwal)->first();  //ambil satu coloum jadwal
        $kelasGet = $jadwalGet->kelas->id ;   //ambil id kelas yang berelasi dengan jadwal sebelumnya


        $murids = Murid::where('kelas_id', $kelasGet)->get(); //ambil murid


        foreach ($murids as $murid) {
            Presensi::create([
                'murid_id' => $murid->id,
                'pertemuan_id' => $pertemuan->id,
                'kehadiran' => 'hadir' // Default bisa diubah sesuai kebutuhan
            ]);
        }


        //melakukan redirect ketika code sebelumnya dieksekusi entah sukses atau gagal
        return redirect('/dashboard' . '/' . $validated['jadwal_id']) ;
    }

    /**
     * Display the specified resource.
     */
    public function show(Jadwal $jadwal)
    {
        if (auth()->user()->id !== $jadwal->guru_mapel->user_id) {
            abort(404) ;
        }

        $jadwal;

        $pertemuan = Pertemuan::where('jadwal_id', $jadwal->id)->get();

        $siswa = Murid::whereHas('pertemuan', function($query) use ($pertemuan) {
            $query->whereIn('pertemuan_id', $pertemuan->pluck('id'));
        })
            ->with([ 'pertemuan' => function ($query) {
                $query->withPivot('kehadiran');
            }])
            ->get();


        return view('/dashboard/presensiMenu',[
            'link' => 'dashboard',
            'head' => 'Presensi kelas',
            'jadwal' => $jadwal,
            'pertemuans' => $pertemuan,
            'siswaAll' => $siswa
        ]) ;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pertemuan $pertemuan)
    {
        if (auth()->user()->id !== $pertemuan->jadwal->guru_mapel->user_id) {
            abort(404) ;
        }

        $jadwal = $pertemuan->jadwal ;
        return view('/dashboard/editPertemuan',[
            'head' => 'Edit Pertemuan',
            'link' => 'dashboard',
            'jadwal' => $jadwal,
            'pertemuan' => $pertemuan
        ]) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Pertemuan $pertemuan)
    {
        if (auth()->user()->id !== $pertemuan->jadwal->guru_mapel->user_id) {
            abort(404) ;
        }

        //melakukan validasi data
        request()->validate([
            'content' => 'required|max:120'
        ]) ;

        // data yang telah lolos validasi maka disimpan divariabel
        $pertemuan->content = request()->get('content') ;

        //melakukan save atau mengirim data ke database
        $pertemuan->save() ;

        return redirect('/dashboard' . '/' . $pertemuan->jadwal_id);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pertemuan $pertemuan)
    {

        if (auth()->user()->id !== $pertemuan->jadwal->guru_mapel->user_id) {
            abort(404) ;
        }

        $pertemuan->delete() ;
        return redirect('/dashboard' . '/' . $pertemuan->jadwal_id);
    }




}
