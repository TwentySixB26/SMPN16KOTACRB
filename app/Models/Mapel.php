<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mapel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name_mapel',
    ];

    public function guruMapel(){
        return $this->belongsToMany(User::class,'guru_mapels')->withTimestamps();
    }
}
