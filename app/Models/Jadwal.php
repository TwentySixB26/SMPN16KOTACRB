<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    use HasFactory;

    protected $fillable = [
        'kelas_id',
        'guru_mapel_id'
    ];


    public function pertemuan(){
        return $this->hasMany(Pertemuan::class, 'jadwal_id', 'id');
    }

    public function kelas()
    {
        return $this->belongsTo(Kelas::class, 'kelas_id');
    }

    public function guru_mapel()
    {
        return $this->belongsTo(GuruMapel::class, 'guru_mapel_id');
    }
}
