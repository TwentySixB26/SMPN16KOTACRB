<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruMapel extends Model
{
    use HasFactory;
    protected $table = 'guru_mapels'; // Menentukan nama tabel
    protected $fillable = ['user_id', 'mapel_id']; // Menentukan field yang bisa diisi


    public function jadwal(){
        return $this->belongsToMany(Kelas::class,'jadwals')->withTimestamps();
    }

    public function mapel()
    {
        return $this->belongsTo(Mapel::class, 'mapel_id');
    }

    public function guru()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

}
