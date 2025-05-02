<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kelas extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_kelas',
    ];
    public function murid(){
        return $this->hasMany(Murid::class)->latest() ;
    }

    public function jadwal(){
        return $this->belongsToMany(GuruMapel::class,'jadwals')->withTimestamps();
    }
}
