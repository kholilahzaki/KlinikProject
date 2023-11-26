<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $fillable = ['e_tglAcara', 'e_namaAcara', 'e_lokasiAcara'];

    public function member(){
        return $this->hasMany(Member::class);
    }

    public function absen(){
        return $this->belongsTo(Absen::class);
    }
}
