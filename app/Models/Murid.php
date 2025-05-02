<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Murid extends Model
{
    use HasFactory;

    protected $fillable = [
        'NIS',
        'NISN',
        'name',
        'kelas_id',
        'alamat'
    ];
    public function kelas(){
        return $this->belongsTo(Kelas::class) ;
    }

    public function pertemuan(){
        return $this->belongsToMany(Pertemuan::class,'presensis')->withTimestamps();
    }

    public function persensi(){
        return $this->hasMany(Presensi::class, 'murid_id') ;
    }

}
