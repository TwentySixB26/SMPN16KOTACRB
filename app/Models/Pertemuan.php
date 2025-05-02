<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pertemuan extends Model
{
    use HasFactory;
    protected $fillable = [
        'content',
        'jadwal_id',
    ];
    public function jadwal(){
        return $this->belongsTo(Jadwal::class,'jadwal_id') ;
    }
    public function murid(){
        return $this->belongsToMany(Murid::class,'presensis')->withTimestamps();
    }

    public function persensi(){
        return $this->hasMany(Presensi::class, 'pertemuan_id') ;
    }
}
