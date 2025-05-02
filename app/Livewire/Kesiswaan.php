<?php

namespace App\Livewire;

use App\Models\Murid;
use App\Models\Jadwal;
use Livewire\Component;
use Illuminate\Http\Request;
use Livewire\WithPagination;

class Kesiswaan extends Component
{


    use WithPagination ;
    public $kataKunci;




    public function render()
    {

        $muridAll = Murid::query();

        $totalSiswa7 = Murid::whereIn('kelas_id',[1,2,3,4,5,6,7,8])
                        ->with(['kelas', 'pertemuan' => function ($query) {
                            $query->withPivot('kehadiran');
                        }])
                        ->get()
                        ->groupBy('kelas_id');

        $totalSiswa8 = Murid::whereIn('kelas_id',[9,10,11,12,13,14,15,16,17])
                        ->with(['kelas', 'pertemuan' => function ($query) {
                            $query->withPivot('kehadiran');
                        }])
                        ->get()
                        ->groupBy('kelas_id');


        $totalSiswa9 = Murid::whereIn('kelas_id',[18,19,20,21,22,23,24,25])
                        ->with(['kelas', 'pertemuan' => function ($query) {
                            $query->withPivot('kehadiran');
                        }])
                        ->get()
                        ->groupBy('kelas_id');



        if ($this->kataKunci != null) {
            $muridAll = $muridAll->where('name', 'like' , '%' . $this->kataKunci . '%')->orderBy('kelas_id')->orderBy('name')  ;
        }

        $jadwal = Jadwal::get() ;

        $muridAll = $muridAll->orderBy('kelas_id')->orderBy('name')->paginate(15)  ;

        return view('livewire.kesiswaan',[
            'totalKelas7' => $totalSiswa7,
            'totalKelas8' => $totalSiswa8,
            'totalKelas9' => $totalSiswa9,
            'muridAll' => $muridAll,
            'jadwal' => $jadwal,
        ]);
    }
}
