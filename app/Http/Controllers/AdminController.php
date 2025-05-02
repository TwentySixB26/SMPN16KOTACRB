<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Kelas;
use App\Models\Mapel;
use App\Models\Murid;
use App\Models\Jadwal;
use App\Models\GuruMapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        if(!auth()->user()->admin){
            abort(403) ;
        }


        $guru = User::get() ;
        $murid = Murid::orderBy('kelas_id', 'asc')->get() ;
        $mapel = Mapel::get() ;
        $guruMapel = GuruMapel::get() ;
        $jadwal = Jadwal::get() ;

        return view('dashboard/admin/admin',[
            'head' => 'Admin Panel ',
            'link' => 'admin',
            'guru' => $guru,
            'murid' => $murid ,
            'guruMapel' => $guruMapel,
            'jadwal' => $jadwal,
            'mapel' => $mapel,
        ]) ;
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    // ========================== guru ====================
    public function adminGuru(){
        if(!auth()->user()->admin){
            abort(403) ;
        }

        $guru = User::query();

        if (request('search')) {
            $guru = $guru->where('name', 'like' , '%' . request('search') . '%')  ;
        }

        $guru = $guru->get() ;

        return view('dashboard/admin/tambahGuru/adminTambahGuru',[
            'head' => 'Admin Panel tambah Guru ',
            'link' => 'admin',
            'guru' => $guru,
        ]) ;
    }


    public function adminGuruTambah(){
        if(!auth()->user()->admin){
            abort(403) ;
        }

        $validated = request()->validate([
            'name' => 'required|max:160',
            'gol' => 'nullable|max:25',
            'NIP' => 'required|max:25|unique:users,NIP',
            'password' => 'required|min:4',
            'alamat' => 'nullable|max:260',
            'phone' => 'nullable|max:15|unique:users,phone',
            'email' => 'nullable|max:160|unique:users,email',
        ]) ;

        $validated["password"] = Hash::make($validated['password']);
        $validated["admin"] = false ;

        User::create($validated);

        return redirect('/admin/guru')->with('success', 'Data guru berhasil dibuat!') ;
    }

    public function adminGuruEdit(User $user){
        if(!auth()->user()->admin){
            abort(403) ;
        }

        $guru = $user ;
        return view('dashboard/admin/tambahGuru/adminTambahGuruEdit',[
            'head' => 'Edit Guru',
            'link' => 'admin',
            'guru' => $guru,
        ]) ;
    }

    public function adminGuruUpdate(User $user) {
        if(!auth()->user()->admin){
            abort(403) ;
        }

        $validated = request()->validate([
            'name' => 'required|max:160',
            'gol' => 'nullable|max:25',
            'NIP' => 'required|max:25|unique:users,NIP,'  . $user->id,
            'alamat' => 'nullable|max:260',
            'phone' => 'nullable|max:15|unique:users,phone,'  . $user->id,
            'email' => 'nullable|max:160|unique:users,email,'  . $user->id ,
        ]) ;

        $user->update($validated);
        return redirect('/admin/guru')->with('success', 'Data guru berhasil diperbarui!');

    }



    // ============================= murid ========================================
    public function adminMurid(){
        if(!auth()->user()->admin){
            abort(403) ;
        }

        $murid = Murid::query();
        $kelas = Kelas::get() ;

        if (request('search')) {
            $murid = $murid->where('name', 'like' , '%' . request('search') . '%')  ;
        }

        $murid = $murid->orderBy('kelas_id')->orderBy('name')->get() ;

        return view('dashboard/admin/tambahMurid/adminTambahMurid',[
            'head' => 'Admin Panel tambah Murid ',
            'link' => 'admin',
            'murid' => $murid,
            'kelas' => $kelas
        ]) ;
    }

    public function adminMuridTambah() {
        if(!auth()->user()->admin){
            abort(403) ;
        }

        $validated = request()->validate([
            'name' => 'required|max:160',
            'NIS' => 'required|max:12|unique:murids,NIS',
            'NISN' => 'required|max:12|unique:murids,NISN',
            'alamat' => 'required|max:260',
            'kelas_id' => 'required|exists:kelas,id',
        ]) ;

        Murid::create($validated);

        return redirect('/admin/murid')->with('success', 'Murid baru telah ditambahkan!') ;
    }


    public function adminMuridEdit(Murid $murid){
        if(!auth()->user()->admin){
            abort(403) ;
        }

        $murid ;
        $kelas = Kelas::get() ;

        return view('dashboard/admin/tambahMurid/adminTambahMuridEdit',[
            'head' => 'Edit Murid',
            'link' => 'admin',
            'murid' => $murid,
            'kelas' => $kelas,
        ]) ;
    }

    public function adminMuridUpdate(Murid $murid){
        if(!auth()->user()->admin){
            abort(403) ;
        }

        $validated = request()->validate([
            'name' => 'required|max:160',
            'NIS' => 'required|max:12|unique:murids,NIS,' . $murid->id,
            'NISN' => 'required|max:12|unique:murids,NISN,' .  $murid->id,
            'alamat' => 'required|max:260',
            'kelas_id' => 'required|exists:kelas,id',
        ]) ;

        $murid->update($validated);
        return redirect('/admin/murid')->with('success', 'Data murid berhasil diperbarui');
    }








    // ==================== guru Mapel ====================
    public function adminGuruMapel(){
        if(!auth()->user()->admin){
            abort(403) ;
        }

        $guru = User::all();
        $mapel = Mapel::all();
        $guruMapel = GuruMapel::with(['guru', 'mapel']);


        if (request('search')) {
            $search = request('search');

            $guruMapel = $guruMapel->whereHas('guru', function ($query) use ($search) {
                $query->where('name', 'like', '%' . $search . '%');
            })->orWhereHas('mapel', function ($query) use ($search) {
                $query->where('name_mapel', 'like', '%' . $search . '%');
            });
        }

        $guruMapel = $guruMapel->orderBy('user_id')->get() ;

        return view('dashboard/admin/tambahGuruMapel/adminTambahGuruMapel',[
            'head' => 'Admin Panel Guru Mapel',
            'link' => 'admin',
            'guru' => $guru,
            'mapel' => $mapel,
            'guruMapel' => $guruMapel,
        ]) ;
    }

    public function adminGuruMapelTambah() {
        if(!auth()->user()->admin){
            abort(403) ;
        }

        $validated = request()->validate([
            'user_id' => 'required|exists:users,id',
            'mapel_id' => 'required|exists:mapels,id',
        ]) ;

        // Cek apakah sudah ada kombinasi user_id dan mapel_id di tabel guru_mapels
        $existing = GuruMapel::where('user_id', $validated['user_id'])
            ->where('mapel_id', $validated['mapel_id'])
            ->first();

        // Kalau sudah ada, kembalikan error
        if ($existing) {
            return redirect('/admin/guruMapel')->with('error', 'Guru ini sudah mengampu mapel tersebut!');
        }

        GuruMapel::create($validated);
        return redirect('/admin/guruMapel')->with('success', 'Anda telah mengatur guru mengampu mapel!') ;
    }


    public function adminGuruMapelEdit(guruMapel $guruMapel){
        if(!auth()->user()->admin){
            abort(403) ;
        }

        $guruMapel ;
        $guru = User::get() ;
        $mapel = Mapel::get() ;

        return view('dashboard/admin/tambahGuruMapel/adminTambahGuruMapelEdit',[
            'head' => 'Edit Murid',
            'link' => 'admin',
            'guruMapel' => $guruMapel,
            'guru' => $guru,
            'mapel' => $mapel,

        ]) ;
    }

    public function adminGuruMapelUpdate(GuruMapel $guruMapel){
        if(!auth()->user()->admin){
            abort(403) ;
        }

        $validated = request()->validate([
            'user_id' => 'required|exists:users,id' ,
            'mapel_id' => 'required|exists:mapels,id' ,
        ]) ;

         // Cek apakah sudah ada kombinasi user_id dan mapel_id di tabel guru_mapels
        $existing = GuruMapel::where('user_id', $validated['user_id'])
            ->where('mapel_id', $validated['mapel_id'])
            ->first();

        // Kalau sudah ada, kembalikan error
        if ($existing) {
            return redirect()->back()->with('error', 'Guru ini sudah mengampu mapel tersebut! ');
        }

        $guruMapel->update($validated);
        return redirect('/admin/guruMapel')->with('success', 'Data Guru mengampu Mapel telah sukses diupdate!');
    }


    // ========================================== jadwal =========================
    public function adminJadwal(){
        if(!auth()->user()->admin){
            abort(403) ;
        }

        $jadwal = Jadwal::with(['kelas', 'guru_mapel']) ;
        $kelas = Kelas::all();
        $guruMapel = GuruMapel::with(['guru', 'mapel'])->orderBy('user_id')->get();



        if (request('search')) {
            $search = request('search');

            $jadwal = $jadwal->whereHas('kelas', function ($query) use ($search) {
                $query->where('name_kelas', 'like', '%' . $search . '%');
            }) ->orWhereHas('guru_mapel', function ($query) use ($search) {
                $query->whereHas('guru', function ($q) use ($search) {
                    $q->where('name', 'like', '%' . $search . '%');
                })
                ->orWhereHas('mapel', function ($q) use ($search) {
                    $q->where('name_mapel', 'like', '%' . $search . '%');
                });
            });
        }


        $jadwal = $jadwal->orderBy('kelas_id')->get() ;

        return view('dashboard/admin/tambahJadwal/adminTambahJadwal',[
            'head' => 'Admin Panel Jadwal',
            'link' => 'admin',
            'jadwal' => $jadwal,
            'kelas' => $kelas,
            'guruMapel' => $guruMapel,
        ]) ;
    }

    public function adminJadwalTambah() {
        if(!auth()->user()->admin){
            abort(403) ;
        }

        $validated = request()->validate([
            'kelas_id' => 'required|exists:kelas,id',
            'guru_mapel_id' => 'required|exists:guru_mapels,id',

        ]) ;

        // Cek apakah sudah ada kombinasi user_id dan mapel_id di tabel guru_mapels
        $existing = Jadwal::where('kelas_id', $validated['kelas_id'])
            ->where('guru_mapel_id', $validated['guru_mapel_id'])
            ->first();

        // Kalau sudah ada, kembalikan error
        if ($existing) {
            return redirect()->back()->with('error', 'Guru sudah mengampu kelas tersebut! ');
        }



        // cek apakah ada mapel yang sama dalam satu kelas
        $guru_mapel_id = GuruMapel::where('id' , $validated['guru_mapel_id'])->pluck('mapel_id')->first() ;

        $existing2 = Jadwal::whereHas('guru_mapel',function($query) use ($guru_mapel_id)  {
            $query->where('mapel_id', $guru_mapel_id);
        })->where('kelas_id', $validated['kelas_id'])->first() ;

        // jika sudah terdapat guru_mapel dengan mata pelajaran yang sama pada kelas tersebut walaupun berbeda guru maka akan mengembalikan eror
        if ($existing2) {
            return redirect()->back()->with('error', 'Mata pelajaran tersebut sudah diampu oleh guru yang lain!');
        }



        Jadwal::create($validated);

        return redirect('/admin/jadwal')->with('success', 'Anda telah mengatur guru mengampu kelas!') ;
    }

    public function adminJadwalEdit(Jadwal $jadwal){
        if(!auth()->user()->admin){
            abort(403) ;
        }

        $jadwal ;
        $kelas = Kelas::get();
        $guruMapel = GuruMapel::orderBy('user_id')->get();

        return view('dashboard/admin/tambahjadwal/adminTambahJadwalEdit',[
            'head' => 'Edit Murid',
            'link' => 'admin',
            'jadwal' => $jadwal,
            'kelas' => $kelas,
            'guruMapel' => $guruMapel,

        ]) ;
    }


    public function adminJadwalUpdate(Jadwal $jadwal){
        if(!auth()->user()->admin){
            abort(403) ;
        }

        $validated = request()->validate([
            'kelas_id' => 'required|exists:kelas,id',
            'guru_mapel_id' => 'required|exists:guru_mapels,id',
        ]) ;

        // Cek apakah sudah ada kombinasi user_id dan mapel_id di tabel guru_mapels
        $existing = Jadwal::where('kelas_id', $validated['kelas_id'])
            ->where('guru_mapel_id', $validated['guru_mapel_id'])
            ->first();

        // Kalau sudah ada, kembalikan error
        if ($existing) {
            return redirect()->back()->with('error', 'Guru sudah mengampu kelas tersebut! ');
        }


        // cek apakah ada mapel yang sama dalam satu kelas
        $guru_mapel_id = GuruMapel::where('id' , $validated['guru_mapel_id'])->pluck('mapel_id')->first() ;

        $existing2 = Jadwal::whereHas('guru_mapel',function($query) use ($guru_mapel_id)  {
            $query->where('mapel_id', $guru_mapel_id);
        })->where('kelas_id', $validated['kelas_id'])->first() ;

        // jika sudah terdapat guru_mapel dengan mata pelajaran yang sama pada kelas tersebut walaupun berbeda guru maka akan mengembalikan eror
        if ($existing2) {
            return redirect()->back()->with('error', 'Mata pelajaran tersebut sudah diampu oleh guru yang lain!');
        }





        $jadwal->update($validated);
        return redirect('/admin/jadwal')->with('success', 'Data Jadwal sudah di update!');
    }

}
