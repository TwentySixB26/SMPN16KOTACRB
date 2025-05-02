<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Jadwal;
use App\Models\GuruMapel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class EditProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $userLogin = auth()->user()->id;
        $mapel = GuruMapel::where('user_id',$userLogin)->pluck('id') ;
        $jadwal = Jadwal::whereIn('guru_mapel_id',$mapel)->get() ;

        return view('dashboard/EditProfileUser/profileUser',[
            'head' => 'Profile Guru',
            'link' => 'profile',
            'jadwals' =>$jadwal
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
    public function edit(User $user)
    {
        if (auth()->user()->id !== $user->id) {
            abort(404) ;
        }

        return view('dashboard/EditProfileUser/editProfile',[
            'head' => 'Edit Profile',
            'link' => 'profile',
        ]) ;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(User $user)
    {

        if (auth()->user()->id !== $user->id) {
            abort(404) ;
        }

        //melakukan validasi data
        $validated = request()->validate([
            'name' => 'required|max:160',
            'gol' => 'nullable|max:25',
            'NIP' => 'required',
            'profile' => 'image|file|max:7168',
            'alamat' => 'nullable|max:260',
            'phone' => 'nullable|max:15|unique:users,phone',
            'email' => 'nullable|max:160|unique:users,email',
            'password' => 'nullable|min:4', // Password boleh kosong,
        ]) ;


         // Cek apakah password baru diisi
        if (!empty($validated['password'])) {
            $validated["password"] = Hash::make($validated['password']); // Hash password baru sebelum disimpan
        } else {
            unset($validated['password']);   //menghapus variabel atau elemen array dari memori.
        }

        if (request()->has('profile')) {
            //untuk memasukan img ke file storage
            $imagePath = request()->file('profile')->store('profile') ;

            //validated['image'] di isi dengan imagePath untuk namanya, jadi hasilnya nama di db nya adalah storage/gambar yang dikirm.jpg
            $validated['profile'] = $imagePath ;

            Storage::disk('public')->delete($user->profile ?? '') ;
        } ;

        //melakukan save atau mengirim data ke database
        $user->update($validated);

        return redirect('/profileUser')->with('success', 'Data mu berhasil diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
